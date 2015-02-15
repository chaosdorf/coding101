 <?php

/*
 *	on button click get somewhere else
 */

$pageTitle = 'why Noot Woark';


if (isset($_REQUEST['gOg0']) && $_REQUEST['gOg0'] == 'WHO0OSH!') {
	header('Location: http://c2s.ch/0518796d1');
	exit();
}

?>
<html>
	<head>
		<title><?php echo $pageTitle; ?></title>
	</head>
	<body>
		<form method="POST">
		klick <input type="submit" name="gOgO" value="WHOOOOSH!" /> to get somewhere else 
		</form>
	</body>
</html>