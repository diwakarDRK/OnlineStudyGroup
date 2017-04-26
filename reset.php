<!DOCTYPE html>
<html>
<body>

<?php
session_start();
$tmp_user=$_SESSION['active'];
session_destroy(); 
session_start();
$_SESSION['active']=$tmp_user;
header("location:profile.php");
?>

</body>
</html>