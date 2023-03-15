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
    <table border="1" cellpadding="5" cellspacing="0">
        <th colspan="4">All Employees details</th>
        <tr>
            <td><b>emp_id</b></td>
            <td><b>emp_name</b></td>
            <td><b>desig</b></td>
            <td><b>Salary</b></td>
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
                </tr>
        <?php
            }
        } else {
            echo "0 Result";
        }
        ?>
    </table>
    <br>
    <form method="post" action="index.php">
        <input type="submit" name="export_pdf" value="Export PDF" />
        <input type="submit" name="export_excel" value="Export Excel" />
        <input type="submit" name="export_word" value="Export Word" />
    </form>
</body>

</html>
<?php
$output = '';
$sql = "SELECT * FROM employee";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $output .= '
<table class="table" bordered="1">
 <th colspan="4">All Employees details</th>
 <tr>
 <td><b>emp_id</b></td>
 <td><b>emp_name</b></td>
 <td><b>desig</b></td>
 <td><b>Salary</b></td>
 </tr>
';
    while ($row = mysqli_fetch_array($result)) {
        $output .= '
 <tr>
 <td>' . $row["emp_id"] . '</td>
 <td>' . $row["emp_name"] . '</td>
 <td>' . $row["desig"] . '</td>
 <td>' . $row["salary"] . '</td>
 </tr>';    }
    $output .= '</table>';}
if (isset($_POST["export_pdf"])) {
    $filename = md5(date("j-F-Y H:i:s")) . '.pdf';
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    echo $output;
}
if (isset($_POST["export_excel"])) {
    $filename = md5(date("j-F-Y H:i:s")) . '.xls';
    header('Content-Type: application/xls');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    echo $output;
}
if (isset($_POST["export_word"])) {
    $filename = md5(date("j-F-Y H:i:s")) . '.docx';
    header('Content-Type: application/docx');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    echo $output;}
?>
