
<head>
<title>Registration backend</title>
    
</head>
<table align="center" border="0" width="70%">
    <tr><td colspan="2" height="125" align="center" style="background: lavender"><h1> <font align="center" color= "red">Login App</font></td></tr>
    <tr>       
        <td height="350" colspan="2" align="center" style="background:gold">
<?php

$n=$_POST['txtUser'];

$p=$_POST['txtPwd'];


include("database.php");

$query="insert into user(name,pass) values('$n','$p')";

$rs=mysqli_query($conn,$query);
if($rs)
	{    

		echo "<h1 align=center>User created successfully!!!</h1>";
        echo "<a href=index.html><input type=button value=Login-Here></a>";
        }
else
	{
		echo "<h1 align=center>Ufffffffffffff!!!</h1>";
	}
?>

</td>
</tr>
<tr><td colspan="2" align="center" style="background:lime;color:indigo">2020. All Rights Reserved</td></tr>
</table>





