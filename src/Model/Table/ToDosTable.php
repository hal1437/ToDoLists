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
	//ToDoの存在確認
	public function existToDo($list_id,$text){
		return $this->find('all',[
			'conditions' => [
				'and'=>['list_id' => $list_id,
						'text' => $text
				]
			]
		])->count()>0;
	}
}
