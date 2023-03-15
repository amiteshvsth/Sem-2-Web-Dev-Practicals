<html>
    <head>
        <title></title>
    </head>
    <script>
        function calculate()
	{
            var f = document.getElementById("check");
            if(f.checked == true)
            {
                var a = document.getElementById("hours").value;
                var b = document.getElementById("rate").value;
				var e = document.getElementById("oth").value;
                var c = (e*b)*2;
                var d = (a*b)+c;
                var f = document.getElementById("ot").value = c;
                document.getElementById("total").value = d;
            }
            else{
                var a = document.getElementById("hours").value;
                var b = document.getElementById("rate").value;
                var c = a*b;
                document.getElementById("total").value = c;
                var e = document.getElementById("ot").value = "";
            } }
    </script>
     <style>
    .zui-table
	{
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
    <table rules='all' border='1' class="zui-table">
        <tr>
            <td colspan='2' style="font-size: 20px;font-weight: bold"> Calculate Payment</td>
        </tr>
        <tr>
            <td>Number Of Hours Worked : </td>
            <td><input type='text' id = "hours" name='sname'></td>
        </tr>
        <tr>
            <td>Rate Per Hours : </td>
            <td><select name="rate" id='rate'>
                <option>100</option>
                <option>250</option>
                <option>300</option>
                <option>500</option>
            </select></td>
        </tr>
        <tr>
            <td>Overtime : </td>
            <td><input type='checkbox' id='check'><input type='text' id='oth'></td>
        </tr>
        <tr>
            <td>Overtime Payment : </td>
            <td><input type='text' id='ot'></td>
        </tr
        <tr>
            <td>Total Payment : </td>
            <td><input type='text' id="total" readonly name='city'></td>
        </tr>
        <tr>
            <td colspan='2'><input type='submit' onclick="calculate();" name='calculate'></td>
        </tr>
    </table>
</body>
</html>
