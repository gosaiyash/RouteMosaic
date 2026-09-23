<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
   

    <script>
        function togglePassword(id) {
            const input = document.getElementById(id);
            const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
            input.setAttribute('type', type);
        }
        
        </script>

    <style>


body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background: url('images/login1.png') no-repeat center center/cover;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    opacity:0.8;
}

.login-container {
    background-color: #bfc0c0;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    width: 350px;
    text-align: center;
    animation: fadeIn 1s ease-in-out;
}

h2 {
    margin-bottom: 1rem;
    font-size: 1.5rem;
    color: #ee1515;
}

.input-group {
    margin-bottom: 1rem;
    text-align: left;
    position: relative;
}

.input-group label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: bold;
    color: #333;
}

.input-group input {
    width: 100%;
    padding: 0.75rem;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 1rem;
}

.toggle-password {
    position: absolute;
    right: 10px;
    top: 35px;
    cursor: pointer;
}

.toggle-password img {
    width: 20px;
    height: 20px;
}

button {
    background-color: #333;
    color: #fff;
    border: none;
    padding: 0.75rem 1.5rem;
    cursor: pointer;
    font-size: 1rem;
    border-radius: 5px;
    width: 100%;
    margin-top: 1rem;
 
}

button:hover {
    background-color: #555;
}

.links {
    margin-top: 1rem;
}

.links a {
    color: #d33c71;
    text-decoration: none;
    margin: 0 0.5rem;
    font-size: 0.9rem;
}

.links a:hover {
    text-decoration: underline;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
hr{
    border:1px dotted black;
}



    </style>

    <script>

        function adminck ()
        {
            var inputun = prompt("Pls enter USERNAME :");
            var inputpass = prompt("Pls enter PASSWORD :");

            if(inputun == "admin" & inputpass == "admin")
            {
                alert("You are admin:::::::");
                return true;
            }
            else
            {
                alert("You are not admin :-:-:-:_");
                window.location="index.php";
                return false;
            }


        }




    </script>
</head>
<body onload="adminck ()">
    <div class="login-container">
        <h2> Admin Login</h2>
        <hr>
        <br>
        <form action="admin_login_form.php" method="post">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="uname" name="uname" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="pass" name="pass" required>
                <span class="toggle-password" onclick="togglePassword('pass')">👁</span>
            </div>

            <button type="submit">Login</button>
            <div class="links">
                <a href="forgot-password.html">Forgot Password?</a>
                <a href="adminreg.html">Register</a>
            </div>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
<?php

include 'db_config.php';

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if(!$conn)
{
    echo "Connection faile " . mysqli_connect_error();
}

$sql = "CREATE TABLE IF NOT EXISTS admin1(
        Admin_id int AUTO_INCREMENT PRIMARY KEY,
        uname varchar(150),
        pass varchar(350),
        addres varchar(150),
        mo varchar(15),
        gender varchar(15),
        created_by date
)";

if(mysqli_query($conn,$sql))
{
  //  echo "Table created";
}
else
{
    echo "ERROR IN TABLE CREATION". mysqli_error($conn);
}

mysqli_close($conn);


?>
