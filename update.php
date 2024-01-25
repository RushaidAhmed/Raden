

<?php 
  
 // For POST Method use $_POST[] 
  
 $id = $_POST["name"]; 
 $name = $_POST["specialization"]; 
 $spec = $_POST["days"]; 
 $vd = $_POST["time"]; 
  
 require_once("contactusconnection.php"); 
  
 $query = "UPDATE schedule set specialization='$name', days='$spec', time= '$vd' where name='$id'";
  
 $result = mysqli_query($connection, $query); 
  
 if ($result) 
 { 
         print "added successfully"; 
         
 ?> 
        
<?php
}
?>




