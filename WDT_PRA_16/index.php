<?php   
    $con = mysqli_connect('localhost','root','','company');
    $q = mysqli_query($con,'select *from employee');
?>
     <table rules='all' border='1' width='500px'> 
        <tr>
                <td colspan='4'>Employee Registration</td></tr>
                <tr>
                <td>Emp Id</td>
                <td>Emp Name</td>
                <td>Designation</td>
                <td>Salary </td>  
                <td>Operation</td>         
            </tr>
      <?php
        while($res = mysqli_fetch_array($q))
        {?>
        <tr>
        <td><?php echo $res[0]; ?></td>
        <td><?php echo $res[1]; ?></td>
        <td><?php echo $res[2]; ?></td>
        <td><?php echo $res[3]; ?></td>
        <td><a href="ope.php?eid=<?php echo $res[0];?>">Edit</a>  |  <a href="ope.php?id=<?php echo $res[0];?>">Delete</a></td>
        </tr>
             <?php 
    }
    ?>