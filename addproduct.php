<?php

SESSION_START();

include('db_config.php');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = " CREATE TABLE IF NOT EXISTS products(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    description VARCHAR(2550) ,
    category VARCHAR(120) UNIQUE,
    deleted NUMBER(2),
    create_date DATE,
    time TIME,
    image_path varchar(250),
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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $description = mysqli_real_escape_string($conn, $_POST['description']);
  $category = mysqli_real_escape_string($conn, $_POST['category']);
  $deleted = 0;
  $create_date = date('Y-m-d');
  $time = date('H:i:s');
  $created_by = $_SESSION['admin_name'];

  $image_path = "";
  if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
    $target_dir = "images/"; 
    $image_file_type = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));


    $allowed_extensions = ["jpg", "jpeg", "png", "gif"];

    if (in_array($image_file_type, $allowed_extensions)) {
      
      if ($_FILES['image']['size'] <1000000) { 
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

 
  $sql = "INSERT INTO products (name, description,category,deleted,create_date,time,image_path,created_by) VALUES (?, ?, ?, ?, ? ,? ,? ,?)";

  $stmt = mysqli_prepare($conn, $sql); 

  if ($stmt) {
    
    mysqli_stmt_bind_param($stmt, "ssssssss", $name, $description, $category,$deleted ,$create_date,$time , $image_path ,$created_by);

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

</style>
<body>
    <div class="container">

        <aside class="sidebar">

            <h2>Admin Dashboard</h2>
            <ul>
                <li><a href="admin.php"><i class="fas fa-tachometer-alt"></i> Admin Page</a></li>
                <li><a href="adddetails.html"><i class="fas fa-ticket-alt"></i> ADD Details </a></li>
                
            </ul>
        </aside>

        <main class="main-content">

            <header>
                <h1>Add AMTS Details , Admin</h1>
            </header>


    <form method="post">

        <label for="from">Name:</label>
        <input type="text" id="name" placeholder="Enter Name">

        <label for="to">Description:</label>
        <input type="text" id="description" placeholder="Enter Description">

        <label for="date">Category:</label>
        <input type="date" id="date"  placeholder="Enter Category">

        <label for="from">Imag:</label>
        <input type="file" id="image">

        <button>Submit</button>


        <footer>
                <p>© 2024 Online Ticket Reservation System</p>
            </footer>
        </main>
    </div>
</body>



    <div class="container">

        <aside class="sidebar">

            <h2>Admin Dashboard</h2>
            <ul>
                <li><a href="admin.php"><i class="fas fa-tachometer-alt"></i> Admin Page</a></li>
                <li><a href="adddetails.html"><i class="fas fa-ticket-alt"></i> ADD Details </a></li>
                
            </ul>
        </aside>

        <main class="main-content">

            <header>
                <h1>Add AMTS Details , Admin</h1>
            </header>

<style>

a
{
    text-decoration: none;
    font-family: bold;
    color: black;
    font-size: 1.2em;
}

.form-container {
    background-color: #fff;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    width: 300px;
}

h2 {
    text-align: center;
    margin-bottom: 1rem;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 0.5rem;
    font-weight: bold;
}

input {
    margin-bottom: 1rem;
    padding: 0.5rem;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    padding: 0.5rem;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #45a049;
}

</style>

</html>
