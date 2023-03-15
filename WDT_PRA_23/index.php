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
    <form action="class.php" method="POST">
    <table rules='all' border='1' class="zui-table">
        <tr>
            <td colspan='2' style="font-size: 20px;font-weight: bold"> Calculate Payment</td>
        </tr>
        <tr>
            <td>Enter Loan Amount : </td>
            <td><input type='text' name = "amount" required></td>
        </tr>
        <tr>
            <td>Rate Per Annum(%) : </td>
            <td><select name="rate" >
                <option value="8">8%</option>
                <option value="8.25">8.25%</option>
                <option value="8.50">8.50%</option>
                <option value="9.50">9.50%</option>
                <option value="10.00">10.00%</option>
                <option value="10.50">10.50%</option>
            </select></td>
        </tr>
        <tr>
            <td>Years : </td>
            <td><input type='text' name='year' required></td>
        </tr>
        <tr>
            <td colspan='2'><input type='submit' name='calculate'></td>
        </tr>
    </table>
    </form>
</body>
</html>
