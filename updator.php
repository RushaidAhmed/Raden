<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "booking";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

if (isset($_POST['update'])) {
  $name = $_POST['name'];
  $specialization = $_POST['specialization'];
  $days = $_POST['days'];
  $time = $_POST['time'];

  $sql = "UPDATE 'schedule' SET 'name' = '$name', 'specialization'='$specialization', 'days'='$days', 'time'='$time' WHERE 'name'='$name'";

  $result = $conn->query($sql);

  if ($result == TRUE) {
    echo "Record updated";
  }
  else {
    echo "Error:". $sql . "<br>" . $conn->error;
  }
}
if (isset($_GET['name'])) {
  $name = $_GET['name'];

  $sql = "SELECT * FROM 'schedule' WHERE 'name'='$name'";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $name = $row['name'];
      $specialization = $row['specialization'];
      $days = $row['days'];
      $time = $row['time'];
    }

  }
}

}
?>



<html>
<head>
	
    <style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  font-family: 'Open Sans', sans-serif;
}

body{
  background-color: #00FFFF;
  background-size: cover;
  width: 100%;
  height: 100vh;
  font-size: 16px;
}

.wrapper{
  width: 100%;
  padding: 10px;
}

.container{
  max-width: 500px;
  height: auto;
  margin: 50px auto;
  background: #fff;
  padding: 20px 40px 30px;
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;
  border-top: 7px solid #5f6c7d;
}

.title{
  color: #5f6c7d;
  font-size: 2em;
  text-align: center;
  text-transform: uppercase;
  font-weight: 900;
  margin-bottom: 20px;
}

.input-form{
  margin-bottom: 20px;
}

.input-form .label{
	  display: block;
    font-size: 1em;
    color: #212121;
    text-transform: capitalize;
    margin-bottom: 8px;
}

.input-form .items{
  margin-bottom: 20px;
}

.section-1 .items .input,
.section-2 .items .input,
.section-3 .items .input{
    background: transparent;
    border: 2px solid #BDBDBD;
    width: 100%;
    padding: 10px;
    font-size: 1em;
    color: #212121;
    border-radius: 3px;
}

.input-form .section-3{
  display: flex;
  justify-content: space-between;
}

.input-form .section-3 .items{
   width: 48%;
}

.btn{
	background: #5f6c7d;
	color: #fff;
	font-size: 1.25em;	
	padding: 10px 0;
	text-align: center;
	text-transform: uppercase;
	border-radius: 5px;
	cursor: pointer;
	font-weight: bold;
	letter-spacing: 2px;
}

.cvc{
  display: flex;
  justify-content: space-between;
  position: relative;
  transition: all 0.3s ease;
}

.cvc .tooltip{
  color: #d4d4d4;
  border: 2px solid #d4d4d4;
  border-radius: 50%;
  width: 25px;
  height: 25px;
  text-align:center;
  cursor: pointer;
}

.cvc .cvc-img{
  position: absolute;
  top: -300%;
  right: 0;
  background: #5f6c7d;
  padding: 12px;
  border-radius: 5px;
  display: none;
}

.cvc .cvc-img img{
  width: 100px;
  height: auto;
  display: block;
}

.cvc:hover .cvc-img{
  display: block;
}

@media screen and (max-width: 460px){
  .input-form .section-3{
    flex-direction: column;
  }
  .input-form .section-3 .items{
     width: 100%;
  }
  .input-form .items{
    margin-bottom: 10px;
  }

  .input-form{
    margin-bottom: 15px;
  }
  .title{
    font-size: 1.5em;
    margin-bottom: 15px;
  }
}
    </style>
    
	<title>Update</title>
</head>     
<body>

<div class="wrapper">
  <div class="container">
    <div class="title">Update</div>

    <form action="update.php" method="POST">
      <div class="input-form">
        <div class="section-1">
          <div class="items">
            <label class="label">Name</label>
            <input type="text" name="name" class="input" value="">
          </div>
        </div>
        <div class="section-2">
          <div class="items">
            <label class="label">Specialization</label>
            <input type="text" name="specialization" class="input" value="">
          </div>
        </div>
        <div class="section-3">
          <div class="items">
            <label class="label">Available Days</label>
            <input type="text" name="days" class="input" value="">
          </div>
        </div>
        <div class="section-4">
          <div class="items">
            <label class="label">Time</label>
            <input type="text" name="time" class="input" value="">
          </div>
        </div>
        <center><div class="btn-holder">
          <input type="submit" name="update" value="Update" class="btn">
        </div></center>
      </div>
    </form>
  </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js"></script>
</body>
</html>