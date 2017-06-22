<div class="container">
	<div>
		<h1>リスト詳細画面</h1>
		<p class="lead"><?= $title?></p>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			新しいToDoを作成
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label for="ToDoText">ToDo名</label>
				<input type="text" class="form-control" id="ToDoText" placeholder="例.数学のレポート">
			</div>
			<div class="form-group">
				<label for="ToDoDate">締め切り日付</label>
				<input type="text" class="form-control datepicker" id="ToDoDate" placeholder="日付を選択">
			</div>
			<button type="submit" class="btn btn-primary" onclick="CreateToDo()">作成</button>
		</div>
	</div>

	<?php foreach($query as $row):?>
		<?= $this->element('ToDo',['todo_text'=>$row->getText(),
									'todo_lim'=>$row->getDate(),
									'todo_comp'=>$row->isComplete()]); ?>
	<?php endforeach?>

	<?= $this->Html->script('datepicker.js');?>
	<?= $this->Html->script('AccessAPI.js');?>
</div>

