<?php

SESSION_START();

    include('db_config.php');

    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    
    
    //check

    if(!$conn)
    {
        die("Connection Failed to Database Server :" . mysqli_connect_error());
    }

    echo "Connected Successfully to Database Server :";

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
    
    if(mysqli_query($conn,$sql))
    {  
        //echo "Table Created Successfully";
    }
    else
    {
        echo "Table Not Creation Failde :" . mysqli_error($conn);
    }


    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $description = mysqli_real_escape_string($conn,$_POST['description']);
    $category = mysqli_real_escape_string($conn,$_POST['category']);
    $deleted = 0;
    $create_date = date('Y-m-d');
    $time = date('H:i:s');
    $created_by = $_SESSION['admin_name'];


 $image_path = "";

  if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {

    $target_dir = "uploads/"; 
    $image_file_type = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));


    $allowed_extensions = ["jpg", "jpeg", "png", "gif"];

    if (in_array($image_file_type, $allowed_extensions)) {
      
      if ($_FILES['image']['size'] <100000000) { 

        $target_file = $target_dir . time() . "." . $image_file_type; 


        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {

          $image_path = $target_file;

        } else {

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

    

   $sql = "INSERT INTO products01(name, description,category,deleted,create_date,time,image_path,created_by) VALUES (?, ?, ?, ?, ? ,? ,? ,?)";

    $stmt = mysqli_prepare($conn,$sql);

    if($stmt)
    {
        mysqli_stmt_bind_param($stmt,'ssssssss', $name, $description, $category,$deleted ,$create_date,$time , $image_path ,$created_by);
    
    }
    
    if(mysqli_stmt_execute($stmt))
    {
        echo "Successfully regisration::::::....";
        header("location:p.html");
    }
    else
    {
        echo "regisration Failed :::.::";
        exit;
    }

    mysqli_close($conn);
    

?>