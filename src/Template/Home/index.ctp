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
			<div class="form-group">
				<label for="mydate">日付</label>
				<input type="text" class="form-control datepicker" id="mydate">
			</div>
			<button type="submit" class="btn btn-primary">作成</button>
		</div>
	</div>

	<?= $this->element('ToDoList',['list_name'=>'sample_list','todo_num'=>10,'comp_num'=>5]); ?>
	<?= $this->Html->script('datepicker.js');?>
</div>

