<html>

<body>

    <div>

        <h1><?php
        
                include('db_config.php');

                $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

                if(!$conn)
                {
                    echo "cconnect fail" . mysqli_connect_error();
                }

                //
                echo "connected";

                $q = "SELECT * FROM user01 WHERE username = 'YASH'";

                $data = mysqli_query($conn,$q);

                $pdata = mysqli_fetch_assoc($data);

                echo "User-Name :->>>" . $pdata['mo'];


        ?></h1>


    </div>

</body>

</html>