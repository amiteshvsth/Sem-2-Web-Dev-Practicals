<?php
    $Name = array("Arjun", "Harsh", "Jignesh", "Ram", "Bhavik");

    foreach($Name as $value)
    {
        echo $value . "<br>";
    }
	echo "<br><br>";
	echo "Array in Reverse Order <br><br><br>";
    print_r(array_reverse($Name));
?>