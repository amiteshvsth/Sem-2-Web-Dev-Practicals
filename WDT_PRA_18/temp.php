<?php $conn = mysqli_connect('localhost', 'root', '', 'company') or die('Unable to connect'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>For file export</title>
</head>

<body>
    <?php
    $sql = "SELECT * FROM employee";
    $result = mysqli_query($conn, $sql);
    ?>
    <p><a href="insert.php">Insert more data</a></p>
    <table border="1" cellpadding="5" cellspacing="0">
        <th colspan="6">All Employees details</th>
        <tr>
            <td><b>emp_id</b></td>
            <td><b>emp_name</b></td>
            <td><b>desig</b></td>
            <td><b>Salary</b></td>
            <td><b>Update</b></td>
            <td><b>Delete</b></td>
        </tr>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($employee = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
       
                    <td><?php echo $employee['emp_id']; ?></td>
                    <td><?php echo $employee['emp_name']; ?></td>
                    <td><?php echo $employee['desig']; ?></td>
                    <td><?php echo $employee['salary']; ?></td>

                    <td><a href="update.php?emp_id=<?php echo $employee['emp_id']; ?>
">Update</a></td>
                    <td><a href="delete.php?emp_id=<?php echo $employee['emp_id']; ?>
">Delete</a></td>
                </tr>
        <?php
            }
        } else {
            echo "0 Result";
        }
        ?>
    </table>
    <br>
    <form method="post" action="export.php">
        <input type="submit" name="export" value="Export" />
    </form>
</body>

</html>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'company');
$output = '';
if (isset($_POST["export"])) {
    $sql = "SELECT * FROM employee";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $output .= '
 <table class="table" bordered="1">
 <tr>
 <th>emp_id</th>
 <th>emp_name</th>
 <th>desig</th>
 <th>Salary</th>
 </tr>
 ';
        while ($row = mysqli_fetch_array($result)) {
            $output .= '
Subject Code: (619405) Web Development Technology (WDT)
26
Arjun Kamariya (GMCA26)
 <tr>
 <td>' . $row["emp_id"] . '</td>
 <td>' . $row["emp_name"] . '</td>
 <td>' . $row["desgi"] . '</td>
 <td>' . $row["salary"] . '</td>
 </tr>
 ';
        }
        $output .= '</table>';
        $filename = md5(date("j-F-Y H:i:s")) . '.xls';
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        echo $output;
    }
}
?>