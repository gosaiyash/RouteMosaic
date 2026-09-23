<?php

session_start();


include('db_config.php'); 


$userid = $_SESSION['user_id'];



$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE user02 SET deleted = 1 WHERE id = ?";


$stmt = mysqli_prepare($conn, $sql); 

if ($stmt) {
  
  mysqli_stmt_bind_param($stmt, "i", $userid);

  
  if (mysqli_stmt_execute($stmt))
   {
    echo "User deleted successfully!";
    header('index.php');
  } else {
    echo "Error soft-deleting product: " . mysqli_error($conn);
  }

  mysqli_stmt_close($stmt); 
} else {
  echo "Error preparing SQL statement: " . mysqli_error($conn);
}

header("location:index.php");

mysqli_close($conn); 

?>