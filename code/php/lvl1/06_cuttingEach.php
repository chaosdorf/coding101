<?php
/*
 *	this script should do this
 *	1. show ALL "c" letters and its index number
 *	2. how many times does c exist?
 *	3. the sum of the index values
 *	but it does not, currently
 */

$pageTitle = 'cuttingbEach';
$lonelyValues = array('a', 'b', 'c', 'd', 'a', 'b', 'c', 'd', 'a', 'b', 'C', 'd', 'a', 'b', 'c', 'd', 'a', 'b', 'c', 'd', 'a', 'b', 'c', 'd', 'a', 'b', 'c', 'd');

?><html>
<head>
<title><?php echo $pageTitle; ?></title>
</head>
<body>
<?php
$indexSum = 0;
foreach ($lonelyValues as $value) {
$cCounter = 0;
if ($value == 'c ') {
$cCounter+;
$indexSum = $key;
print $key . '-'. $value."<br>\n";
}

}

print 'Total C: '. $cCounter;
print "<br>\n";
print 'Index Sum:'.$indexSum;
?>
</body>
</html>