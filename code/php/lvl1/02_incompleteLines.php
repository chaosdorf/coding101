<?php
/*
 *	the output should show 10 lines with numbers
 */

$pageTitle = 'magic hamster page';
$pageHeadline = 'magic hamster title headline';

$outputLines = 0;

?><html>
	<head>
		<title><?php echo $pageTitle; ?></title>
	</head>
	<body>
		<h1><?php echo $pageHeadline; ?></h1>
		<?php
			for ($i=0; $i<=$outputLines; $i++) {
				echo 'here is line number '.$i.'<br />';
			}
		?>
	</body>
</html>