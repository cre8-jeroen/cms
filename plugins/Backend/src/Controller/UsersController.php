<?php
namespace Backend\Controller;

use Backend\Controller\AppController;
use Cake\Event\Event;

class UsersController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['logout']);
    }

     public function index()
     {
        $this->set('users', $this->paginate($this->Users));
    }

    public function view($id)
    {
        $user = $this->Users->get($id);
        $this->set(compact('user'));
    }

    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Gebruiker opgeslagen.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Fout tijdens het toevoegen. Probeer opnieuw.'));
        }
        $this->set('user', $user);
    }



    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Ongeldige logingegevens. Probeer opnieuw!'));
        }
    }

    public function logout()
    {
        $this->Flash->success(__('Succesvol uitgelogd!'));
        return $this->redirect($this->Auth->logout());
    }

}