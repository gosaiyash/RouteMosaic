<?php

    include('db_config.php');

    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    

    if(!$conn)
    {
        die("Connection Failed to Database Server :" . mysqli_connect_error());
    }

    echo "Connected Successfully to Database Server :";



    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $date =date("y-m-d");
    $start_time = mysqli_real_escape_string($conn,$_POST['start_time']);
    $end_time = mysqli_real_escape_string($conn,$_POST['end_time']);
    $from0 = mysqli_real_escape_string($conn,$_POST['from']);
    $to0 = mysqli_real_escape_string($conn,$_POST['to']);
    $rootNo = mysqli_real_escape_string($conn,$_POST['routeNo']);
    $deleted=0;

 

    if( empty($name) || empty($date) || empty($start_time) || empty($end_time) || empty($from0) || empty($to0) || empty($rootNo))
    {
        echo "Pls Full Fill All Details";
    }

   $sql = "INSERT INTO plan(name,date,start_time,end_time,from0,to0,rootNo,deleted) VALUES(?,?,?,?,?,?,?,?)";

    $stmt = mysqli_prepare($conn,$sql);

    if($stmt)
    {
        mysqli_stmt_bind_param($stmt,'ssssssss', $name,$date,$start_time,$end_time,$from0,$to0,$rootNo,$deleted);
    }
    
    if(mysqli_stmt_execute($stmt))
    {
        echo "Successfully regisration::::::....";
        header("location:seeplan.php");
    }
    else
    {
        echo "regisration Failed :::.::";
        exit;
    }

    mysqli_close($conn);
    

?>