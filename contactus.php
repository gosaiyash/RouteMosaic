<?php

include('db_config.php');

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);


//check

if(!$conn)
{
    die("Connection Failed to Database Server :" . mysqli_connect_error());
}

//echo "Connected Successfully to Database Server :";

$sql = " CREATE TABLE IF NOT EXISTS contactus(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name varchar(150),
    email varchar(250),
    to1 varchar(250),
    subject1 varchar(250),
    message1 varchar(2500),
    date date

)";


if(mysqli_query($conn,$sql))
{  
    //echo "Table Created Successfully";
}
else
{
    echo "Table Not Creation Failde :" . mysqli_error($conn);
}


    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $message = mysqli_real_escape_string($conn,$_POST['message']);
    $subject = mysqli_real_escape_string($conn,$_POST['subject']);
    $to = "support@ticketbooking.com";
    $date=date('y-m-d');


    $sql = "INSERT INTO contactus(name,email,message1,subject1,to1,date) VALUES(?,?,?,?,?,?)";

    $stmt = mysqli_prepare($conn,$sql);

    if($stmt)
    {
        mysqli_stmt_bind_param($stmt,'ssssss', $name,$email,$message,$subject,$to,$date);
    }
    
    if(mysqli_stmt_execute($stmt))
    {
        echo "Successfully regisration::::::....";
        header("location:book.php");
    }
    else
    {
        echo "regisration Failed :::.::";
        exit;
    }


?>