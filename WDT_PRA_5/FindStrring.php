<?php
$word = "people";
$string = "an account of imaginary or real people and events told for entertainment.";
if(strpos($string, $word) !== false){
    echo "Word Found!<br>";
	echo "word is :".$word;
} else{
    echo "Word Not Found!";
}
?>