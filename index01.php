<?php

    include('db_config.php');

    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    
    
    //check

    if(!$conn)
    {
        die("Connection Failed to Database Server :" . mysqli_connect_error());
    }

    echo "Connected Successfully to Database Server :";

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
        echo "Table Created Successfully";
    }
    else
    {
        echo "Table Not Creation Failde :" . mysqli_error($conn);
    }

    //link regisration form......
    echo "<a href='reg1.html'>regisration</a>";

    mysqli_close($conn);



?>