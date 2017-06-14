<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?= $title?></title>
		<?= $this->Html->css('bootstrap.min.css');?>
	</head>

	<body>
		<!-- ナビゲーションバー -->
		<nav class="navbar navbar-inverse">
			<div class="navbar-header">
				<a href="/home" class="navbar-brand">ToDoLists</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#gnavi">
					<span class="glyphicon glyphicon-search"></span>
				</button>
			</div>
			
			<div id="gnavi" class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="/home/search">検索</a></li>
				</ul>
			</div>
		</nav>	

		<!-- 本文 -->
		<?= $this->fetch('content'); ?>

		<!-- スクリプト -->
		<?= $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js') ?>
		<?= $this->Html->script('bootstrap.min.js') ?>
	</body>
</html>


