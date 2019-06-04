<?php 
include "../../conf/config.php";

if(isset($_POST['update']))
{   
    $id=$_POST['id'];
    $name = $_POST['name']; 
    $singer = $_POST['singer'];
    

    // echo $name;
    // echo "<br>";

    // echo $singer;
    // echo "<br>";

    
    // exit( );
}
    $result = mysqli_query($conn,"UPDATE myansong SET songname='$name',singer='$singer' WHERE id=$id");
    //var_dump($result);
     header("location:http://localhost/MySelf/Home/myan.php");

?>



