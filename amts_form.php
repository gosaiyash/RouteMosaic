<?php

    include('db_config.php');

    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    
    
    //check

    if(!$conn)
    {
        die("Connection Failed to Database Server :" . mysqli_connect_error());
    }

    echo "Connected Successfully to Database Server :";

/*    name varchar(150),
    date date,
    start_time time,
    end_time time,
    from0 varchar(250),
    to0 varchar(250),
    rootNo varchar(15)*/

    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $date =date("y-m-d");
    $start_time = mysqli_real_escape_string($conn,$_POST['start_time']);
    $end_time = mysqli_real_escape_string($conn,$_POST['end_time']);
    $from0 = mysqli_real_escape_string($conn,$_POST['from']);
    $to0 = mysqli_real_escape_string($conn,$_POST['to']);
    $rootNo = mysqli_real_escape_string($conn,$_POST['routeNo']);

 

    if( empty($name) || empty($date) || empty($start_time) || empty($end_time) || empty($from0) || empty($to0) || empty($rootNo))
    {
        echo "Pls Full Fill All Details";
    }

    //check u_name exist.....

  /*  $sql_check = "SELECT * FROM user02 WHERE mo = '$mo' OR email = '$email' LIMIT 1 ";

    $result_check = mysqli_query($conn,$sql_check);

    if(mysqli_num_rows($result_check) > 0)
    {
        echo "Username Or email alredy exists:";
        
    }

    $hash_pass = password_hash($pass,PASSWORD_BCRYPT);*/

    //insert data
   $sql = "INSERT INTO amts(name,date,start_time,end_time,from0,to0,rootNo) VALUES(?,?,?,?,?,?,?)";

    $stmt = mysqli_prepare($conn,$sql);

    if($stmt)
    {
        mysqli_stmt_bind_param($stmt,'sssssss', $name,$date,$start_time,$end_time,$from0,$to0,$rootNo);
    }
    
    if(mysqli_stmt_execute($stmt))
    {
        echo "Successfully regisration::::::....";
        header("location:amts.html");
    }
    else
    {
        echo "regisration Failed :::.::";
        exit;
    }

    mysqli_close($conn);
    

?>