<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title> College Event Management</title>
</head>
<body bgcolor="lightblue">
<img src="images\logo1.bmp">
<BR>
<a href="adminmain.php"> <h3> Admin Main </h3></A>
<BR>
<center><img src="images\applist.bmp"></center>
<BR>

<font face="verdana">     
<Table border="1" align="center" width="80%" cellpadding="10">
<tr bgcolor="#ffffaa"><td> RegNo </td>  <td>Student Name</td> <td> MobileNo </td><td> eMail </td><td> CourseName</td>  </tr>        

<?php
include("config.php");
$sql = "SELECT * FROM StudentTab  order by coursename,regno";
$result = $conn->query($sql);

while($row = $result->fetch_row()) {
//print $db_field['authorname'] . ">";    
print "<tr><td>" . $row[0] . "</td><td>" . $row[2] . "</td><td >" . $row[4] . "</td><td >" . $row[5] . "</td><td >" . $row[6] . "</td></tr>" ;
}

?>


</table>

</font>
<BR>
<a href="adminmain.php"> <h3> Admin Main </h3></A>