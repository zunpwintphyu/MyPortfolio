<?php 
include "../../conf/config.php";
$id= $_GET['id'];
$result = mysqli_query($conn,"DELETE FROM koreasong WHERE id=$id");
//var_dump($result);
header("location:http://localhost/MySelf/Home/korea.php");
?>
