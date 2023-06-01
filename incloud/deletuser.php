<?php include '../incloud/conn.php';  ?>
<?php include '../incloud/file.php';  ?>
<?php
$ID = $_GET['id'];
$sql="DELETE FROM users WHERE id=$ID";
$resDElet=mysqli_query($con , $sql);
header('location:../dashbord/users.php');
?>