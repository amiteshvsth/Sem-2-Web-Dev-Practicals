<?php 
    $con = mysqli_connect('localhost','root','','company');
   
    if(isset($_REQUEST['id']))
    {
        $id = $_REQUEST['id'];
        $q = mysqli_query($con,"DELETE from employee where emp_id = '".$id."'");
        if($q)
        {
            header('location:index.php');
        }
    }
    if(isset($_REQUEST['eid']))
    {
        $id = $_REQUEST['eid'];
        $q = mysqli_query($con,"select *from employee where emp_id = '".$id."'");
        $res = mysqli_fetch_array($q);
        ?>
        <form action='ope.php' method='POST'>
        <table>
            <tr>
                <td><input type='text' name='empname' value='<?php echo $res[1];?>'></td>
                <td><input type='hidden' name='empid' value='<?php echo $res[0];?>'></td>
            </tr>
            <tr>
                <td><input type='text' name='desig' value='<?php echo $res[2];?>'></td>
            </tr>
            <tr>
                <td><input type='text' name='salary' value='<?php echo $res[3];?>'></td>
            </tr>
            <tr>
                <td><input type='submit' name='edit' value='UPDATE'></td>
            </tr>
    </form>
        <?php
    }   


    if(isset($_POST['edit']))
    {
        $id = $_POST['empid'];
        $name = $_POST['empname'];
        $des = $_POST['desig'];
        $salary = $_POST['salary'];
        $qu = "UPDATE employee set emp_name = '$name', desig= '$des', salary='$salary' where emp_id = $id";
        echo $qu;
        $update = mysqli_query($con,$qu);
        if($update)
        {
            header('location:index.php');
        }
    }
?>