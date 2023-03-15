<?php 
class Loan_cal{
    public $monthpayment = 0;
    public $total =0;
    function calculate($rate,$year,$amount){
        $monthint = $rate/1200;
        $monthpayment = $amount*$monthint/(1-1/(1+$monthint)**($year*12)); 
        $total = ((float)$monthpayment*12*$year);   ?>
        <body>
            <form action="index.php" method="POST">
    <table rules='all' border='1' class="zui-table">
        <tr>
            <td colspan='2' style="font-size: 20px;font-weight: bold"> Calculate Payment</td>
        </tr>
        <tr>
            <td>Loan Amount : </td>
            <td><?php echo $amount;?></td>
        </tr>
        <tr>
            <td>Rate Per Annum(%) : </td>
            <td><?php echo $rate;?></td>
        </tr>
        <tr>
            <td>Years : </td>
            <td><?php echo $year;?></td>
        </tr>
        <tr>
            <td>Monthly Payment : </td>
            <td><?php echo round($monthpayment,2);?></td>
        </tr>
        <tr>
            <td>Total Payment : </td>
            <td><?php echo round($total,2);?></td>
        </tr>
        <tr>
            <td colspan='2'><input type='submit' value='Back'></td>
        </tr>
    </table>

    <?php ;}
}
$rate = (int)$_REQUEST['rate'];
        $year = (int)$_REQUEST['year'];
        $amount = (int)$_REQUEST['amount'];
        $obj = new Loan_cal();
        $obj->calculate($rate,$year,$amount);
?>
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
