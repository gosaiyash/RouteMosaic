<?php

include('db_config.php'); 


$productId = $_GET['id'];
echo $productId;


$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE train SET deleted = 1 WHERE id = ?";


$stmt = mysqli_prepare($conn, $sql); 

if ($stmt) {
  
  mysqli_stmt_bind_param($stmt, "i", $productId);

  
  if (mysqli_stmt_execute($stmt))
   {
    echo "Product deleted successfully!";
  } else {
    echo "Error soft-deleting product: " . mysqli_error($conn);
  }

  mysqli_stmt_close($stmt); 
} else {
  echo "Error preparing SQL statement: " . mysqli_error($conn);
}

mysqli_close($conn); 

?>
