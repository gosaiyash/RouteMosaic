<html>

<head>

        <title>Index Home Page</title>
        <link rel="stylesheet" href="index2.css">

</head>

<body>

    <div calss="nav">

        <div class="nav1">

           <img src="images/profile.png" class="profile"><br><?php
           
                include('db_config.php');

                $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

                
                if(!$conn)
                {
                    die("Connection Failed to Database Server :" . mysqli_connect_error());
                }

                $uname = mysqli_real_escape_string($conn,$_POST['username']);

                $q = "SELECT * FROM user01 WHERE username = '$uname'";

                $data = mysqli_query($conn,$q);

                $pdata = mysqli_fetch_assoc($data);

                echo "User-Name :->>>" . $pdata['username'];

           
           ?>

        </div>

        <div class="nav2">

            <a href="Home">1</a>
            <a href="">1</a>
            <a href="">2</a>
            <a href="">3</a>
            <a href="">4</a>

        </div>

    </div>

    <div></div>

    <div></div>

    <div></div>

    <div></div>




</body>

</html>