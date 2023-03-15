<!DOCTYPE html>
<html>
<head>
   <title></title>
   </head>
   <body>
   <form method='POST'>
   <h2>Enter your name:</h2>
 <input type="text" name="name">
 <input type="submit" value="Submit Name">
 
 </form>
<?php
$name = $_POST['name'];
echo "<h3> Hello $name </h3>";
?>
</body>
</html>