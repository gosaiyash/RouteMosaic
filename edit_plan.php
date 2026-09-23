     
 <?php

include('db_config.php');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$conn) 
{
    die('Connection failed: ' . mysqli_connect_error());
}

$id = mysqli_real_escape_string($conn, $_GET["id"]);




if (empty($id)) {
    die('ID is not set or is empty');
}

$sql1 = "SELECT * FROM plan WHERE id='$id'";

$result = mysqli_query($conn, $sql1);

if ($result)
{
    $fetch = mysqli_fetch_assoc($result);

} 
else
{
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
  

?>




<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Page</title>
   <link rel="stylesheet" href="admin.css">
   <link rel="stylesheet" href="admin01.css">
</head>

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
               <h1>Update Air-Plan Details , Admin</h1>
           </header>

         
           <form action="update_plan_form.php"method="post">

               <label for="name">Name:</label>
               <input type="text" id="name" name="name" value="<?php echo $fetch["name"]; ?>"required>
   
               <label for="start_time">Start Time:</label>
               <input type="time" id="start_time" name="start_time" value="<?php echo $fetch["start_time"]; ?>"required>
   
               <label for="end_time">End Time:</label>
               <input type="time" id="end_time" name="end_time" value="<?php echo $fetch["end_time"]; ?>" required>
   
               <label for="from">From:</label>
               <input type="text" id="from" name="from" value="<?php echo $fetch["from0"]; ?>" required>

               <label for="to">To:</label>
               <input type="text" id="to" name="to" value="<?php echo $fetch["to0"]; ?>"required>

               <label for="routeNo">Route No:</label>
               <input type="text" id="routeNo" name="routeNo" value="<?php echo $fetch["rootNo"]; ?>"required>

               <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
   
               <button type="submit">update to List</button>

           </form>

           <br>

           <footer>
               <p>© 2024 Online Ticket Reservation System</p>
           </footer>
       </main>
   </div>
</body>

</html>

</script>