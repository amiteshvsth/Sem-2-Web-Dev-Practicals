<?php
$cookie_name = "user";
$cookie_value = "Bhavik Chauhan";
setcookie($cookie_name, $cookie_value, time() + (10), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>
<?php
// set the expiration date to one hour ago
setcookie("user", "", time() - 10);
?>
<html>
<body>
<br>
<?php
echo "Cookie 'user' is deleted.";
?>

</body>
</html>