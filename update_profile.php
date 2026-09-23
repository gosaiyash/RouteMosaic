<?php

    include('db_config.php');

    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    
    
    //check

    if(!$conn)
    {
        die("Connection Failed to Database Server :" . mysqli_connect_error());
    }

    echo "Connected Successfully to Database Server :";


    $fname = mysqli_real_escape_string($conn,$_POST['fname']);
    $mname = mysqli_real_escape_string($conn,$_POST['mname']);
    $lname = mysqli_real_escape_string($conn,$_POST['lname']);
    $city = mysqli_real_escape_string($conn,$_POST['city']);
    $pincode = mysqli_real_escape_string($conn,$_POST['pincode']);
    $gender = mysqli_real_escape_string($conn,$_POST['gender']);
    $addres = mysqli_real_escape_string($conn,$_POST['addres']);
 
       //insert data
   $sql = "UPDATE user02 SET fname=?,mname=?,lname=?,city=?,pincode=?,addres=?,gender=?,created_by=NOW()";

    $stmt = mysqli_prepare($conn,$sql);

    if($stmt)
    {
        mysqli_stmt_bind_param($stmt,'sssssss', $fname,$mname,$lname,$city,$pincode,$addres,$gender);
    }
    
    if(mysqli_stmt_execute($stmt))
    {
        echo "Successfully regisration::::::....";
        header("location:edit_profile.php");
        usleep(500000);
        header("location:book.php");

    }
    else
    {
        echo "regisration Failed :::.::";
        exit;
    }

    mysqli_close($conn);
    

?>