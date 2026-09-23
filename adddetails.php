<?php

    include('db_config.php');

    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    
    
    //check

    if(!$conn)
    {
        die("Connection Failed to Database Server :" . mysqli_connect_error());
    }

   // echo "Connected Successfully to Database Server :";


    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $date = mysqli_real_escape_string($conn,$_POST['date']);
    $start_time = mysqli_real_escape_string($conn,$_POST['start_time']);
    $end_time = mysqli_real_escape_string($conn,$_POST['ens_time']);
    $from = mysqli_real_escape_string($conn,$_POST['from']);
    $to = mysqli_real_escape_string($conn,$_POST['to']);
    $routeNo = mysqli_real_escape_string($conn,$_POST['routeNo']);
   

    if( empty($name) || empty($date) || empty($start_time) || empty($end_time) || empty($from) || empty($to) || empty($routeNo) )
    {
        echo "Pls Full Fill All Details";
    }

    //check u_name exist.....

    $sql_check = "SELECT * FROM amts WHERE name = '$name' LIMIT 1 ";

    $result_check = mysqli_query($conn,$sql_check);

    if(mysqli_num_rows($result_check) > 0)
    {
        echo "Username Or email alredy exists:";
        
    }

    $hash_pass = password_hash($pass,PASSWORD_BCRYPT);

    //insert data
   $sql = "INSERT INTO amts(name,date,start_time,end_time,from0,to0,routeNo) VALUES(?,?,?,?,?,?,?)";

    $stmt = mysqli_prepare($conn,$sql);

    if($stmt)
    {
        mysqli_stmt_bind_param($stmt,'sssssss', $name,$date,$start_time,$end_time,$from,$to,$routeNo);
    }
    
    if(mysqli_stmt_execute($stmt))
    {
        echo "Successfully regisration::::::....";
        header("location:adddetails.php");
    }
    else
    {
        echo "regisration Failed :::.::";
        exit;
    }

    mysqli_close($conn);
    

?>