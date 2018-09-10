<?php
	mysql_connect("sql.byethost7.org", "yougetca_smf", "hjzrTjQSQcvB") or die(mysql_error());
	mysql_select_db("yougetca_main") or die(mysql_error());
	//define('FORUM_ROOT', './../../forums/');
	//require FORUM_ROOT.'include/common.php';
	//require FORUM_ROOT.'include/master.php';
?>
<!DOCTYPE HTML>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/reset.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>
	<script src="animation.js"></script>
	<title>Lick.YouGetCake.Com</title>
</head>
<body>
	<section>
		<img src="images/logo.png">
		<div id="licker">
			<h1 id="display"><?php require('count.php'); ?></h1>
			<h2>Total Licks</h2>
		</div>
		<div id="d" href="#" style="background-position: 0px -6000px; " onclick="linkClick();"></div>
	</section>
	<footer>
		YouGetCake &copy; 2013 - <a href="mailto:themanwhale@gmail.com">Contact Me</a><br>
	</footer>
</body>

</html>