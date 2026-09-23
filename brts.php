<?php

    include('db_config.php');

    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    
    
    //check

    if(!$conn)
    {
        die("Connection Failed to Database Server :" . mysqli_connect_error());
    }

    echo "Connected Successfully to Database Server :";

    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $start_time = mysqli_real_escape_string($conn,$_POST['start_time']);
    $end_time = mysqli_real_escape_string($conn,$_POST['end_time']);
    $from0 = mysqli_real_escape_string($conn,$_POST['from']);
    $to0 = mysqli_real_escape_string($conn,$_POST['to']);
    $rootNo = mysqli_real_escape_string($conn,$_POST['routeNo']);
    $del=0;
 

    if( empty($name) || empty($date) || empty($start_time) || empty($end_time) || empty($from0) || empty($to0) || empty($rootNo))
    {
        echo "Pls Full Fill All Details";
    }

   $sql = "INSERT INTO brts(name,date,start_time,end_time,1from,1to,rootNo,deleted) VALUES(?,?,?,?,?,?,?,?)";

    $stmt = mysqli_prepare($conn,$sql);

    if($stmt)
    {
        mysqli_stmt_bind_param($stmt,'ssssssss', $name,date('y-m-d'),$start_time,$end_time,$from0,$to0,$rootNo,$del);
    }
    
    if(mysqli_stmt_execute($stmt))
    {
        echo "Successfully regisration::::::....";
        header("location:seegsrtc.php");
    }
    else
    {
        echo "regisration Failed :::.::";
        exit;
    }

    mysqli_close($conn);
    

?>