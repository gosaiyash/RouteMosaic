<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="admin01.css">
</head>

<style>

a
{
    text-decoration: none;
    font-family: bold;
    color: black;
    font-size: 1.2em;
}

.form-container {
    background-color: #fff;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    width: 300px;
}

h2 {
    text-align: center;
    margin-bottom: 1rem;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 0.5rem;
    font-weight: bold;
}

input {
    margin-bottom: 1rem;
    padding: 0.5rem;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    padding: 0.5rem;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #45a049;
}
table,td
{
    padding:10px;
    margin:10px;
    border:2px solid black;
    border-collapse:collapse;
    width:60vw;
}
.red
{
    color:;
}
#edit
{
    color:red;
    font-size:1.5em;
    font-family:Arial Narrow Bold;
}
.delete
{
    color:red;
    font-size:1.5em;
    font-family:Arial Narrow Bold;
}


</style>
<body>
    <div class="container">

        <aside class="sidebar">

            <h2>Admin Dashboard</h2>
            <ul>
                <li><a href="admin.php"><i class="fas fa-tachometer-alt"></i> Admin Page</a></li>
                <li><a href="adddetails.html"><i class="fas fa-ticket-alt"></i> ADD Details </a></li>
                
            </ul>
        </aside>

        <main class="main-content">

            <header>
                <h1>SEE reservations Details , Admin</h1>
            </header>
        <center>
            <?php
            
                include('db_config.php');

                $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

                if(!$conn)
                {
                    die('Connection fail to database !!'. mysqli_connect_error());
                }

                $sql = "SELECT * FROM metro_reservations WHERE deleted !=1";

                $result1 = mysqli_query($conn,$sql);

        
               
                    echo "metro_reservations";

                    while ($row = mysqli_fetch_assoc($result1)) {

                        $id=$row["id"];
                       

                    echo "<table>

                       
                             <tr>
                                
                                    <td>user_id</td>
                                    <td>book_id</td>
                                    <td>created_by</td>
                                                                    
                            </tr>
 
                                <td>" . $row["user_id"]. "</td>
                                <td>" . $row["book_id"]. "</td>
                                <td>" . $row["created_by"]. "</td>
                                           
                            </table>";
                    }
                            $sql1 = "SELECT * FROM train_reservations WHERE deleted !=1";

                            $result2 = mysqli_query($conn,$sql1);

                            echo "train_reservations";

                    while ($row1 = mysqli_fetch_assoc($result2)) {

                        $id=$row1["id"];
                       

                    echo "<table>

                       
                             <tr>
                                
                                    <td>user_id</td>
                                    <td>book_id</td>
                                    <td>created_by</td>
                                                                    
                            </tr>
 
                                <td>" . $row1["user_id"]. "</td>
                                <td>" . $row1["book_id"]. "</td>
                                <td>" . $row1["created_by"]. "</td>
                                           
                            </table>";
                    }
                            $sql2 = "SELECT * FROM plan_reservations WHERE deleted !=1";

                            $result3 = mysqli_query($conn,$sql2);

                            echo "plan_reservations";

                    while ($row2 = mysqli_fetch_assoc($result3)) {

                        $id=$row2["id"];
                       

                    echo "<table>

                       
                             <tr>
                                
                                    <td>user_id</td>
                                    <td>book_id</td>
                                    <td>created_by</td>
                                                                    
                            </tr>
 
                                <td>" . $row2["user_id"]. "</td>
                                <td>" . $row2["book_id"]. "</td>
                                <td>" . $row2["created_by"]. "</td>
                                           
                            </table>";
                    }

                            $sql3 = "SELECT * FROM amts_reservations WHERE deleted !=1";

                            $result4 = mysqli_query($conn,$sql3);

                            echo "amts_reservations";

                    while ($row3 = mysqli_fetch_assoc($result4)) {

                        $id=$row3["id"];
                       

                    echo "<table>

                       
                             <tr>
                                
                                    <td>user_id</td>
                                    <td>book_id</td>
                                    <td>created_by</td>
                                                                    
                            </tr>
 
                                <td>" . $row3["user_id"]. "</td>
                                <td>" . $row3["book_id"]. "</td>
                                <td>" . $row3["created_by"]. "</td>
                                           
                            </table>";
                    }
                            $sql4 = "SELECT * FROM amts_reservations WHERE deleted !=1";

                            $result5 = mysqli_query($conn,$sql4);

                            echo "brts_reservations";

                    while ($row4 = mysqli_fetch_assoc($result5)) {

                        $id=$row4["id"];
                       

                    echo "<table>

                       
                             <tr>
                                
                                    <td>user_id</td>
                                    <td>book_id</td>
                                    <td>created_by</td>
                                                                    
                            </tr>
 
                                <td>" . $row4["user_id"]. "</td>
                                <td>" . $row4["book_id"]. "</td>
                                <td>" . $row4["created_by"]. "</td>
                                           
                            </table>";

                            $sql5 = "SELECT * FROM gsrtc_reservations WHERE deleted !=1";

                            $result6 = mysqli_query($conn,$sql5);
                            echo "gsrtc_reservations";

                    while ($row6 = mysqli_fetch_assoc($result6)) {

                        $id=$row6["id"];
                       

                    echo "<table>

                       
                             <tr>
                                
                                    <td>user_id</td>
                                    <td>book_id</td>
                                    <td>created_by</td>
                                                                    
                            </tr>
 
                                <td>" . $row6["user_id"]. "</td>
                                <td>" . $row6["book_id"]. "</td>
                                <td>" . $row6["created_by"]. "</td>
                                           
                            </table>";

                           
                    }
                    
                           
                   }


            
            ?>

        </center>    

            <br>

            <footer>
                <p>© 2024 Online Ticket Reservation System</p>
            </footer>
        </main>
    </div>
</body>

</html>