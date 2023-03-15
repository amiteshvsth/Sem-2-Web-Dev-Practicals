<?php
$array = array(120, 42, 3, 54, 77);
echo "Array  : <br><br>";
	foreach($array as $value1)
    {
        echo $value1 . "<br>";
    }
	echo("<br><br><br>");
echo("Max Value :".max($array));
echo("\n<br>");
echo("Min Value :".min($array));
?>