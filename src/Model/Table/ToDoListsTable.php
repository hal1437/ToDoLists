<?php
namespace App\Model\Table;
use Cake\ORM\Table;

class ToDoListsTable extends Table {
	public function initialize(array $config){
		$this->table('to_do_lists');
	}
	//リストの存在確認
	public function existToDoList($name){
		return $this->find('all',[
			'conditions' => [
				'name' => $name
			]
		 ])->count() > 0;
	}
}
