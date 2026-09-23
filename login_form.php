<?php

    include("db_config.php");

    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

    //cheeck connection.......
    if(!$conn)
    {
        die("Connection Failed to Database Server :" . mysqli_connect_error());
    }

   // echo "Connected Successfully to Database Server :";

    $mo = mysqli_real_escape_string($conn,$_POST['id']); 
    $pass = mysqli_real_escape_string($conn,$_POST['pass']);
   
   
    
    $sql_check = " SELECT * FROM user02 WHERE deleted!=1 AND mo = '$mo' LIMIT 1 ";

      

    $result = mysqli_query($conn,$sql_check);

       
     $user_ck = mysqli_fetch_assoc($result); 
        
     $password =  $user_ck['pass'];

               if($user_ck)

                {
                    $check_pass = password_verify($pass,$password);

                  

                    if($check_pass = password_verify($pass,$password))
                    {
                    
                        session_start();
                        $_SESSION['user_name'] = $user_ck['fname'];
                        $_SESSION['user_id'] = $user_ck['id'];
                        
                        echo "logine done";
                        header("Refresh:2");
                       header("location:book.php");

                    }
                    else
                    {
                        echo "password wrong";
                    }
                }
                else
                    {
                        echo " Mobile number wrong";

                    }

                    if($mo == "admin" & $pass == "admin") 
                     {
                         header("location:adminlogin.php");
                     }
                     else
                     {
                        exit;
                     }

    mysqli_close($conn);


?>