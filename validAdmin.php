 <head>
<title>user validation backend</title>
    
</head>
<table align="center" border="0" width="70%">
    <tr><td colspan="2" height="125" align="center" style="background: lavender"><h1> <font align="center" color= "red">Login App</font></td></tr>
    <tr>       
        <td height="350" colspan="2" align="center" style="background:gold">
<?php
$n=$_POST['txtUser'];
$w=$_POST['txtPwd'];

include("database.php");
	$rs=mysqli_query($conn,"select * from admin where user='$n' and pass='$w' ");
	if(mysqli_num_rows($rs)<1)
	{
		echo "<h1 align=center>Failed login!!!</h1>";
		exit;
	}
	else
	{
        header("Location: adminhome.html");
		exit;
	}

?>
</td>
</tr>
<tr><td colspan="2" align="center" style="background:lime;color:indigo">2020. All Rights Reserved</td></tr>
</table>


