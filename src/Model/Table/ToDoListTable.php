<?
namespace App\Model\Table;
use Cake\ORM\Table;

class ToDoListTable extends Table {

	public function initialize() {
		//データベース名
		$this->table('ToDoList');
	}

	public function index() {
		$query = $articles->find();
		// クエリ結果のデータ型は配列ではなくオブジェクト
		// フェッチで結果を取得
		foreach ($query as $row) {
			echo $row->name;
		}
	}
}
