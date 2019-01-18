<?php
// src/Controller/UsersController.php

//$this->loadModel('Articles');

namespace App\Controller;
 
use App\Controller\AppController;
use Cake\Event\Event;
// パスワード再設定
use Cake\Routing\Router;  
use Cake\Mailer\Email;

 
class UsersController extends AppController
{   
    public function initialize() {
     parent::initialize();
     $this->loadModel('Budgets');
     $this->loadModel('Scenes');
     $this->loadModel('Areas');
     $this->loadModel('Facilities');
     $this->loadModel('Reviews');
     $this->loadModel('Onsens');
     
     //$this->viewBuilder()->enableautoLayout(false);
     $this->viewBuilder()->setlayout('my_layout_users');
     
    }
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['login','registry']);
    }
//     public function index()
// 	{
// 		$this->set('users', $this->Users->find('all'));
// 	}
    public function login()
    {
        if ($this->request->isPost()) {
            $user = $this->Auth->identify();
            
            if (!empty($user)) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('メールアドレスかパスワードが間違っています。');
            // var_dump($user);
            // var_dump($user->getErrors());

            // foreach ($user->getErrors() as $key => $error) {
            //         foreach ($error as $error_messages) {
            //              $this->Flash->error($key .$error_messages);
            //         }
            //       unset($key, $error_messages);
            // }
            
        //  var_dump($this->Foo->validationErrors);

        }
    }

    public function logout()
    {
        // $this->request->getsession()->destory();  session破棄？
        return $this->redirect($this->Auth->logout());
    }
     public function registry()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            
            if ($this->Users->save($user)) {
                $this->Flash->success(__('登録が完了しました。'));

                //ここtopページに遷移でもいいかもしれませんね
                return $this->redirect(['action' => 'registry']);
            }
            $this->Flash->error(__('登録できませんでした。もう一度やり直してください。'));
            
            // var_dump($user);
            // var_dump($user->getErrors());

            // foreach ($user->getErrors() as $key => $error) {
            //         foreach ($error as $error_messages) {
            //              $this->Flash->error($key .$error_messages);
            //         }
            //       unset($key, $error_messages);
            // }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }
    public function search(){
        
        $this->viewBuilder()->setlayout('my_layout_userspage');
        
        $budgets = $this->Budgets->find('all');
        $scenes = $this->Scenes->find('all');
        $areas = $this->Areas->find('all');
        $facilities = $this->Facilities->find('all');
        $users = $this->Users->find('all');
        
        $this->set(compact('budgets'));
        $this->set(compact('scenes'));
        $this->set(compact('areas'));
        $this->set(compact('facilities'));
        $this->set(compact('users'));
 }
    public function isAuthorized($user)
    {
        if (in_array($this->request->getParam('action'), ['edit'])){
             // Check that the $user is equal to the current user.
         $id = $this->request->params['pass'][0];
          if ($id == $user['id']) {
          return true;
          }
        }
        
       return parent::isAuthorized($user);
    }
    public function edit()
    {
        // debug($this->Auth->user('id'));  ログインしたユーザーのID確認用
        // exit();
        if($this->Auth->user('id')){
            $id=$this->Auth->user('id');
            $user = $this->Users->get($id);
         if ($this->request->is(['post', 'patch', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            
            
            if ($this->Users->save($user)) {
                $this->Flash->success(__('登録情報を変更しました。'));
                
                //ここtopページに遷移でもいいかもしれませんね
                return $this->redirect(['action' => 'edit']);
            }
            $this->Flash->error(__('登録情報を変更できませんでした。もう一度やり直してください。'));
            
            // var_dump($user);
            // var_dump($user->getErrors());

            // foreach ($user->getErrors() as $key => $error) {
            //         foreach ($error as $error_messages) {
            //              $this->Flash->error($key .$error_messages);
            //         }
            //       unset($key, $error_messages);
            // }
        }
        }
    
        
        
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }
    public function review(){
        
        $this->viewBuilder()->setlayout('my_layout_usersreview');
        
        if($this->Auth->user('id')){
            $id=$this->Auth->user('id');
            
            $user = $this->Users->get($id,[
            'contain' => ['Reviews'=> ['Onsens']]    
        ]);
            //  var_dump($review);
            $this->set(compact('user'));
        }else{
            //error
        }
    }
    
    public function password()
    {
        if ($this->request->is('post')) {
            $query = $this->Users->findByAddress($this->request->getData('address'));
            $user = $query->first();
            if (is_null($user)) {
                $this->Flash->error('Email address does not exist. Please try again');
            } else {
                $passkey = uniqid();
                $url = Router::Url(['controller' => 'users', 'action' => 'reset'], true) . '/' . $passkey;
                $timeout = time() + DAY;
                 if ($this->Users->updateAll(['passkey' => $passkey, 'timeout' => $timeout], ['id' => $user->id])){
                    $this->sendResetEmail($url, $user);
                    $this->redirect(['action' => 'login']);
                } else {
                    $this->Flash->error('Error saving reset passkey/timeout');
                }
            }
        }
    }

    private function sendResetEmail($url, $user) {

        $email = new Email();
        $email->setTemplate('resetpw');
        $email->setEmailFormat('both');
        $email->setFrom('kosukehyodo0216@gmail.com');
        $email->setTo($user->address);
        $email->setSubject('Reset your password');
        $email->setViewVars(['url' => $url, 'username' => $user->username]);
        if ($email->send()) {
            $this->Flash->success(__('Check your email for your reset password link'));
        } else {
            $this->Flash->error(__('Error sending email: ') . $email->smtpError);
        }
    }

    public function reset($passkey = null) {
        if ($passkey) {
            $query = $this->Users->find('all', ['conditions' => ['passkey' => $passkey, 'timeout >' => time()]]);
            $user = $query->first();
            if ($user) {
                if (!empty($this->request->getData())) {
                    // Clear passkey and timeout
                    $this->request->withData("passkey" ,"");
                    $this->request->withData("timeout" ,"");
                    $user = $this->Users->patchEntity($user, $this->request->getData());
                    if ($this->Users->save($user)) {
                        $this->Flash->set(__('Your password has been updated.'));
                        return $this->redirect(array('action' => 'login'));
                    } else {
                        $this->Flash->error(__('The password could not be updated. Please, try again.'));
                    }
                }
            } else {
                $this->Flash->error('Invalid or expired passkey. Please check your email or try again');
                $this->redirect(['action' => 'password']);
            }
            unset($user->password);
            $this->set(compact('user'));
        } else {
            $this->redirect('/');
        }
    }
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $review = $this->Reviews->get($id);
        if ($this->Reviews->delete($review)) {
            $this->Flash->success(__('The review has been deleted.'));
        } else {
            $this->Flash->error(__('The review could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'review']);
    }
}