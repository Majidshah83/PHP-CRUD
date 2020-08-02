
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
<div class="container">
<div class="col-lg-12">
    <br><br>
<h1 class="text-center text-warning">Display Table Data</h1>
<br>
<table class="table table-striped table-hovr table-boder">
    <tr class="bg-dark text-white text-center">
        <td>id</td>
        <td>username</td>
        <td>Password</td>
        <td>Delete</td>
        <td>update</td>
      
    </tr>
<?php
include 'connection.php';
$sq="select *from crudtable";
$query=mysqli_query($con,$sq);
while($res=mysqli_fetch_array($query)){
?>

    <tr class="text-center">
        <td><?php echo $res['id']; ?></td>
        <td><?php echo $res['username'];?></td>
        <td><?php echo $res['password'];?></td>
        <td><button class="btn btn-danger"><a href="delete.php?rn=<?php echo $res['id'];?>"class="text-white">Delete</a></button></td>
        <td><button class="btn btn-primary"><a href="update.php?rn=<?php echo $res['id'];?>"class="text-white">update</a></button></td>
        
        
    </tr>
    <?php
    }               //close tage
    ?>

</table>
</div>
</div>
</body>
</html>