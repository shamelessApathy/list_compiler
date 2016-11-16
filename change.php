<?php 

$listone = $argv[1];
$listone = array_map('str_getcsv', file($listone));



foreach($listone as $row)
{
	echo $row[0][0];
	$row = $row[0];
	$row = str_split($row);
	$shift = array_shift($row);
	$test = isset($row[1]);
	if (!$test)
	{
		$row = "index.php\r\n";
		file_put_contents('csv_change2.csv', $row, FILE_APPEND);
	}
	else
	{
		$row = implode($row);
		$row = $row . "\r\n";
		file_put_contents('csv_change2.csv', $row, FILE_APPEND);
	}
}


?>