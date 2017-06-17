<?php 
namespace App\Model\Entity;
use Cake\ORM\Entity;

class ToDoList extends Entity {
	public function getID() {
		return $this->list_id;
	}
	public function getName() {
		return $this->name;
	}
	public function setName($name){
		$this->name = $name;
	}
}
