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
    $date = mysqli_real_escape_string($conn,$_POST['date']);
    $start_time = mysqli_real_escape_string($conn,$_POST['start_time']);
    $end_time = mysqli_real_escape_string($conn,$_POST['end_time']);
    $from0 = mysqli_real_escape_string($conn,$_POST['from']);
    $to0 = mysqli_real_escape_string($conn,$_POST['to']);
    $rootNo = mysqli_real_escape_string($conn,$_POST['routeNo']);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);

   

    if( empty($name) || empty($date) || empty($start_time) || empty($end_time) || empty($from0) || empty($to0) || empty($rootNo))
    {
        echo "Pls Full Fill All Details";
    }



     $sql = "UPDATE  plan  SET name=?, start_time=?, end_time=?, from0=?, to0=?, rootNo=? ,date=date('y-m-d') WHERE id=?";

    $stmt = mysqli_prepare($conn,$sql);

     mysqli_stmt_bind_param($stmt,'sssssss', $name,$start_time,$end_time,$from0,$to0,$rootNo,$id);


    
    
    if(mysqli_stmt_execute($stmt))
    {
        echo "Update Successfully::::::....";
        header("location:seeplan.php");
    }
    else
    {
        echo "Update Failed :::.::";
        exit;
    }

    mysqli_close($conn);
    

?>