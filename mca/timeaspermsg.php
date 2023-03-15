<?php
    $time = date("H");
    $timezone = date("Asia/Calcutta");
    $a = $_GET['appt'];
    echo $a;
?>
<form  action="timeaspermsg.php" method="GET">
    <input type="time" id="appt" name="appt"
    min="01:00" max="24:00" required>
    <input type="submit"> 
</form>
    <?php
    
    if ($a >= "04:00" && $a < "12:00") 
    {
        echo "Good morning";
    } 
    else
  
    if ($a >= "12:00" && $a < "16:00") 
    {
        echo "Good afternoon";
    } 
    else
    
    if ($a >= "17:00" && $a < "19:00")
     {
        echo "Good evening";
    } 
    else
   
  
    {
        echo "Good night";
    }
    ?>
