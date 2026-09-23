<?php

    include('db_config.php');

    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    
    
    //check

    if(!$conn)
    {
        die("Connection Failed to Database Server :" . mysqli_connect_error());
    }

    echo "Connected Successfully to Database Server :";


    $uname = mysqli_real_escape_string($conn,$_POST['uname']);
    $mo = mysqli_real_escape_string($conn,$_POST['mo']);
    $pass = mysqli_real_escape_string($conn,$_POST['pass']);
    $cpass = mysqli_real_escape_string($conn,$_POST['cpass']);
    $addres = mysqli_real_escape_string($conn,$_POST['addres']);
    $gender = mysqli_real_escape_string($conn,$_POST['gender']);
 



   if($pass != $cpass)
    {
        echo "Password Or C_Pass Must be same :>>>>>";
        exit;  
    }

    if( empty($uname)|| empty($pass) || empty($addres) || empty($mo) || empty($gender))
    {
        echo "Pls Full Fill All Details";
    }

    //check u_name exist.....

    $sql_check = "SELECT * FROM admin1 WHERE mo = '$mo' LIMIT 1 ";

    $result_check = mysqli_query($conn,$sql_check);

    if(mysqli_num_rows($result_check) > 0)
    {
        echo "Username Or email alredy exists:";
        
    }

    $hash_pass = password_hash($pass,PASSWORD_BCRYPT);

    //insert data
   $sql = "INSERT INTO admin1(uname,pass,addres,mo,gender,created_by) VALUES(?,?,?,?,?,NOW())";

    $stmt = mysqli_prepare($conn,$sql);

    if($stmt)
    {
        mysqli_stmt_bind_param($stmt,'sssss', $uname,$hash_pass,$addres,$mo,$gender);
    }
    
    if(mysqli_stmt_execute($stmt))
    {
        echo "Successfully regisration::::::....";
        header("location:adminlogin.php");
    }
    else
    {
        echo "regisration Failed :::.::";
        exit;
    }

    mysqli_close($conn);
    

?>