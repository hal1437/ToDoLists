<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?= $title?></title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>

	<body>
		<nav class="navbar navbar-inverse">
			<div class="navbar-header">
				<a href="/" class="navbar-brand">ToDoLists</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#gnavi">
					<span class="glyphicon glyphicon-search"></span>
				</button>
			</div>
			
			<div id="gnavi" class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="">検索</a></li>
				</ul>
			</div>
		</nav>	

		<?php echo $this->fetch('content'); ?>

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>


