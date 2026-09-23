<?php
    SESSION_START();
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



</style>

<script>

    function admintk ()
    {
        alert("Thank you ADMIN : ");
    }


</script>
<body>
    <div class="container">

        <aside class="sidebar">

            <h2>Admin Dashboard</h2>
            <ul>
                <li><a href="adddetails.html"><i class="fas fa-tachometer-alt"></i> Add Details</a></li>
                <li><a href="seedetails.html"><i class="fas fa-ticket-alt"></i> See Details</a></li>
                <li><a href="#reservations"><i class="fas fa-ticket-alt"></i> Reservations</a></li>
                <li><a href="#users"><i class="fas fa-users"></i> Users</a></li>
                <li onclick="admintk ()"><a href="index.php"><i class="fas fa-cogs" ></i> Log Out</a></li>
            </ul>
        </aside>

        <main class="main-content">

            <header>
                <h1>Welcome, Admin<?php echo " " .$_SESSION['admin_name']; ?></h1>
            </header>

            <section id="dashboard" class="card">
            <a href="adddetails.html"> <h2>Add Details</h2>
                <p>Overview of the system.</p></a>
            </section>

            <section id="reservations" class="card">
            <a href="seedetails.html"> <h2> See Details</h2>
                <p>See Details.</p></a>
            </section>

            <section id="reservations" class="card">
            <a href="reservations.php"> <h2>Reservations</h2>
                <p>Manage reservations here.</p></a>
            </section>

            <section id="users" class="card">
            <a href="users.php"><h2>Users</h2>
                <p>Manage users here.</p></a>
            </section>




            <footer>
                <p>© 2024 Online Ticket Reservation System</p>
            </footer>
        </main>
    </div>
</body>

</html>


<?php


include('db_config.php');

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);


//check

if(!$conn)
{
    die("Connection Failed to Database Server :" . mysqli_connect_error());
}

//echo "Connected Successfully to Database Server :";

//table create......
$amts = " CREATE TABLE IF NOT EXISTS amts(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name varchar(150),
    date date,
    start_time time,
    end_time time,
    from0 varchar(250),
    to0 varchar(250),
    deleted int,
    rootNo varchar(15)
    
)";

$plan = " CREATE TABLE IF NOT EXISTS plan(
     id INT PRIMARY KEY AUTO_INCREMENT,
    name varchar(150),
    date date,
    start_time time,
    end_time time,
    from0 varchar(250),
    to0 varchar(250),
    deleted int,
    rootNo varchar(15)
    
)";

$train = " CREATE TABLE IF NOT EXISTS train(
     id INT PRIMARY KEY AUTO_INCREMENT,
    name varchar(150),
    date date,
    start_time time,
    end_time time,
    from0 varchar(250),
    to0 varchar(250),
    deleted int,
    rootNo varchar(15)
    
)";

$metro = " CREATE TABLE IF NOT EXISTS metro(
     id INT PRIMARY KEY AUTO_INCREMENT,
    name varchar(150),
    date date,
    start_time time,
    end_time time,
    1from varchar(250),
    1to varchar(250),
    deleted int,
    rootNo varchar(15)
    
)";

$gsrtc = " CREATE TABLE IF NOT EXISTS gsrtc(
     id INT PRIMARY KEY AUTO_INCREMENT,
    name varchar(150),
    date date,
    start_time time,
    end_time time,
    1from varchar(250),
    1to varchar(250),
    deleted int,
    rootNo varchar(15)
    
)";

$brts = " CREATE TABLE IF NOT EXISTS brts(
     id INT PRIMARY KEY AUTO_INCREMENT,
    name varchar(150),
    date date,
    start_time time,
    end_time time,
    1from varchar(250),
    1to varchar(250),
    deleted int,
    rootNo varchar(15)
    
)";

//amts table
if(mysqli_query($conn,$amts))
{  
    //echo "Table Created Successfully";
}
else
{
    echo "Table Not Creation Failde :" . mysqli_error($conn);
}

//plan table
if(mysqli_query($conn,$plan))
{  
    //echo "Table Created Successfully";
}
else
{
    echo "Table Not Creation Failde :" . mysqli_error($conn);
}

//train table
if(mysqli_query($conn,$train))
{  
    //echo "Table Created Successfully";
}
else
{
    echo "Table Not Creation Failde :" . mysqli_error($conn);
}

//metro table
if(mysqli_query($conn,$metro))
{  
    //echo "Table Created Successfully";
}
else
{
    echo "Table Not Creation Failde :" . mysqli_error($conn);
}

//brts table
if(mysqli_query($conn,$brts))
{  
    //echo "Table Created Successfully";
}
else
{
    echo "Table Not Creation Failde :" . mysqli_error($conn);
}

//gsrtc table
if(mysqli_query($conn,$gsrtc))
{  
    //echo "Table Created Successfully";
}
else
{
    echo "Table Not Creation Failde :" . mysqli_error($conn);
}

//link regisration form......
// echo "<a href='reg1.html'>regisration</a>";

mysqli_close($conn);





?>
