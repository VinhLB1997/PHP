<?php
namespace App\Controller;

class UsersController extends AppController{

    public function index(){
        $this->loadComponent('Paginator');
        $users = $this->Paginator->paginate($this->Users->find());
        $this->set(compact('users'));
    }

    public function view($id = null){
        $user = $this->Users->findById($id)->firstOrFail();
        $this->set(compact('user'));
    }

    public function add(){
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());

            // Hardcoding the user_id is temporary, and will be removed later
            // when we build authentication out.
            $user->user_id = 1;

            if ($this->Users->save($user)) {
                $this->Flash->success(__('Your article has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your article.'));
        }
        $this->set('user', $user);
    }

    public function edit($id){
        $user = $this->Users->findById($id)->firstOrFail();
        if ($this->request->is(['post', 'put'])) {
            $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Your article has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update your article.'));
        }

        $this->set('user', $user);
    }

    public function delete($id){
        $this->request->allowMethod(['post', 'delete']);

        $user = $this->Users->findById($id)->firstOrFail();
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The {0} article has been deleted.', $user->name));
            return $this->redirect(['action' => 'index']);
        }
    }
}
?>
