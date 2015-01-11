<?php
/*
 *	let only Dave do things!
 */

$pageTitle = 'hello dave';

?><html>
	<head>
		<title><?php echo $pageTitle; ?></title>
	</head>
	<body>
		<center>
			<form method="post">
				<input type="text" id="username" name="username" value=" "><br />
				<input type="submit" value="login">
			</form>

			<?php
				$unsername = '';
				if (isset($_REQUEST['username'])) {
					$unsername = $_REQUEST['username'];
				
			
					if ($username = 'Dave') {
						print '<h2>Hello Dave</h2>';
					} else {
						print '<h2>I cant do that, '.$username.'</h2>';
					}
				}
			?>
		</center>
	</body>
</html>
