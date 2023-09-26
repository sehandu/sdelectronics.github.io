<?php 
sleep(.2);
include 'config.php';
$id =  $_GET['id'];
echo $id;

$sql = "DELETE FROM cart WHERE id='$id'";

if ($con->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

header('location: profile.php');


?>