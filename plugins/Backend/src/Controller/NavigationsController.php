<?php
namespace Backend\Controller;

use Backend\Controller\AppController;

/**
 * Navigations Controller
 *
 *
 * @method \Backend\Model\Entity\Navigation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NavigationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
       
    }

    /**
     * View method
     *
     * @param string|null $id Navigation id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $navigation = $this->Navigations->get($id, [
            'contain' => []
        ]);

        $this->set('navigation', $navigation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $navigation = $this->Navigations->newEntity();
        if ($this->request->is('post')) {
            $navigation = $this->Navigations->patchEntity($navigation, $this->request->getData());
            if ($this->Navigations->save($navigation)) {
                $this->Flash->success(__('The navigation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The navigation could not be saved. Please, try again.'));
        }
        $this->set(compact('navigation'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Navigation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $navigation = $this->Navigations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $navigation = $this->Navigations->patchEntity($navigation, $this->request->getData());
            if ($this->Navigations->save($navigation)) {
                $this->Flash->success(__('The navigation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The navigation could not be saved. Please, try again.'));
        }
        $this->set(compact('navigation'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Navigation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $navigation = $this->Navigations->get($id);
        if ($this->Navigations->delete($navigation)) {
            $this->Flash->success(__('The navigation has been deleted.'));
        } else {
            $this->Flash->error(__('The navigation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
