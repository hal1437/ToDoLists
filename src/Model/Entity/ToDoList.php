<?php 
namespace App\Model\Entity;
use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;//テーブル使用

class ToDoList extends Entity {
	public function getID() {
		return $this->list_id;
	}
	public function getName() {
		return $this->name;
	}

	//ToDoの数を取得
	public function getToDoCount(){
		$todo = TableRegistry::get('ToDos');
		return $todo->find('all',[
			'conditions' => ['list_id' => $this->getID()]
		])->count();
	}
	//完了したToDoの数を取得
	public function getCompToDoCount(){
		$todo = TableRegistry::get('ToDos');
		return $todo->find('all',[
			'conditions' => [
				'and'=>['list_id' => $this->getID(),
						'comp'    => true
				]
			]
		 ])->count();
	}

	public function setName($name){
		$this->name = $name;
	}
}
