<?php

    include("db_config.php");

    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

    //cheeck connection.......
    if(!$conn)
    {
        die("Connection Failed to Database Server :" . mysqli_connect_error());
    }

   // echo "Connected Successfully to Database Server :";

    $mo = mysqli_real_escape_string($conn,$_POST['uname']); 
    $pass = mysqli_real_escape_string($conn,$_POST['pass']);
   

    //Id or Password check..........
    
    $sql_check = " SELECT * FROM admin1 WHERE mo = '$mo' LIMIT 1";

 

    $result = mysqli_query($conn,$sql_check);

       

     $user_ck = mysqli_fetch_assoc($result); 
      

     $password =  $user_ck['pass'];

        

               if($user_ck)

                {
                    $check_pass = password_verify($pass,$password);

                   // echo "test".$check_pass;

                    if($$check_pass = password_verify($pass,$password))
                    {
                        session_start();
                        $_SESSION['admin_name'] = $user_ck['uname'];
                        $_SESSION['admin_id'] = $user['id'];
                        
                        echo "logine done";
                        header("Refresh:2");
                        header("location:admin.php");
                    }
                    else
                    {
                        echo "password wrong";
                    }
                }
                else
                    {
                        echo " Username number wrong";
                    }


        
    mysqli_close($conn);


?>