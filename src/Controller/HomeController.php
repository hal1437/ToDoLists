<?php
namespace App\Controller;

use App\Controller\AppController;

class HomeController extends AppController
{
	
    public function index(){
		$this->viewBuilder()->layout('ToDoHeader');
		$this->set('title','ToDoLists - TopPage');
    }
    public function detail(){
		$this->viewBuilder()->layout('ToDoHeader');
		$this->set('title','ToDoLists - Detail');
    }
    public function search(){
		$this->viewBuilder()->layout('ToDoHeader');
		$this->set('title','ToDoLists - Search');
    }


}

