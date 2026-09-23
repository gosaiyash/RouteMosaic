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
                <h1>SEE GSRTC Details , Admin</h1>
            </header>
        <center>
            <?php
            
                include('db_config.php');

                $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

                if(!$conn)
                {
                    die('Connection fail to database !!'. mysqli_connect_error());
                }

                $sql = "SELECT * FROM gsrtc WHERE deleted !=1";

                $result1 = mysqli_query($conn,$sql);

        
               


                    while ($row = mysqli_fetch_assoc($result1)) {

                        $id=$row["id"];
                       

                    echo "<table>

                            <tr>
                                
                                    <td>Bus name</td>
                                    <td>Bus rootNo</td>
                                    <td> Bus Start Time</td>
                                    <td>Bus end Time</td>
                                    <td>from</td>
                                    <td>To</td>
                                    <td>Bus add_date</td>
                                    <td>Deleted</td>
                                    <td class='red'>Update</td>
                                    <td class='red'>Delete</td>
                                                                    
                            </tr>
 
                                <td>" . $row["name"]. "</td>
                                <td>" . $row["rootNo"]. "</td>
                                <td>" . $row["start_time"]. "</td>
                                <td>" . $row["end_time"]. "</td>
                                <td>" . $row["1from"]. "</td>
                                <td>" . $row["1to"]. "</td>
                                <td>" . $row["date"]. "</td>
                                <td>" . $row["deleted"]. "</td>
                                <td> <a href='edit_gsrtc.php?id=$id'  id='edit'>Edit</a></td>
                                <td> <a href='delete_gsrtc.php?id=$id' class='delete'> Delete </a></td>

                                
                            </table>";

                           

                    
                           
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


