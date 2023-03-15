<Html>
<head>
    <title>
        Customer Information
    </title>
</head>
<body>
    <form action="info.php" method="POST">
        <table border="1" width='400px' height="300px" rules='all' align="center">
            <tr><td colspan="2">
                <h1><center>Customer Information</h1>
                </td>
            <tr><td> Customer no </td>
                <td><input type="text" name="cn"></td></tr>
            <tr><td> Customer name: </td>
                <td><input type="text" name="cname"></td></tr>
            <tr><td> Item Purchased : </td>
                <td><select name="it[]" size="1" multiple="multiple" tabindex="1">
                        <option value='Book'>Book</option>
                        <option value='Pen'>Pen</option>
                        <option value='Paper'>Paper</option>
                        <option value='Ink'>Ink</option>
                        <option value='Gum'>Gum</option>
                    </select></td></tr>
            <tr><td>Phone No :</td>
                <td><input type="text" name="phone" size="10" /></td></tr>
            <tr><td>Email:</td>
                <td><input type="email" name="email" /></td>
            <tr><td colspan="2"><center><input type="submit" name="submit" value="Print Bill" /></td>
            </tr>
        </table>
    </form>
</body>
</html>