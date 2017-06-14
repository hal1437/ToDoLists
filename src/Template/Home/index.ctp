<div class="container">
	<div>
		<h1>トップページ</h1>
		<p class="lead"><?= $title?></p>
	</div>
	<?= $this->element('ToDoList',['list_name'=>'sample_list','todo_num'=>10,'comp_num'=>5]); ?>
</div>

