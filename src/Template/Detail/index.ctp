<div class="container">
	<div>
		<h1>リスト詳細画面</h1>
		<p class="lead"><?= $title?></p>
	</div>

	<?php foreach($query as $row):?>
		<?= $this->element('ToDo',['todo_text'=>$row->getText()]); ?>
	<?php endforeach?>
	
</div>

