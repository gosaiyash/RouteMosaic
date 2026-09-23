<?php

include('db_config.php'); 

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = " CREATE TABLE IF NOT EXISTS products01(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    description VARCHAR(2550) ,
    category VARCHAR(120),
    deleted int,
    create_date varchar(70),
    time varchar(70),
    image_path varchar(275),
    created_by varchar(70)
)";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $description = mysqli_real_escape_string($conn,$_POST['description']);
    $category = mysqli_real_escape_string($conn,$_POST['category']);
    $deleted = 0;
    $create_date = date('Y-m-d');
    $time = date('H:i:s');
    $created_by = $_SESSION['admin_name'];


  $image_path = "";

  if (isset($_FILES['image']) && $_FILES['image']['error'] === 0)
   {
    $target_dir = "uploads/";
    $image_file_type = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));

  
    $allowed_extensions = ["jpg", "jpeg", "png", "gif"];

    if (in_array($image_file_type, $allowed_extensions)) {
      
      if ($_FILES['image']['size'] < 1000000) { 
        $target_file = $target_dir . time() . "." . $image_file_type; 

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file))
         {
          $image_path = $target_file;

          echo "Error uploading image: Could not move uploaded file.";
        }
      } else {
        echo "Error uploading image: File size exceeds limit.";
      }
    } else {
      echo "Error uploading image: Invalid file type.";
    }
  } else {
    echo "Error uploading image: " . $_FILES['image']['error']; 
  }

 
  $sql = "INSERT INTO products (name, description,category, image_path,deleted,create_date,time,created_by) VALUES (?, ?, ?, ?, ?,?,?)";

  $stmt = mysqli_prepare($conn, $sql); 

  if ($stmt) {

   
    mysqli_stmt_bind_param($stmt, "sssss", $name, $description, $category,$image_path, $deleted,$create_date, $time, $created_by);

    if (mysqli_stmt_execute($stmt)) {
      echo "Product added successfully!";
    } else {
      echo "Error adding product: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt); 
  } else {
    echo "Error preparing SQL statement: " . mysqli_error($conn);
  }
}


mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
<head>
  <title>Add Product</title>
</head>
<body>
  <h1>Add Product</h1>

  <form method="post" enctype="multipart/form-data">
    
 
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    
     <label for="description">Description:</label>
    <input type="text" id="description" name="description" required>
    
    <label for="category">Category:</label>
    <input type="text" id="category" name="category" required>
    
    <label for="image">Imag:</label>
    <input type="file" id="image" name="image" required>
    
               
    <button type="submit">Add Product</button>

  </form>

</body>
</html>
