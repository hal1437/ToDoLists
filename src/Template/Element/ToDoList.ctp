<div class="panel panel-default">
	<div class="panel-heading">
		<a class="panel-title" href="/detail?list=<?= $item->getID()?>">
			<?= $item->getName()?>
		</a>
	</div>
	<div class="panel-body">
		<?php if($item->getToDoCount()==0):?>
			ToDoがありません。<br>
		<?php else: ?>
			<?= $item->getToDoCount() ?>個のうち<?= $item->getCompToDoCount() ?>個がチェック済み。<br>
		<?php endif;?>

		<?php if(isset($made)):?>
			作成日時：<?= $made->format('Y年m月d日') ?><br>
		<?php endif;?>
		<?php if($item->getLimitRecent()!=""):?>
			締め切り：<?= $item->getLimitRecent()->format('Y年m月d日') ?><br>
		<?php endif;?>
		
	</div>
</div>
