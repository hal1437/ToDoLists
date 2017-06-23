<div class="panel panel-default">
	<div class="panel-body">
		<?php if ($item->isComplete()==true): ?>
			<button class="btn btn-success pull-right">完了済み</button>
		<?php else: ?>
			<button class="btn btn-warning pull-right">未完了</button>
		<?php endif; ?>
		<?= $item->getText() ?><br>
		作成日：<?= $item->getDate()?><br>
		期限　：<?= $item->getLimit()?>
	</div>
</div>
