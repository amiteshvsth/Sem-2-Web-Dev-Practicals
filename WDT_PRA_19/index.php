<html>
    <head>
        <title></title>
    </head>
    <style>
    .zui-table {
    border: solid 1px #DDEEEE;
    border-collapse: collapse;
    border-spacing: 0;
    font: normal 13px Arial, sans-serif;
}
.zui-table thead th {
    background-color: #DDEFEF;
    border: solid 1px #DDEEEE;
    color: #336B6B;
    padding: 10px;
    text-align: left;
    text-shadow: 1px 1px 1px #fff;
}
.zui-table tbody td {
    border: solid 1px #DDEEEE;
    color: #333;
    padding: 10px;
    text-shadow: 1px 1px 1px #fff;
}
</style>
<body>
    <form action='index.php' method='POST'>
    <table rules='all' class="zui-table" border='1'>
        <tr>
            <td colspan='2'><h1>Train Information</h1></td>
        </tr>
        <tr>
            <td>Starting City : </td>
            <td><input type='text' name='scity'></td>
        </tr>
        <tr>
            <td>Train Type : </td>
            <td><input type='text' name='ttype'></td>
        </tr>
        <tr>
            <td>Train By Flag: </td>
            <td><input type='text' name='tbflag' ></td>
        </tr>
        <tr>
            <td colspan='2' align="center"><input type='submit' style="background-color: blue;color: white;border-radius:5px;" name='submit'></td>
        </tr>
    </table>
    </form>
</body>
<?php
if(isset($_POST['submit']))
{
    $conn = mysqli_connect("localhost","root","","railway");
    $sc = $_POST['scity'];
    $tt = $_POST['ttype'];
    $f = $_POST['tbflag'];
    $sql = "SELECT *FROM rail_info where T_scity = '$sc' OR T_type = '$tt' OR T_flag = '$f'";
    $q = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($q);
    if($count != 0)
    {
        ?>
        <table rules='all' class="zui-table" border='1'>
                <tr>
                    <td colspan='7' style="font-size: 20px;font-weight: bold">Train Information</td>
                </tr>
                <tr>
				    <td>Sr No</td>
                    <td>Train No</td>
					<td>Train Code</td>
                    <td>Train Name</td>
                    <td>Train Type</td>
                    <td>Train Start Station</td>
                    <td>Train Destination Station</td>
                    <td>Train Flag</td>
                </tr>
                <?php
                while($res = mysqli_fetch_array($q)){ ?>
                    <tr>
                        <td><?php echo $res[0]; ?></td>
                        <td><?php echo $res[1]; ?></td>
                        <td><?php echo $res[2]; ?></td>
						<td><?php echo $res[3]; ?></td>
                        <td><?php echo $res[4]; ?></td>
                        <td><?php echo $res[5]; ?></td>
                        <td><?php echo $res[6]; ?></td>
                        <td><?php echo $res[7]; ?></td>
                    </tr>
        <?php 
    }
    }
    else{
        echo "<h1>No Records</h1>";
    }
    //header("location:train.php");
}
?>