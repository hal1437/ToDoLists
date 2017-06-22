<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;//テーブル使用

class APIController extends AppController
{
	public function initialize(){
	}
	public function index(){
		$this->autoRender = false;
		echo $this->request->query('page');
	}
	public function createToDoList(){
		$this->autoRender = false;
		if($this->request->is('ajax')){
			$set_name = h($this->request->getData('name'));
			if($set_name == ""){
				echo "リスト名が空です";
			}
			$list = TableRegistry::get('ToDoLists');
			$entity = $list->newEntity(); //エンティティ作成
			$entity->setName($set_name);
			$list->save($entity);
			echo "新しいToDoList「".$entity->name."」を作成しました";   //echoでもOK
		}else{
			echo "このAPIはajaxでのみ許可されます。";
		}
	}
	public function createToDo(){
		$this->autoRender = false;
		if($this->request->is('ajax')){
			if(h($this->request->getData('text')) == ""){
				echo "ToDo名が空です";
			}
			$list = TableRegistry::get('ToDos');
			$entity = $list->newEntity(); //エンティティ作成

			$entity->list_id = h($this->request->getData('todo_id'));
			$entity->text    = h($this->request->getData('text'));
			$entity->lim     = h($this->request->getData('date'));
			$entity->comp    = false;

			$list->save($entity);
			echo "新しいToDo「".$entity->text."」を作成しました。";
			echo "期限は".$entity->lim."までです。";
		}else{
			echo "このAPIはajaxでのみ許可されます。";
		}
	}

}

