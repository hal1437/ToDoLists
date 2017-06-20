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
				<label for="formGroupExampleInput">ToDo名</label>
				<input type="text" class="form-control" id="formGroupExampleInput" placeholder="New ToDo">
			</div>
			<div class="form-group">
				<label for="mydate">締め切り日付</label>
				<input type="text" class="form-control datepicker" id="mydate">
			</div>
			<button type="submit" class="btn btn-primary">作成</button>
		</div>
	</div>

	<?php foreach($query as $row):?>
		<?= $this->element('ToDo',['todo_text'=>$row->getText()]); ?>
	<?php endforeach?>
	
</div>

