<?php

include 'connection.php';
if(isset($_POST['done']))
{
  $usenam=$_POST['Username'];
  $pass=$_POST['Password'];
  $sq="INSERT into crudtable(username,password)VALUES('$usenam','$pass')";
  $query=mysqli_query($con,$sq);
  if($query)
  {
    echo "data inserted Successfully";
    header("Location: display.php");
  }
  else{
    echo "error in data insertion";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="col-lg-6 m-auto">
<form method="post">
<br><br><div class="card">
<div class="card-header bg-dark">
<h1 class="text-white text-center">Insert opperation</h1>
</div>
<br>
<label>Username:</label>
<input type="text" name="Username" class="form-control">
<label>password:</label>
<input type="text" name="Password"class="form-control">
<button class="btn btn-success" type="submit" name="done">Submit</button><br>
</div>

</form>
</div>
</body>
</html>
