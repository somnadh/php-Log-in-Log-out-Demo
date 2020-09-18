<?php
$n=$_REQUEST['id'];


include("database.php");
$sql = "UPDATE user SET status='Block' WHERE userid='$n'";
if(mysqli_query($conn,$sql))
{
    header("Location: viewusers.php");
    exit;
}
else{
    echo "<h1 align=center>Ufffffffffffff!!!</h1>";
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>