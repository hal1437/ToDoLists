<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;//テーブル使用

class DetailController extends AppController
{
	public function initialize(){
		$this->viewBuilder()->layout('ToDoHeader');
	}
	public function getListID(){
		$model = TableRegistry::get('ToDoLists');
		$query = $model->find('all',[
			'conditions' =>[
				'name' => $this->request->query['list']
			]
		]);
		foreach($query as $row){
			return $row->getID();
		}
		return 0;
	}
	public function index(){
		$this->set('title','ToDoLists - Detail');

		//モデルからリストを抽出
		$model = TableRegistry::get('ToDos');
		$this->set('query',$model->find('all',[
			'conditions' =>[
				'list_id' => $this->getListID()
			]
		]));
	}
}


