<?php

session_start();

    include('db_config.php');

    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    
    
    //check

    if(!$conn)
    {
        die("Connection Failed to Database Server :" . mysqli_connect_error());
    }

    echo "Connected Successfully to Database Server :";

    $sql1 = " CREATE TABLE IF NOT EXISTS brts_reservations(
        id INT PRIMARY KEY AUTO_INCREMENT,
        user_id int,
        book_id int,
        deleted int,
        created_by date
    )";

if(mysqli_query($conn,$sql1))
{  
    //echo "Table Created Successfully";
}
else
{
    echo "Table Not Creation Failde :" . mysqli_error($conn);
}

    $user_id = $_SESSION['user_id'];  
    $book_id = mysqli_real_escape_string($conn,$_GET['id']);  
    $deleted = 0;   

   $sql = "INSERT INTO brts_reservations (user_id,book_id,deleted,created_by) VALUES(?,?,?,NOW())";

    $stmt = mysqli_prepare($conn,$sql);

    if($stmt)
    {
        mysqli_stmt_bind_param($stmt,'ssi', $user_id,$book_id,$deleted);
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

    mysqli_close($conn);
    

?>