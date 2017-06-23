<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;//テーブル使用

class SearchController extends AppController
{
	public function initialize(){
		$this->viewBuilder()->layout('ToDoHeader');
	}
	public function index(){
		$this->set('title','ToDoLists - Search');
// 		$this->Search($this->request->query('page'));
		$this->Search("レポート");
	}

	//検索
	public function Search($key_word){
		$lists = TableRegistry::get('ToDoLists');
		$todos = TableRegistry::get('ToDos');
		
		//リストの検索
		$list_query = $lists->find('all',[
			'conditions' => [
				'name LIKE' => $key_word
			]
		]);
		//todoの検索
		$todo_query = $todos->find('all',[
			'conditions' => [
				'text LIKE' => $key_word
			]
		]);
		$this->set('list_query',$list_query);
		$this->set('todo_query',$todo_query);
	}
}


