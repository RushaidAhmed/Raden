<html>
    <head>
        <title>Raden</title>
        <link rel="stylesheet" href="index.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js"></script>        
    </head>
    
    <body onload="myFunction()">
        
        <!-- side navbar -->
        <div class = "sidenav" id = "sidenav">
            <span class = "cancel-btn" id = "cancel-btn">
                <i class = "fas fa-times"></i>
            </span>

            <ul class = "navbar">
                <li><a href = "#header">home</a></li>
                <li><a href = "#bookings.php">bookings</a></li>
                <li><a href = "about_us.html">about us</a></li>
                <li><a href = "contact_us.html">contact us</a></li>
            </ul>
            <button class = "btn log-in"><a href="login.html" style="text-decoration: none;color:white;">log in</a></button>
        </div>
        <!-- end of side navbar -->

        
        <div id = "modal"></div>
        
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

                        while($row = $result->fetch_assoc()) {
                            echo "<tr> 
                      <td>" . $row["name"] . "</td>
                      <td>" . $row["specialization"] . "</td>
                      <td>" . $row["days"] . "</td>
                      <td>" . $row["time"] . "</td>
                    </tr>";

                    }
                    
                    ?>
                </tbody>
                  </tbody>
                </table>
            </div>

                <div class = "form-item">
                    <a href="login.html"> <input type = "button" class = "btn" value = "Edit"></a>
                </div>

        
        <!-- footer -->
        <footer class = "footer">
            <div class = "footer-container">
                <div>
                    <img src="images/logo.jpeg" style="border-radius:50%; height:180; width:160">
                    <ul class = "social-icons">
                        <li class = "flex">
                            <i class = "fa fa-twitter fa-2x"></i>
                        </li>
                        <li class = "flex">
                            <i class = "fa fa-facebook fa-2x"></i>
                        </li>
                        <li class = "flex">
                            <i class = "fa fa-instagram fa-2x"></i>
                        </li>
                    </ul>
                </div>

                <div>
                    <h2>Useful Links</h2>
                    <a href = "#">Blog</a>
                    <a href = "#Dog Hostel">Hostel</a>
                    <a href = "#">Subscription</a>
                    <a href = "#">Gift Card</a>
                </div>

                <div>
                    <h2>Privacy</h2>
                    <a href = "#">Career</a>
                    <a href = "about_us.html">About Us</a>
                    <a href = "contact_us.html">Contact Us</a>
                    <a href = "#services">Bookings</a>
                </div>

                
                <div>
                    <h2>Have A Question</h2>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-map-marker-alt"></i>
                        </span>
                        <span>
                            abc - 145883
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-phone-alt"></i>
                        </span>
                        <span>
                            +12345 67899
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-envelope"></i>
                        </span>
                        <span>
                            example@domain.com
                        </span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end of footer -->
        
        <script src="index.js"></script>
    </body>
</html>
