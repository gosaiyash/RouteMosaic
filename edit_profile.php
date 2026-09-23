<?php

session_start();

include('db_config.php');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$conn) 
{
    die('Connection failed: ' . mysqli_connect_error());
}

$id = $_SESSION['user_id'];



if (empty($id)) {
    die('ID is not set or is empty');
}

$sql1 = "SELECT * FROM user02 WHERE id='$id' AND deleted!=1";

$result = mysqli_query($conn, $sql1);

if ($result)
{
    $fetch = mysqli_fetch_assoc($result);

} 
else
{
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);




?>


<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Update Profile</title>

    <link rel="stylesheet" href="reg.css">

    </head>

<body>

    <div class="registration-container">
        
        <h1>Update Profile</h1>

        <div class="registration-container2">

            <form action="update_profile.php" method="post">

                <label for="fname" class="gender" >First Name:</label>
                <input type="text" id="fname" name="fname" value="<?php echo $fetch["fname"];?>">

                <label for="mname" class="gender" >Middel Name:</label>
                <input type="text" id="mname" name="mname"  value="<?php echo $fetch["mname"];?>">
                
                <label for="lname" class="gender" >Last Name:</label>
                <input type="text" id="lname" name="lname"  value="<?php echo $fetch["lname"];?>">


                <label for="city" class="label1">City:</label>
                <input type="text" id="city" name="city"  value="<?php echo $fetch["city"];?>">

                <label for="pincode" class="label1">Pincode:</label>
                <input type="text" id="pincode" name="pincode"  value="<?php echo $fetch["pincode"];?>">
                
                <label for="gender1" class="gender">Gender : </label>

                    <select name="gender" class="gender">gender:

                    <option value="male">Male</option>

                    <option value="female">Female</option>

                    <option value="other">Other</option>

                    </select>
               

                <label for="addres" class="label2" >Address:</label>
                <input type="text" id="addres" name="addres"  value="<?php echo $fetch["addres"];?>">

                <button type="submit">Update</button>

                <a href="delete_profile.php">Delete Profile</a>

            </form>

        </div>

     </div>

</body>

</html>
