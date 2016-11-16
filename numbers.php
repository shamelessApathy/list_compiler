<?php 

$count = 1192;

for ($i =1; $i <= $count; $i++)
{
	$string = 'custom/' . $i . "\r\n";
	file_put_contents('numbers.csv', $string, FILE_APPEND);
}

?>
