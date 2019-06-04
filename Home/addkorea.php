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

<div class="container mt-3">
  <h3>Please Add New Korea Song </h3>
  <br><br>
  <form action="query/koreainsert.php" method="POST">
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text"> ⭐️Korea Song⭐️ </span>
      </div>
      <input type="text" class="form-control" placeholder="SongName" name="name" id="name">
      <input type="text" class="form-control" placeholder="Singer" name="singer" id="singer">
      <input type="submit" value="Insert Into Table">
    </div>  
  </form>
</div>

</body>
</html>

