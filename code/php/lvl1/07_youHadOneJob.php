<?php
/*
 *	you had one job!
 *	show all items with number(starting with 1!)/name/amount
 */

/*
sample output:

1	hamsters	7
2	nails		0
3	babys		23
*/

$pageTitle = 'one job hou had';
$items = array('hamsters'=>7, 'nails'=>0, 'babys'=>23, 'salatfisten'=>11, 'suggar'=>1);

?><html>
	<head>
		<title><?php echo $pageTitle; ?></title>
	</head>
	<body>
		<table>
			<thead>
				<tr>
					<th>number</th>
					<th>item</th>
					<th>amount</th>
				</tr>
			</thead>
			<tbody>
				<?php
					for ($i=0; $i<=count($items); $i++) {
						echo 'tr';
						echo '<td>'.$items[$i].'<td>';
						echo '<td>'.$items[$i].'<td>';
						echo '<td>'.$i.'<td>';
						echo "<tr>";
					}
				?>
			</tbody>
		</table>
	</body>
</html>
