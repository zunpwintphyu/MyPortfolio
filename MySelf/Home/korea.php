<?php 
include "../conf/config.php";
//$result=mysqli_query($conn,"UPDATE `crud` SET `id`=[value-1],`name`=[value-2],`rollno`=[value-3],`address`=[value-4],`email`=[value-5],`phoneno`=[value-6] WHERE 1");
$result = mysqli_query($conn,"SELECT * FROM koreasong ORDER BY id ASC");
//$res=mysqli_fetch_array($result);
//var_dump($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>⭐️Favourite Korea Song⭐️</h2>
  <form action="addkorea.php">
  <div style="margin-left:930px;">
  <input type="submit" value=" + Add New Song ">
  </div>
  </form><br>
  <table class="table">
    <thead>
    <tr>
        <th class="warning">Song Name</th>
        <th class="danger">Singer</th>
        <th class="info">Action</th>
      </tr>
      <tr class="warning">
      <?php
           while($res = mysqli_fetch_array($result)){
               echo "<tr>";
               echo "<td>".$res['songname']."</td>";
               echo "<td>".$res['singer']."</td>";
               echo "<td><a href=\"query/koreaedit.php?id=$res[id]\">Edit</a>|<a href=\"query/koreadelete.php?id=$res[id]\" onclick=\"return confirm('Are you sure want to delete?')\">DELETE</a></td>";
               echo "</tr>";
           }
           ?>
      </tr>
  </table>
  <button><a href="song.php" > << Previous </a></button>
</div>

</body>
</html>

