<?php include '../incloud/conn.php';  ?>
<?php include '../incloud/file.php';  ?>
<?php
$ID = $_GET['id'];
$sql="DELETE FROM sucsuss WHERE id=$ID";
$resDElet=mysqli_query($con , $sql);
header('location:../dashbord/sucsuus.php');
?>