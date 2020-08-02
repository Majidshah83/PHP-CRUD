<?php
include 'connection.php';
$deleid=$_GET['rn'];
$sq="DELETE FROM crudtable WHERE id='$deleid'";
$data=mysqli_query($con,$sq);
if ($data){
    header("Location: display.php");

}
else{
    echo "not delete record";
}

?>

