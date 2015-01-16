<?php
/*
 *	greet everyone who haz login data
 */


$pageTitle = 'hello';
$users = array('Dave'=>'123', 'Hamster'=>'456', 'Master'=>'789');
$isLoggedIn = false;

if (isset($_REQUEST['username']) || isset($_REQUEST['pass'])) {
	if (isset($users[$_REQUEST['username']]) && $users[$_REQUEST['username']] = $_REQUEST['pass']) {
		$isLoggedIn = true;
		$pageTitle .= $_REQUEST['username'];
	}
}

?><html>
	<head>
		<title><?php print $pageTitle; ?></title>
	</head>
	<body>
		<center>
			<?php
			if ($isLoggedIn == false) {
				?>
				<form method="post">
					<label for='username'>Username: </label><input type="text" id="username" name="Username" value=" "><br />
					<label for='pass'>Password: </label><input type="password" id="pass" name="pass" value=""><br />
					<input type="submit" value="login">
				</form>
				<?php
			}

			if (!$isLoggedIn) {
				print '<h2>Hello '.$_REQUEST['username'].'</h2>';
			} elseif (isset($_REQUEST['username'])) {
				print '<h2>I cant do that, ' .$username.'</h2>';
			} else {
				print '<h2>PLEASE LOG IN</h2>';
			}

			?>
		</center>
	</body>
</html>
