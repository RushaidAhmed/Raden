
<?php 
  
 // For POST Method use $_POST[] 
  
 $id = $_POST["name"]; 
 $name = $_POST["phone"]; 
 $spec = $_POST["email"]; 
 $vd = $_POST["message"]; 
  
 require_once("contactusconnection.php"); 
  
 $query = "INSERT INTO contactus VALUES ('$id','$name','$spec','$vd')"; 
  
 $result = mysqli_query($connection, $query); 
  
 if ($result) 
 { 
         print "added successfully"; 
 ?> 
         <p><a href="contactus.php">Check Here</a></p> 
<?php
}
?>




