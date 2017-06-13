<?php
namespace App\Controller;

use App\Controller\AppController;

class HomeController extends AppController
{
	
    public function index(){
		$this->viewBuilder()->layout('ToDoHeader');
		$this->set('title','ToDoLists - TopPage');
    }

}

