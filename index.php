<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="index.css">

<style>

body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;

}

.featured-events {
    display: flex;
    justify-content: space-around;
    padding: 20px;
 
}

.event-card {
    background-color: #fff;
    border-radius: 5px;
   /* box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);*/
    padding: 20px;
    text-align: center;
    width:50vw;
}

img {
    max-width: 100%;
    height: auto;
    margin-bottom: 10px;
}

button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 3px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #0056b3;
}
.nav1
{
   text-align:justifycenter;
}

.container {
    width: 80%;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 0;
    height:4vh;
}

header {
    background-color: #333;
    color: #fff;
    width: 100%;
    z-index: 1000;
    box-shadow: 0 2px 10px rgba(44, 199, 98, 0.1);
}

header h1 {
    margin: 0;
    font-size: 1.5rem;
}

nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    
}

nav ul li {
    margin: 0 1rem;
    position: relative;
    padding-left:5px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s;
}

nav ul li a:hover {
    color: #ff6600;
}

nav ul li::after {
    content: '';
    display: block;
    width: 0;
    height: 2px;
    background: #ff6600;
    transition: width 0.3s;
    position: absolute;
    bottom: -5px;
    left: 0;
}

nav ul li:hover::after {
    width: 100%;
}
.hero {
    background: url('images/home.jpg') no-repeat center center/cover;
    color: #fff;
    text-align: center;
    padding: 10rem 0;
    position: relative;
    overflow: hidden;
  
}

.hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
}

.hero h2 {
    font-size: 3rem;
    margin: 0;
    z-index: 1;
    position: relative;
    animation: fadeInDown 1s ease-out;
}

.hero p {
    font-size: 1.5rem;
    margin: 1rem 0;
    z-index: 1;
    position: relative;
    animation: fadeInUp 1s ease-out;
}

button {
    background-color: #ff6600;
    color: #fff;
    border: none;
    padding: 0.75rem 1.5rem;
    cursor: pointer;
    font-size: 1rem;
    border-radius: 5px;
    transition: background-color 0.3s, transform 0.3s;
    z-index: 1;
    position: relative;
    animation: fadeInUp 1s ease-out;
}

button:hover {
    background-color: #e65c00;
    transform: scale(1.05);
}

section {
    margin-bottom: 2rem;
    padding: 2rem 0;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 1rem 0;
    width: 100%;
    bottom: 0;
}

@keyframes fadeInDown {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}


.cardimg
{
    border-radius: 20px;
    width:24vw;
}
.event-card
{
  transition: transform .2s;
}

.event-card:hover
{

    transform: scale(1.1);
}



</style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Online Ticket Reservation System</h1>
            <nav>
                <ul>

                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="reg2.html">Register</a></li>
                    <li><a href="login1.html">Login</a></li>

                </ul>
            </nav>
        </div>
    </header>

    <main>

        <section id="home" class="hero">

            <div class="container01">

                <h2>Book Your Tickets Easily</h2>
                <p>Reserve tickets for plan, train, ,metro ,amts ,brts ,and gsrtc with just a few clicks.</p>
                <a href="reg2.html"><button onclick="window.location.href='booking.html'">Book Now</button></a>
            </div>

        </section>


        <section class="featured-events">
            <div class="event-card" class="items">
                <img src="images/metro.jpg" alt="Event 1" class="cardimg">
                <h2>Metro Train</h2>
                <p>Cheer for your favorite team in the grand arena.</p>
                <a href="reg2.html"><button>Book Now</button></a>
            </div>
    
            <div class="event-card">
                <img src="images/rail.jpg" alt="Event 1" class="cardimg">
                <h2>Train</h2>
                <p>Get ready for an unforgettable musical experience.</p>
                <a href="reg2.html"><button>Book Now</button></a>
            </div>
    
            <div class="event-card">
                <img src="images/img7.png" alt="Event 2" class="cardimg">
                <h2>Air Plan</h2>
                <p>Cheer for your favorite team in the grand arena.</p>
                <a href="reg2.html"><button>Book Now</button></a>
            </div>
        </section>
    
        <section class="featured-events">
            <div class="event-card">
                <img src="images/gsrtc.jpg" alt="Event 1" class="cardimg">
                <h2> GSRTC Bus</h2>
                <p>Get ready for an unforgettable musical experience.</p>
                <a href="reg2.html"><button>Book Now</button></a>
            </div>
    
            <div class="event-card">
                <img src="images/brts.jpg" alt="Event 1" class="cardimg">
                <h2>BRTS Bus</h2>
                <p>Get ready for an unforgettable musical experience.</p>
                <a href="reg2.html"><button>Book Now</button></a>
            </div>
    
            <div class="event-card">
 
                <img src="images/amts.jpg" alt="Image 1" class="cardimg">
                <h2>AMTS Bus</h2>
                <p>Cheer for your favorite team in the grand arena.</p>
                <a href="book101.php"><button>Book Now</button></a>
            </div>
        </section>


        
        
    
        <footer>
    
            <p>© 2024 Ticket Booking Platform</p>
        
        </footer>
    


    </main>

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
    $sql = " CREATE TABLE IF NOT EXISTS user02(
        id INT PRIMARY KEY AUTO_INCREMENT,
        fname VARCHAR(255),
        mname VARCHAR(255),
        lname VARCHAR(255) ,
        email VARCHAR(12) UNIQUE,
        mo VARCHAR(12) UNIQUE,
        pass VARCHAR(350),
        city varchar(18) ,
        pincode varchar(8),
        gender varchar(7),
        addres varchar(150),
        deleted int,
        created_by varchar(25)
    )";

    if(mysqli_query($conn,$sql))
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
