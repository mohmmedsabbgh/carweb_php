<?php include '../incloud/conn.php';  ?>
<?php include '../incloud/file.php';  ?>
<?php
$ID = $_GET['id'];
$sql="DELETE FROM servises WHERE id=$ID";
$resDElet=mysqli_query($con , $sql);
header('location:../dashbord/servises.php');
?>