<div class="panel panel-default">
	<div class="panel-body">
		<?php if ($item->isComplete()==true): ?>
			<button class="btn btn-success pull-right" onclick="ToggleToDo(<?= $item->getToDoID()?>)">完了済み</button>
		<?php else: ?>
			<button class="btn btn-warning pull-right" onclick="ToggleToDo(<?= $item->getToDoID()?>)">未完了</button>
		<?php endif; ?>
		<?= $item->getText() ?><br>
		作成日：<?= $item->getDate()->format('Y年m月d日')?><br>
		期限　：<?= $item->getLimit()->format('Y年m月d日')?>
	</div>
</div>
