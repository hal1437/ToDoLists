<div class="panel panel-default">
	<div class="panel-body">
		<?php if ($todo_comp==true): ?>
			<button class="btn btn-success pull-right">完了済み</button>
		<?php else: ?>
			<button class="btn btn-warning pull-right">未完了</button>
		<?php endif; ?>
		<?= $todo_text ?><br>
		期限：<?= $todo_lim?>
	</div>
</div>
