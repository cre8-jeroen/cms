<?php

namespace Backend\Controller;

use App\Controller\AppController as BaseController;
use Cake\Event\Event;

class AppController extends BaseController
{
	public function initialize()
    {
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'loginRedirect' => [
                'controller' => 'Pages',
                'action' => 'dashboard',
                'plugin' => 'Backend'
            ],
            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login',
                'plugin' => 'Backend'
            ],
            'loginAction' => [
            	'controller' => 'Users',
                'action' => 'login',
                'plugin' => 'Backend'
            ],
            'authenticate' => [
	            'Form' => [
	                'fields' => ['username' => 'email', 'password' => 'password']
	            ]
	        ]
        ]);
    }

    public function beforeFilter(Event $event)
    {
    }
}
