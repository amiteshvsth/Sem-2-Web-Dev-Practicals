<?php

echo "Enter n for nxn : <br>";
echo "<form method='POST'>
	Row:<input type='number' min='2'
			max='5' name='1d' value='1'/>
	<input type='submit' name='submit'
			value='Submit'/>
</form>";

// Submit user iput data for 2D array
if (isset($_POST['submit'])) {
	
	// POST submitted data
	$dimention1 = $_POST["1d"];
	
	
	
	echo "Entered 2d nxn: " . $dimention1
			. "x" . $dimention2 . " <br>";
	$d = [];
	$k = 0;
	
	
}
?>
