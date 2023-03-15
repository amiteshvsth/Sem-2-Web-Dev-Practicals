<?php
date_default_timezone_set("Asia/Calcutta");
    $hour = date('H', time());
	echo "</br>";  
$our = new DateTime();
echo $our->format('Y-m-d H:i:s');
echo "</br>"; 
if( $hour > 6 && $hour <= 11) {
  echo "Good Morning";
}
else if($hour > 11 && $hour <= 16) {
  echo "Good Afternoon";
}
else if($hour > 16 && $hour <= 20) {
  echo "Good Evening";
}
else if($hour > 21 && $hour <= 24) {
  echo "Good Night";
}
?>