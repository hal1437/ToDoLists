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
				<label for="ListName">ToDoList名</label>
				<input type="text" class="form-control" id="ListName" placeholder="例.学校のレポート">
				<button class="btn btn-primary" onclick="CreateToDoList()">作成</button>
			</div>
		</div>
	</div>

	<!--ToDoリストの表示-->
	<?php foreach($query as $row):?>
	<?= $this->element('ToDoList',[ 'item'=>$row]); ?>
	<?php endforeach?>

	<?= $this->Html->script('AccessAPI.js');?>
</div>

