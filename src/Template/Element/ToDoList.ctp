<div class="panel panel-default">
	<div class="panel-heading">
		<a class="panel-title" href="/detail?list=<?= $item->getID()?>">
			<?= $item->getName()?>
		</a>
	</div>
	<div class="panel-body">
		<?= $item->getToDoCount() ?>個のうち<?= $item->getCompToDoCount() ?>個がチェック済み。<br>
		
	</div>
</div>
