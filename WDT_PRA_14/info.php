<?php
if(isset($_POST['submit']))
{
  $cno = $_POST['cn'];
  $cname = $_POST['cname'];
  $Iname = $_POST['it'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
}
?>
<table border="1" width='400px' height="300px" rules='all' align="center">
      <tr><td colspan="2"><h1><center>Customer Information</h1></td></tr>
      <tr><td> Customer no </td>
        <td><?php echo $cno; ?></td></tr>
      <tr><td> Customer name: </td>
        <td><?php echo $cname; ?></td></tr>
      <tr><td> Item Purchased : </td>
        <td><?php foreach ($Iname as $a){
    echo $a.'<br>'; } ?></td></tr>
      <tr><td>Phone No :</td>
        <td><?php echo $phone; ?></td></tr>
      <tr><td>Email:</td>
        <td><?php echo $email; ?></td></tr>
      <tr><td>Total Amount :</td>
        <td><?php echo rand(1000,1500); ?></td></tr>
    </table>
