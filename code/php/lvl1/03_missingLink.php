<?php

/*
 *  theres a missing-link (no shit)
 *  you cant click,
 *  make it show 
 */

$pageTitle = 'missing link';


$linksArray = array(
	'http://wiki.chaosdorf.de/coding101'=>'Coding101',
	'https://twitter.com/bison_42'=>'Twison',
	'https://github.com/pythonfoo/pythonfoo'=>'Pythonfoo-Beginner',
	'https://github.com/bison--'=>'',
	'https://github.com/chaosdorf/coding101'=>'Github Coding101'
);

?><html>
	<head>
		<title><?php echo $pageTitle; ?></title>
	</head>
	<body>
		<h1><?php echo $pageTitle; ?></h1>
		<?php
			foreach ($linksArray as $link=>$linkName) {
				print '<a href="'.$link.'">'.$linkName."</a><br>\n";
			}
		?>
	</body>
</html>
