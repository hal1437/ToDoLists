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
// 		$set_name = "sample";
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
}

