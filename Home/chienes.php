<?php 
include "../conf/config.php";
//$result=mysqli_query($conn,"UPDATE `crud` SET `id`=[value-1],`name`=[value-2],`rollno`=[value-3],`address`=[value-4],`email`=[value-5],`phoneno`=[value-6] WHERE 1");
$result = mysqli_query($conn,"SELECT * FROM chisong ORDER BY id ASC");
//$res=mysqli_fetch_array($result);
//var_dump($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container">
  <h2>⭐️Favourite Chienes Song⭐️</h2>
  <form action="chiadd.php">
  <div style="margin-left:930px;">
  <input type="submit" value=" + Add New Song ">
  </div>
  </form>
  <br><br><br>        
  <table class="table table-dark table-hover">
      <tr>
        <th>Song Name</th>
        <th>Singer</th>
        <th>Action</th>
      </tr>
      <tr>
      <?php
           while($res = mysqli_fetch_array($result)){
               echo "<tr>";
               echo "<td>".$res['songname']."</td>";
               echo "<td>".$res['singer']."</td>";
               echo "<td><a href=\"query/chiedit.php?id=$res[id]\">Edit</a>|<a href=\"query/chidelete.php?id=$res[id]\" onclick=\"return confirm('Are you sure want to delete?')\">DELETE</a></td>";
               echo "</tr>";
           }
           ?>
      </tr>
  </table>
  <button><a href="song.php" > << Previous </a></button>
</div>

</body>
</html>
