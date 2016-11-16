<?php

/*
*
*  This is a script to compile a massive list of 301 redirects into one .htaccess file
*    
*
*/


$listone = $argv[1];
$listtwo = $argv[2];

$listone = array_map('str_getcsv', file($listone));
$listtwo = array_map('str_getcsv', file($listtwo));
$length = count($listone);
var_dump($length);
for ($i = 0; $i < $length; $i++)
{
	$boom = str_split($listtwo[$i][0]);
	if ( $boom[0] === '/')
	{
	$string = "301 Redirect " . $listone[$i][0] . " " . $listtwo[$i][0] . "\r\n";
	file_put_contents('301.txt', $string, FILE_APPEND);
	}
	else
	{
		file_put_contents('301.txt', $string, FILE_APPEND);
		$string = "this one isn't correct: ". $listone[$i][0] . "\r\n";
		file_put_contents('problems.txt' , $string, FILE_APPEND);
	}
}



?>