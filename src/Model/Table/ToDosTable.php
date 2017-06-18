<?php
namespace App\Model\Table;
use Cake\ORM\Table;

class ToDosTable extends Table {
	public function initialize(array $config){
		$this->table('to_dos');
	}
}
