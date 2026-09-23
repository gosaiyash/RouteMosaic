<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap_min.css" rel="stylesheet">
    <link href="docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="index.css">

<style>

body
  {
      padding: 0px;
      margin: 0px;
  }

.d-block w-100
{
    width:auto;
    height:auto; 
}

.user_img
{
    padding: 0px;
    margin: 0px;
    width:2.5vw;
}

.username
{
    margin-top:15px;
    padding-left:5px;
    color:red;
    font-weight: bolder;
    padding-right:15px;
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
.slideimg
{
    width:2vw;
    height:1vh;
}
/* styles.css */
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

.slider {
    width: 100%;
    height: 500px;
    overflow: hidden;
    position: relative;
}

.slides {
    width: 500%;
    height: 100%;
    display: flex;
}

.slides input {
    display: none;
}

.slide {
    width: 20%;
    transition: 2s;
}

.slide img {
    width: 100%;
    height: 100%;
}

.navigation-manual {
    position: absolute;
    width: 100%;
    margin-top: -40px;
    display: flex;
    justify-content: center;
}

.manual-btn {
    border: 2px solid #40D3DC;
    padding: 5px;
    border-radius: 10px;
    cursor: pointer;
    transition: 1s;
}

.manual-btn:not(:last-child) {
    margin-right: 40px;
}

.manual-btn:hover {
    background: #40D3DC;
}

#radio1:checked ~ .first {
    margin-left: 0;
}

#radio2:checked ~ .first {
    margin-left: -20%;
}

#radio3:checked ~ .first {
    margin-left: -40%;
}

#radio4:checked ~ .first {
    margin-left: -60%;
}

.navigation-auto {
    position: absolute;
    display: flex;
    width: 100%;
    justify-content: center;
    margin-top: -40px;
}

.navigation-auto div {
    border: 2px solid #40D3DC;
    padding: 5px;
    border-radius: 10px;
    transition: 1s;
}

.navigation-auto div:not(:last-child) {
    margin-right: 40px;
}

.auto-btn1 {
    animation: autoMove 20s infinite;
}

.auto-btn2 {
    animation: autoMove 20s infinite;
    animation-delay: 5s;
}

.auto-btn3 {
    animation: autoMove 20s infinite;
    animation-delay: 10s;
}

.auto-btn4 {
    animation: autoMove 20s infinite;
    animation-delay: 15s;
}

@keyframes autoMove {
    25% {
        background: #40D3DC;
    }
    50% {
        background: transparent;
    }
}

.content
{
    margin-top:15px;
   background-color: #F7CAC9;
    
}
h1
{
    font-weight: bold;
}
.navbar-brand
{
  padding-left:5px;
  
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
section {
    margin-bottom: 2rem;
    padding: 2rem 0;
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

</style>

  </head>

  <body class="p-3 m-0 border-0 bd-example m-0 border-0">

    <!-- Example Code -->
    
        
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="regisration.html">Register</a>
        <a class="navbar-brand" href="login.html">Login</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">services</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">About</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <section id="home" class="hero">
            <div class="container">
                <h2>Book Your Tickets Easily</h2>
                <p>Reserve tickets for movies, concerts, and events with just a few clicks.</p>
                <button onclick="window.location.href='booking.html'">Book Now</button>
            </div>
        </section>

    <div class="slider">
        <div class="slides">
            <!-- Radio buttons for navigation -->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">

            <!-- Slide images -->
            <div class="slide first">
                <img src="images/img1.jpg" alt="Image 1">
            </div>
            <div class="slide">
                <img src="images/img2.jpg" alt="Image 2">
            </div>
            <div class="slide">
                <img src="images/img3.jpg" alt="Image 3">
            </div>
            <div class="slide">
                <img src="images/img4.jpg" alt="Image 4">
            </div>

            <!-- Automatic navigation -->
            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>
        </div>

        <!-- Manual navigation -->
        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>
    </div>

    <script>
        let counter = 1;
        setInterval(function(){
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if(counter > 4){
                counter = 1;
            }
        }, 3000); // Change image every 5 seconds
    </script>

      
      <section class="featured-events">
        <div class="event-card" class="items">
            <img src="images/metro.jpg" alt="Event 1" class="cardimg">
            <h2>Metro Train</h2>
            <p>Cheer for your favorite team in the grand arena.</p>
            <button>Book Now</button>
        </div>

        <div class="event-card">
            <img src="images/rail.jpg" alt="Event 1" class="cardimg">
            <h2>Train</h2>
            <p>Get ready for an unforgettable musical experience.</p>
            <button>Book Now</button>
        </div>

        <div class="event-card">
            <img src="images/img7.png" alt="Event 2" class="cardimg">
            <h2>Air Plan</h2>
            <p>Cheer for your favorite team in the grand arena.</p>
            <button>Book Now</button>
        </div>
    </section>

    <section class="featured-events">
        <div class="event-card">
            <img src="images/gsrtc.jpg" alt="Event 1" class="cardimg">
            <h2> GSRTC Bus</h2>
            <p>Get ready for an unforgettable musical experience.</p>
            <button>Book Now</button>
        </div>

        <div class="event-card">
            <img src="images/brts.jpg" alt="Event 1" class="cardimg">
            <h2>BRTS Bus</h2>
            <p>Get ready for an unforgettable musical experience.</p>
            <button>Book Now</button>
        </div>

        <div class="event-card">
            <img src="images/amts.jpg" alt="Event 2" class="cardimg">
            <h2>AMTS Bus</h2>
            <p>Cheer for your favorite team in the grand arena.</p>
            <button>Book Now</button>
        </div>
    </section>


    
    <div class="card text-center">
        <div class="card-header">
          Featured
        </div>
        <div class="card-body">
          <img src="images/img.png" class="card-img-top" alt="..." >
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        <div class="card-footer text-body-secondary">
          2 days ago
        </div>
      </div>

    

    <footer>

        <p>© 2024 Ticket Booking Platform</p>
    
    </footer>

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
    $sql = " CREATE TABLE IF NOT EXISTS user03(
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
        addres varchar(150) ,
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