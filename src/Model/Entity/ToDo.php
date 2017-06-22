<?php 
namespace App\Model\Entity;
use Cake\ORM\Entity;

class ToDo extends Entity {
	public function getToDoID() {
		return $this->todo_id;
	}
	public function getListID() {
		return $this->list_id;
	}
	public function getText() {
		return $this->text;
	}
	public function getDate() {
		return $this->lim;
	}
	public function isComplete() {
		return $this->comp;
	}
}
