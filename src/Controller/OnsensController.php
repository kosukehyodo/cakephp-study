<?php
// src/Controller/OnsensController.php

namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\Event\Event;

class OnsensController extends AppController
{
    public function initialize() {
     parent::initialize();
     $this->loadModel('Budgets');
     $this->loadModel('Scenes');
     $this->loadModel('Areas');
     $this->loadModel('Facilities');
     $this->loadModel('Users');
     $this->loadModel('Reviews');
     
     //$this->viewBuilder()->enableautoLayout(false);
     $this->viewBuilder()->setlayout('my_layout_onsens');
     
    }
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['search','initialize']);
    }
   
    public function index()
    {
    //一覧を出すページ
    }
    public function view()
    {
    //1レコードだけを出すために利用しましょう
        
    }
    
    public function review($id){
        
    $this->viewBuilder()->setlayout('my_layout_onsens_review');
    
        //reviewsの中のuser_idにも紐づいている
        // $onsen = $this->Onsens->get($id, [
        //     'contain' => ['Reviews' => ['Users']]    
        // ]);
        //->where(['Onsens'=>['Reviews.user_id' => 1]]);

                //reviewsの中のuser_idにも紐づいている
        // $onsen = $this->Onsens->get($id, [
        //     'contain' => array(
        //       'Reviews',
        //       'Reviews.Users'=> array(
        //       'order' => array('Reviews.Users.age' => '= "20代" desc')
        //       )
        //     )
        // ]);
        
        //Usersテーブルからログインしているユーザーのage情報を取得する
        //Authのuseridを利用して
        $user = $this->Users->get($this->Auth->user('id'));
        $onsen = $this->Onsens->get($id);
        
        //debug($user->age);
        //$user->age = "20代";
        $reviews = $this->Reviews->find('all', [
            'conditions' => array('Reviews.onsen_id' => $id),
            'contain' => ['Users','Onsens'],
            // 'order' => array('Users.age' => '= "'.$user->age.'" desc')
            // 'order' => array('Users.age' => '= "'.$user->age.'"',
            //'order' => 'Users.age = "20代" desc'(→ORDER BY Users.age = "50代" desc)
            'order' => 'Users.age = "'.$user->age.'" desc'
        ]);
        
        
        // $onsen = $this->Onsens->find('all',[
        //     'conditions' => array('id' => $id),
        //     'contain' => ['Reviews' => ['Users'=> function ($q) {
        //      return $q;
        // }]],
        // ]);
        // ->where(['Onsens'=>['Reviews.user_id' => 1]]);
        
        //print_r($reviews);
        $this->set('reviews',$reviews);
        $this->set('onsen',$onsen);
    }
    
    public function result()
    {
    $this->viewBuilder()->setlayout('my_layout_onsens_search');
    
    // 複数回セッションにアクセスする
    $session = $this->getRequest()->getSession();
    
    //リクエストがPOSTの場合
    // if($this->request->is('post')){
    
       //データ保持
       if($this->request->getData()){
         $session->write('requestSearchConditions',$this->request->getData());
       }
           
       $requestSearchConditions = $session->read('requestSearchConditions');
       debug($requestSearchConditions);
       
         
       //Formの値を取得
    //   $name =$this->request->getData(['name']);
    //   $budget_id =$this->request->getData(['budget']);
    //   $scenes_id = $this->request->getData(['scenes']);
    //   $area_id = $this->request->getData(['area']);
    //   $facilities_id = $this->request->getData(['facilities']);
        //  $reviews_id = $this->request->getData(['reviews']);
       
       $name =$requestSearchConditions['name'];
       $budget_id =$requestSearchConditions['budget'];
       $scenes_id = $requestSearchConditions['scenes'];
       $area_id = $requestSearchConditions['area'];
       $facilities_id = $requestSearchConditions['facilities'];
    //   reviewsに関しては、表示させないのでセッションは作る必要はない？
    //   $reviews_id = $requestSearchConditions['reviews'];  
       
      //条件文章の追加
      $c_arr = array('Onsens.name like'=>'%'.$name.'%');
      if(!empty($budget_id)){
        $c_arr += array('Onsens.budget_id' => $budget_id); 
      }
      if(!empty($scenes_id[0])){
        //   $sids = [1, 2];
        //   var_dump($scenes_id);
        $c_arr += array('Onsens_Scenes.scene_id IN' => $scenes_id); 
      }
      if(!empty($area_id)){
        $c_arr += array('Onsens.area_id' => $area_id); 
      }
      if(!empty($facilities_id[0])){
        //   $sids = [1, 2];
        //   var_dump($facilities_id);
         $c_arr += array('Onsens_Facilities.facility_id IN' => $facilities_id); 
      }
    //   if(!empty($reviews_id[0])){
    //     //   $sids = [1, 2];
    //     //   var_dump($facilities_id);
    //      $c_arr += array('Onsens.id IN' => $reviews_id); 
    //   }
      
      
	$data = $this->Onsens->find('all')
				->where($c_arr)
				->contain(['Budgets','Scenes','Areas','Facilities'])
				->group('Onsens.id')
				->leftJoinWith('Onsens_Scenes')
				->leftJoinWith('Onsens_Facilities');
				
// 	echo($data->sql());
      
      
    //   var_dump($data);
     
       $this->set('onsens',$data);
       $this->set('name',$name);    //検索した文字を表示
       $this->set('count',$data->count());  //検索した温泉の数を表示
       
    // }else{ //POST以外の場合
    //   //Onsenモデルから全てのデータを検索
    //   $data=$this->Onsens->find('all');
    //   //データの連想配列をセット
    //   print_r($data);
    //   $this->set('onsens',$data);
    // }
     
        
    }
    
    public function search(){
        
        //確認用
        debug($this->Auth->user("address"));
        
        $budgets = $this->Budgets->find('all');
        $scenes = $this->Scenes->find('all');
        $areas = $this->Areas->find('all');
        $facilities = $this->Facilities->find('all');
        $users = $this->Users->find('all');
        $reviews = $this->Reviews->find('all');
        
        
        $this->set(compact('budgets'));
        $this->set(compact('scenes'));
        $this->set(compact('areas'));
        $this->set(compact('facilities'));
        $this->set(compact('users'));
        $this->set(compact('reviews'));
 }
}