<?php
namespace App\Controller;

use App\Controller\AppController;

class HomeController extends AppController
{
	
    public function index(){
		$this->viewBuilder()->autoLayout(false);//cakePHPのヘッダー無効化
		$this->render('/Layout/ToDoHeader'); //レイアウト設定
    }
}

