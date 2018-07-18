<?php
    namespace App\Controller;

    use Backend\Controller\PagesController as BaseBackendPagesController;

    class BackendPagesController extends BaseBackendPagesController
    {
    	public function dashboard()
    	{

    		echo 'override';
    		$this->testfunctie();
    	}
    }

