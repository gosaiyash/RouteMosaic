<?php
    session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap_min.css" rel="stylesheet">
    <link href="docs.css" rel="stylesheet">
    <title>Home Page</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="index.css">

<style>

  body
  {
      padding: 0px;
      margin: 0px;
      background-color: black;
  }

.d-block w-100
{
    width:auto;
    height:4vh; 
    padding: 0px;
    margin: 0px;
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
.close-btn
{
    padding-left: 510px;
}
.popup
{
  width:35vw;
  background-color: gray;
  border-radius:10px;
  text-align:center;
  padding:10px;
}




</style>

  </head>

  <body class="p-3 m-0 border-0 bd-example m-0 border-0">

    <!-- Example Code -->
    
        
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        
      <div class="container-fluid">
        
         
      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="images/user2.png" class="user_img">
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="more_details.php">More Details</a></li>
                    <li><a class="dropdown-item" href="edit_profile.php">Edit Profile</a></li>
                    <li><a class="dropdown-item" href="#">Feedback</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="index.php">Loge Out</a></li>
                </ul>
                <p class="username"><?php
                                            echo " ". $_SESSION['user_name'];
                                    ?></p>


    
            
       
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="#">services</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active">Help</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
           
      </div>
    </nav>

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


      <div class="content">

          <center>
        
              <div id="popup" class="popup">
                <div class="popup-content">
                    <span class="close-btn" onclick="closePopup()">×</span>
                    <h2 class="popuptext">Welcome to Our Website!, <?php                                      
                                                  echo "". $_SESSION['user_name'];
                                                ?></h2>
                    <p>Thank you for visiting.</p>
                </div>
              </div>


            <script>
                window.onload = function() {
                  document.getElementById('popup').style.display = 'block';
                  document.getElementById('content1').style.display = 'none';
               }

               function closePopup() {
                  document.getElementById('popup').style.display = 'none';
                  document.getElementById('content').style.display = 'none';
                  document.getElementById('content1').style.display = 'block';
               }
           </script>

              

          </center>


      </div>

      
      
      <section class="featured-events">
        <div class="event-card" class="items">
            <img src="images/metro.jpg" alt="Event 1" class="cardimg">
            <h2>Metro Train</h2>
            <p>Cheer for your favorite Metro Train.</p>
            <button>Book Now</button>
        </div>

        <div class="event-card">
            <img src="images/rail.jpg" alt="Event 1" class="cardimg">
            <h2>Train</h2>
            <p>Cheer for your favorite Train.</p>
            <button>Book Now</button>
        </div>

        <div class="event-card">
            <img src="images/img7.png" alt="Event 2" class="cardimg">
            <h2>Air Plan</h2>
            <p>Cheer for your favorite Air Plan.</p>
            <button>Book Now</button>
        </div>
    </section>

    <section class="featured-events">
        <div class="event-card">
            <img src="images/gsrtc.jpg" alt="Event 1" class="cardimg">
            <h2> GSRTC Bus</h2>
            <p>Cheer for your favorite GSRTC Bus.</p>
            <button>Book Now</button>
        </div>

        <div class="event-card">
            <img src="images/brts.jpg" alt="Event 1" class="cardimg">
            <h2>BRTS Bus</h2>
            <p>Cheer for your favorite BRTS Bus.</p>
            <button>Book Now</button>
        </div>

        <div class="event-card">
            <img src="images/amts.jpg" alt="Event 2" class="cardimg">
            <h2>AMTS Bus</h2>
            <p>Cheer for your favorite AMTS Bus.</p>
           <button>Book Now</button>
        </div>
    </section>


    

    

    <footer>

        <p>© 2024 Ticket Booking Platform</p>
    
    </footer>

</body>

</html>