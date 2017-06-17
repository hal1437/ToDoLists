<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;//テーブル使用


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
	public function all(){
		$this->autoRender = false;

		$model = TableRegistry::get('ToDoLists');
		$query = $model->find();
		foreach ($query as $row) {
			echo $row->getID();
			echo $row->getName();
		}
	}


}

