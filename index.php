<html>
    <head>
        <title>Raden</title>
        <link rel="stylesheet" href="index.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js"></script>
        <link rel = "icon" href = "images/logo.jpeg">        
    </head>
    
    <body onload="myFunction()">
        
        <!-- header -->
        <header class = "header" id = "header">
            <div class = "head-top">
                <div class = "site-name">
                    <span>RADEN</span> Private Health Care
                </div>
                <div>
                <img src="images/logo.jpeg" style="height:80;width:80;border-radius:50%;"></div>
                <div class = "site-nav">
                    <span id = "nav-btn">MENU <i class = "fas fa-bars"></i></span>
                </div>
            </div>

            <div class = "head-bottom flex">
                <h2>HAPPY AND COMFORTABLE HOSPITALIZNIG!</h2>
                <p>Hello Health Enthusiasts! Welcome to Raden Private Hospital. Explore our services for exclusive health offers. Earn rewards for added benefits. HURRY NOW!!</p>
                <button type = "button" class = "head-btn"><a href = "#services" style="text-decoration: none;color:white;">GET STARTED</a></button>
            </div>
        </header>
        <!-- end of header -->

        <!-- side navbar -->
        <div class = "sidenav" id = "sidenav">
            <span class = "cancel-btn" id = "cancel-btn">
                <i class = "fas fa-times"></i>
            </span>

            <ul class = "navbar">
                <li><a href = "#header">home</a></li>
                <li><a href = "about_us.html">about us</a></li>
                <li><a href = "bookings.php">Bookings</a></li>
                <li><a href = "contactus.php">contact us</a></li>
            </ul>
            
        </div>
        <!-- end of side navbar -->

        
        <div id = "modal"></div>
        

        <!-- body -->
        <section class = "services sec-width" id = "services">
            <div class = "title">
                <h3>Services</h3>
            </div>
            <div class = "services-container">
               
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-heart"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Specialized Medical Consultations</h2>
                        <p>Private hospitals often offer specialized consultations with experienced and highly trained medical professionals. These may include consultations with specialists in areas such as cardiology, orthopedics, neurology, or other specific medical fields.
                        </p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-ambulance"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Advanced Diagnostic Services</h2>
                        <p>Private hospitals typically provide a range of advanced diagnostic services, including MRI scans, CT scans, X-rays, and laboratory tests. These services aid in accurate and timely medical assessments, leading to more effective treatment plans.
                        </p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-syringe"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Surgical Procedures</h2>
                        <p>Private hospitals are equipped to perform various surgical procedures, ranging from minor surgeries to complex and specialized operations. This may include orthopedic surgeries, cardiac procedures, and general surgeries, among others.
                        </p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-first-aid"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Personalized Wellness Programs</h2>
                        <p>Many private hospitals focus on preventive healthcare by offering personalized wellness programs. These programs may include health screenings, vaccination schedules, lifestyle counseling, and health education to promote overall well-being and disease prevention.
                        </p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                
            </div>
        </section>
        
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
                    <!-- Add more rows for additional doctors -->
                  </tbody>
                </table>
            </div>

                <div class = "form-item">
                    <a href="login.html"> <input type = "button" class = "btn" value = "Log In EDIT"></a>
                </div>
            
        </div>

        <section class = "customers" id = "customers">
            <div class = "sec-width">
                <div class = "title">
                    <h3>customers</h3>
                </div>
                <div class = "customers-container">
                   
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>Quick Service</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <img src = "images/cus1.png">
                        <span>Angela Jualina</span>
                    </div>
                   
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>Comfortable</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <img src = "images/cus2.png">
                        <span>Rebecca White</span>
                    </div>
                    
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>Best Discounts</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <img src = "images/cus1.png">
                        <span>Olivia Silvie</span>
                    </div>
                    
                </div>
            </div>
        </section>
        
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
                   <center><p>Designed and developed by RADEN</p></center>
                </div>
            </div>
        </footer>
        <!-- end of footer -->
        
        <script src="index.js"></script>
    </body>
</html>
