<div class="container">
	<div>
		<h1>検索</h1>
		<p class="lead"><?= $title?></p>
	</div>
	<!--ToDoリストの表示-->
	<h3><?= $list_query->count() ?>件のリスト</h3>
	<?php foreach($list_query as $row):?>
	<?= $this->element('ToDoList',[ 'list_id'  =>$row->getID(),
									'list_name'=>$row->getName(),
									'todo_num' =>$row->getToDoCount(),
									'comp_num' =>$row->getCompToDoCount()]); ?>
	<?php endforeach?>
	<h3><?= $todo_query->count() ?>件のToDo</h3>
	<?php foreach($todo_query as $row):?>
		<?= $this->element('ToDo',['todo_text'=>$row->getText(),
									'todo_lim'=>$row->getDate(),
									'todo_comp'=>$row->isComplete()]); ?>
	<?php endforeach?>
</div>

