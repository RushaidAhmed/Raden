<html>
    <head>
        <title>Edit bookings</title>
        <link rel="stylesheet" href="index.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js"></script>
    
    </head>
    
    <body >
     
        
        <div class = "book">
            <div class = "title">
                <h3>Booking Schedule</h3>
            </div>

              <div class="booking-table">
                <table>
                  <thead>
                    <tr>
                      <th>Doctor Name</th>
                      <th>Specialization</th>
                      <th>Available Days</th>
                      <th>Time</th>
                      <th>Update</th>
                      <th>Delete</th>
                      <th>Insert</th>
                    </tr>
                  </thead>

                  <tbody>
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $database = "booking";

                        $connection = new mysqli($servername, $username, $password, $database);

                        if ($connection->connect_error) {
                            die("Connection failed: " . $connection->connect_error);
                        }

                        $sql = "SELECT * FROM schedule";
                        $result = $connection->query($sql);

                        if (!$result) {
                            die("Invalid query: " . $connection->error);
                        }

                        while ($row = mysqli_fetch_assoc($result)) {
                            $name = $row['name'];
                            $specialization = $row['specialization'];
                            $days = $row['days'];
                            $time = $row['time'];
                            echo "<tr> 
                                      <td>".$name."</td>
                                      <td>".$specialization."</td>
                                      <td>".$days."</td>
                                      <td>".$time."</td>
                                      <td><a href='updator.php?updatename=".$name."'>Update</a></td>
                                      <td><a href='editbookings.php?deletename=".$name."'>Delete</a></td>
                                      <td><a href='add.php?insert=".$name."'>Insert</a></td>
                                  </tr>";
                        }

                        include('update.php');

                        include('delete.php');

                        include('app.php');


                        $connection->close();
                        ?>

                </tbody>
                </table>
            </div>


        
        <script src="index.js"></script>
    </body>
</html>
