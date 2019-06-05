<?php
include "../../conf/config.php";

$name = $_POST['name']; 
$singer = $_POST['singer'];

// echo $name;
// echo "<br>";

// echo $singer;
// echo "<br>";
// exit();
//$res=mysqli_query($conn,"UPDATE crud SET 'id`=[1],`name`=[hsu hsu],`rollno`=[9],`address`=[Bago],`email`=[hsu@gmail.com],`phoneno`=[0978542344560] WHERE $id=1");

$res = mysqli_query($conn, "INSERT INTO engsong (songname,singer) VALUES ('$name','$singer')");
//var_dump($res);
header("location:http://localhost/MySelf/Home/eng.php");
?>

