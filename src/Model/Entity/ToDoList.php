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
	public function getDate() {
		return $this->made;
	}

	//ToDoの数を取得
	public function getToDoCount(){
		$todo = TableRegistry::get('ToDos');
		return $todo->getToDoCount($this->getID());
	}
	//完了したToDoの数を取得
	public function getCompToDoCount(){
		$todos = TableRegistry::get('ToDos');
		return $todos->getCompleteToDoCount($this->getID());
	}
	//未完了の中でもっとも最近のものを取得
	public function getLimitRecent(){
		if($this->getToDoCount() == $this->getCompToDoCount())return "";
		else{
			$todos = TableRegistry::get('ToDos');
			return $todos->getLimitRecent($this->getID());
		}
	}
	public function setName($name){
		$this->name = $name;
	}
}
