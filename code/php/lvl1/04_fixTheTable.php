<?php
/*
 *	fix the table
 *	show the content from '$entrysArray'
 */

$pageTitle = 'fix the table';
$entrysArray = array('hamster', 'spam', 'eggs', 'foo', 'bar');

?><html>
	<head>
		<title><?php echo $pageTitle; ?></title>
	</head>
	<body>
		<table>
			<thead>
				<tr>
					<th>Inventory</th>
					<th>Inventory Index</th>
				</tr>
			</thead>
			<tbody>
				<?php
					for ($i=0; $i<=0; $i++) {
						print '<tr>';
						print '<td>'.$entrysArray.'</td>';
						print '<td>'.$i.'</td>';
						print '</tr>';
					}
				?>
			</tbody>
		</table>
	</body>
</html>
