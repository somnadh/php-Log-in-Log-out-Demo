<head>
<title>user validation backend</title>
    
</head>
<table align="center" border="0" width="70%">
    <tr><td colspan="2" height="125" align="center" style="background: lavender"><h1> <font align="center" color= "red">Login App</font></td></tr>
    <tr>       
        <td height="350" colspan="2" align="center" style="background:gold">
<?php
include("database.php");
$result = mysqli_query($conn,"SELECT * FROM user");
echo "<table border='1'>

<tr>

<th>Id</th>

<th>UserName</th>

<th>Status</th>

</tr>";

 

while($row = mysqli_fetch_array($result))

  {

  echo "<tr>";
$id=$row['userid'] ;
  echo "<td>" . $row['userid'] . "</td>";

  echo "<td>" . $row['user'] . "</td>";

  echo "<td>" . $row['status'] . "</td>";


echo "<td> <a href=blockuser.php?id=$id> Block User </a></td>";
  echo "</tr>";

  }

echo "</table>";

 



?>
</td>
</tr>
<tr><td colspan="2" align="center" style="background:lime;color:indigo">2020. All Rights Reserved</td></tr>
</table>


