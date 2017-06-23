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
		$list = TableRegistry::get('ToDoLists');
		if($this->request->is('ajax')){
			$new_name = h($this->request->getData('name'));
			if($new_name == ""){
				echo "リスト名が空です";
				return ;
			}
			//重複
			if($list->existToDoList($new_name)){
				echo "既に存在するToDoList「". $new_name."」は作成できません。";
				return;
			}
			$entity = $list->newEntity(); //エンティティ作成
			$entity->setName($new_name);
			$list->save($entity);
			echo "新しいToDoList「".$entity->name."」を作成しました";   //echoでもOK
		}else{
			echo "このAPIはajaxでのみ許可されます。";
		}
	}
	public function createToDo(){
		$this->autoRender = false;
		$list = TableRegistry::get('ToDos');
		if($this->request->is('ajax')){
			//ToDo名が空
			if(h($this->request->getData('text')) == ""){
				echo "ToDo名が空です";
				return;
			}
			//重複
			if($list->existToDo(h($this->request->getData('text')))){
				echo "既に存在するToDo「". h($this->request->getData('text'))."」は作成できません。";
				return;
			}
			//エンティティ追加
			$entity = $list->newEntity(); 
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

