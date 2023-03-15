<html>
<head>
  <title>
    Registration Page
  </title>
</head>
<body>
  <form action="index.php" method="POST">
    <table border="1" width='400px' height="500px" rules='all' align="center">
      <tr>
        <td colspan="2"><h1><center>Email Registration</h1></td>
      </tr>
      <tr>
        <td> Firstname </td>
        <td><input type="text" name="fname"></td>
      </tr>
      <tr>
        <td> Lastname: </td>
        <td><input type="text" name="lname"></td>
      </tr>
      <tr>
        <td>country :</td>
        <td>
          <select name="con">
            <option value="India">India</option>
            <option value="America">America</option>
            <option value="Chaina">Chaina</option>
            <option value="United Kingdom">United Kingdom</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Phone :</td>
        <td><input type="text" name="phone" size="10" /></td>
      </tr>
      <tr>
        <td>Email:</td>
        <td><input type="email" name="email" /></td>
      <tr>
        <td>Password:</td>
        <td><input type="Password" name="pass"></td>
      </tr>
      <tr>
        <td colspan="2"><center>
          <input type="submit" name="submit" value="Register" />
        </td>
      </tr>
    </table>
  </form>
</body>

</html>
<?php
if(isset($_POST['submit']))
{
  $con = mysqli_connect("localhost","root","","email");
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $contry = $_POST['con'];
  $phone = $_POST['phone'];
  $q = "INSERT INTO email_info(`e_fname`, `e_lname`, `e_email`, `e_pass`, `e_country`, `e_mobileno`)  VALUES('$fname','$lname','$email','$pass','$contry','$phone')";
  //echo $q;
  $res = mysqli_query($con,$q);
  if($res)
  {
    echo "<script>alert('Record Inserted');</script>";
  }

}
?>