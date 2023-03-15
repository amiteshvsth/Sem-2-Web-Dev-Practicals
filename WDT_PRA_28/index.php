<?php
$filedata = file_get_contents('CD.JSON');
$details = json_decode($filedata,true);?>
<table id='table' rules="all" border="1">
<?php
foreach($details as $key=>$val)
{
    
        if(is_array($val))
        {
            foreach($val as $key2 => $val2)
            {
                echo "<tr>"."<td>"."<b>".$key2."</b>". "</td>" . "<td>" .$val2 . "</td>". "</tr>" ;
            }
        }
    
}
?>
</table>
