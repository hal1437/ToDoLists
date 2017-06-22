<?php
namespace App\Model\Table;
use Cake\ORM\Table;

class ToDosTable extends Table {
	public function initialize(array $config){
		$this->table('to_dos');
	}
	//完了済みの数を取得
	public function getCompleteToDoCount($list_id){
		return $this->find('all',[
			'conditions' => [
				'and'=>['list_id' => $list_id,
						'comp'    => true
				]
			]
		 ])->count();
	}
	//リスト内のToDo数を取得
	public function getToDoCount($list_id){
		return $this->find('all',[
			'conditions' => ['list_id' => $list_id]
		])->count();
	}
	//リストの存在確認
	public function exist($text){
		return $this->find('all',[
			'conditions' => [
				'name' => $list_name
			]
		 ])->count() > 1;
	}
	//ToDoの存在確認
	public function existToDo($text){
		return $this->find('all',[
			'conditions' => [
				'text' => $text
			]
		])->count()>1;
	}
}
