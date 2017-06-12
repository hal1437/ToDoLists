<?php
namespace App\Controller;

use App\Controller\AppController;

class HomeController extends AppController
{

    public function index(){
		$this->viewBuilder()->autoLayout(false);//ヘッダー無効化
// 		$this->autoRender=false;
    }
}

