<?php 
namespace App\Model\Entity;
use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;//テーブル使用

class ToDo extends Entity {
	public function getToDoID() {
		return $this->todo_id;
	}
	public function getListID() {
		return $this->list_id;
	}
	public function getListName() {
		$list = TableRegistry::get('ToDoLists');
		$query = $list->find('all',[
			'conditions' =>[
				'list_id' => $this->getListID()
			]
		]);
		return $query->first()->getName();
	}
	public function getText() {
		return $this->text;
	}
	public function getDate() {
		return $this->made;
	}
	public function getLimit() {
		return $this->lim;
	}
	public function isComplete() {
		return $this->comp;
	}
}
