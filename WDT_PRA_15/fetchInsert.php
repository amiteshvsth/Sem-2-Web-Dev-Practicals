<html>
    <head>
        <title></title>
    </head>
<body>
    <form action='fetchInsert.php' method='POST'>
    <table rules='all' border='1'>
        <tr>
            <td colspan='2'>Student Registration</td>
        </tr>
        <tr>
            <td>Name : </td>
            <td><input type='text' name='sname'></td>
        </tr>
        <tr>
            <td>Phone No : </td>
            <td><input type='text' name='sphone'></td>
        </tr>
        <tr>
            <td>City : </td>
            <td><input type='text' name='city'></td>
        </tr>
        <tr>
            <td colspan='2'><input type='submit' name='submit'></td>
        </tr>
    </table>
    </form>
</body>
<?php 
    if(isset($_REQUEST['submit']))
    {
        $name = $_POST['sname'];
        $phone = $_POST['sphone'];
        $city = $_POST['city'];
        $con = mysqli_connect("localhost",'root','','college');
        if($con)
        {
            echo "Connection Successfull !"; 
        }
        $q = "insert into student(`name`,`mobileno`,`city`) values('".$name."','".$phone."','".$city."')";
        $query = mysqli_query($con,$q);
        if($query)
        {
            echo "<script>alert('Record Inserted'); </script>";
            header("location:fetchInsert.php");

        }
    }
?>
<form action='fetchInsert.php' method='POST'><input type='submit' name='fetch' value="Fetch Records"></form>
<?php 
    if(isset($_REQUEST['fetch']))
    {
        $con = mysqli_connect("localhost",'root','','college');
        $q = "select *from student";
        $query = mysqli_query($con,$q);
        ?> <table rules='all' border='1'> 
                 <tr>
                <td colspan='4'>Student Registration</td></tr>
                <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Phone No</td>
                <td>City</td>           
            </tr>
      <?php
        while($res = mysqli_fetch_array($query))
        {?>
        <tr>
        <td><?php echo $res[0]; ?></td>
        <td><?php echo $res[1]; ?></td>
        <td><?php echo $res[2]; ?></td>
        <td><?php echo $res[3]; ?></td>
        </tr>
             <?php }}?>