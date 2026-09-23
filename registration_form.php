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
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $mo = mysqli_real_escape_string($conn,$_POST['mo']);
    $pass = mysqli_real_escape_string($conn,$_POST['pass']);
    $cpass = mysqli_real_escape_string($conn,$_POST['cpass']);
    $city = mysqli_real_escape_string($conn,$_POST['city']);
    $pincode = mysqli_real_escape_string($conn,$_POST['pincode']);
    $gender = mysqli_real_escape_string($conn,$_POST['gender']);
    $addres = mysqli_real_escape_string($conn,$_POST['addres']);
    $del=0;
 



   if($pass != $cpass)
    {
        echo "Password Or C_Pass Must be same :>>>>>";
        exit;  
    }

    if( empty($fname) || empty($mname) || empty($lname) || empty($email) || empty($pass) || empty($city) || empty($pincode) || empty($addres) || empty($mo) || empty($gender))
    {
        echo "Pls Full Fill All Details";
    }

    //check u_name exist.....

    $sql_check = "SELECT * FROM user02 WHERE mo = '$mo' OR email = '$email' LIMIT 1 ";

    $result_check = mysqli_query($conn,$sql_check);

    if(mysqli_num_rows($result_check) > 0)
    {
        echo "Username Or email alredy exists:";
        
    }

    $hash_pass = password_hash($pass,PASSWORD_BCRYPT);

    //insert data
   $sql = "INSERT INTO user02(fname,mname,lname,email,pass,city,pincode,addres,mo,gender,created_by,deleted) VALUES(?,?,?,?,?,?,?,?,?,?,NOW(),?)";

    $stmt = mysqli_prepare($conn,$sql);

    if($stmt)
    {
        mysqli_stmt_bind_param($stmt,'sssssssssss', $fname,$mname,$lname,$email,$hash_pass,$city,$pincode,$addres,$mo,$gender,$del);
    }
    
    if(mysqli_stmt_execute($stmt))
    {
        echo "Successfully regisration::::::....";
        header("location:index.php");
    }
    else
    {
        echo "regisration Failed :::.::";
        exit;
    }

    mysqli_close($conn);
    

?>