<?php include '../incloud/conn.php';  ?>
<?php include '../incloud/file.php';  ?>
<?php
$ID = $_GET['id'];
$sql="DELETE FROM endnews WHERE id=$ID";
$resDElet=mysqli_query($con , $sql);
header('location:../dashbord/endnews.php');
?>