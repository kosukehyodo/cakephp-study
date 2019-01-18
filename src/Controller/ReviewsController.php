<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Reviews Controller
 *
 * @property \App\Model\Table\ReviewsTable $Reviews
 *
 * @method \App\Model\Entity\Review[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReviewsController extends AppController
{
    
    
    public function initialize() {
     parent::initialize();
    
    $this->loadModel('Budgets');
    $this->loadModel('Scenes');
    $this->loadModel('Areas');
    $this->loadModel('Facilities');
    $this->loadModel('Onsens');
    $this->loadModel('Users');
    
     //$this->viewBuilder()->enableautoLayout(false);
     $this->viewBuilder()->setlayout('my_layout_reviews');
     
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Onsens', 'Users']
        ];
        $reviews = $this->paginate($this->Reviews);

        $this->set(compact('reviews'));
    }

    /**
     * View method
     *
     * @param string|null $id Review id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($onsen_id)
    {
        // $review = $this->Reviews->get($id, [
        //     'contain' => ['Onsens', 'Users']
        // ]);
        
        $data = array('Onsens_Reviews.onsen_id IN' => $onsen_id);
        
        $reviews = $this->Reviews->find('all')   
        ->where($data)
        ->contain(['Users','Onsens'])
        ->leftJoinWith('Onsens_Reviews');
        
        $this->set('reviews', $reviews);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($onsen_id)
    {
        //   debug($this->Auth->user('id'));  
        // exit();
        
      if($this->Auth->user('id')){    
        
        $review = $this->Reviews->newEntity();
         
        if ($this->request->is('post')) {
            
            //温泉IDセット
            $review->onsen_id = $onsen_id;
            $review->user_id = $this->Auth->user('id');
            
            $review = $this->Reviews->patchEntity($review, $this->request->getData());
            
            if ($this->Reviews->save($review)) {
                $this->Flash->success(__('登録が完了しました。'));
                
                //別の画面に飛ばしたほうがよさげ
                return $this->redirect(['controller' => 'onsens','action' => 'result']);
            }
            $this->Flash->error(__('登録できませんでした。もう一度やり直してください。'));

            foreach ($review->getErrors() as $key => $error) {
                    foreach ($error as $error_messages) {
                         $this->Flash->error($key .$error_messages);
                    }
                  unset($key, $error_messages);
            }
        }
        $onsens = $this->Reviews->Onsens->find('list', ['limit' => 200]);
        $users = $this->Reviews->Users->find('list', ['limit' => 200]);
        $this->set(compact('review', 'onsens', 'users'));
    }   $this->set('_serialize', ['review']);
}
    /**
     * Edit method
     *
     * @param string|null $id Review id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $review = $this->Reviews->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $review = $this->Reviews->patchEntity($review, $this->request->getData());
            if ($this->Reviews->save($review)) {
                $this->Flash->success(__('The review has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The review could not be saved. Please, try again.'));
        }
        $onsens = $this->Reviews->Onsens->find('list', ['limit' => 200]);
        $users = $this->Reviews->Users->find('list', ['limit' => 200]);
        $this->set(compact('review', 'onsens', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Review id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $review = $this->Reviews->get($id);
        if ($this->Reviews->delete($review)) {
            $this->Flash->success(__('The review has been deleted.'));
        } else {
            $this->Flash->error(__('The review could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
