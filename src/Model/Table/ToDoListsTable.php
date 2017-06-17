<?php
namespace App\Model\Table;
use Cake\ORM\Table;

class ToDoListsTable extends Table {
	public function initialize(array $config){
		$this->table('to_do_lists');
	}
}
