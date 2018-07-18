<?php
namespace Backend\Controller;

use Backend\Controller\AppController;
use Cake\ORM\Behavior\TranslateBehavior;
use Cake\I18n\I18n;
use Cake\ORM\TableRegistry;
use Backend\Model\Entity\Page;


class PagesController extends AppController
{
    public function dashboard()
    {

    }

    public function index()
    {

    }

    public function edit($id = null)
    {

    	if ($this->request->is('post')) {
    		echo 'ok';
    		exit;
    		$page = $this->Pages->newEntity($this->request->getData());
    		$page = $this->Pages->patchEntity($pages, $this->request->getData());
    		pr($page);
    		exit;
			$this->Pages->save($page);
    	}else{
    		if(!empty($id))
    		{
    			$page = $this->Pages->find('translations')
    					->where(['Pages.id' => $id])
    					->first();
    		}else{
    			$page = $this->Pages->newEntity();
    		}	
    	}
    	$this->set('page', $page);
    	/*
    	$page = $this->Pages->newEntity();
    	$page->_locale = 'nl';
		$page->title = 'Titel';

		$this->Pages->save($page);

		$page->_locale = 'en';
		$page->title = 'Title';

		$this->Pages->save($page);*/



    }

}
