
<?PHP include("headfile.php") ?>
<?PHP include("config.php") ?>

<A href="adminmain.php"> Admin Main </A> <BR> 


<table border="0"> 
<tr><td height ="100" width="25%"></td><td>

    
    <table border="1" cellpadding="5" cellspacing="5"> 
    <tr> <td height="20" colspan="2"> <img style="-webkit-user-select: none" src="images/edlist.bmp"> </td> </tr>   


<?php
include("config.php");
$sql = "SELECT * FROM qualificationTab order by edname";
$result = $conn->query($sql);

while($row = $result->fetch_row()) {
//print $db_field['authorname'] . ">";    
print "<tr><td >" . $row[0] . "</td><td>" . $row[1] . "</td></tr>" ;
}

?>


    </table>

</td><td width="25%"></td></tr>
</table>

<?PHP include("footerfile.php") ?>
