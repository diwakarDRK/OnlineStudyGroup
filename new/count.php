<?php
$x="op.txt";
$line_count=0;
$h=fopen($x, "r");
while(!feof($h))
{
	$line=fgets($h);
	$line_count++;
}
fclose($h);
echo "There are $line_count lines in file=$x";
?>