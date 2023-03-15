<?php
    $Name1 = array("Arjun", "Harsh", "Jignesh", "Ram", "Bhavik");
    $Name2 = array("Vishal", "Shayam", "Ankur", "Dharmik", "haresh");
	echo "Array 1 : <br><br>";
	foreach($Name1 as $value1)
    {
        echo $value1 . "<br>";
    }
	print_r( array($Name1));
	echo "<br><br> Array 2 : <br><br>";
	foreach($Name2 as $value2)
    {
        echo $value2 . "<br>";
    }
	print_r( array($Name2));
	echo"<br><br> Merged Array : <br>";
    print_r(array_merge($Name1,$Name2));
 ?>
