<div class="container">
	<div>
		<h1>トップページ</h1>
		<p class="lead"><?= $title?></p>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			新しいToDoListを作成
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label for="formGroupExampleInput">ToDoList名</label>
				<input type="text" class="form-control" id="formGroupExampleInput" placeholder="New ToDoList">
			</div>
			<button type="submit" class="btn btn-primary">作成</button>
		</div>
	</div>

	<!--ToDoリストの表示-->
	<?php foreach($query as $row):?>
		<?= $this->element('ToDoList',['list_name'=>$row->getName(),
										'todo_num'=>$row->getToDoCount(),
										'comp_num'=>$row->getCompToDoCount()]); ?>
	<?php endforeach?>

	<?= $this->Html->script('datepicker.js');?>
</div>

