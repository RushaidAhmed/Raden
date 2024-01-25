<html>
<head>
	<title>Contact us form </title>
	<link rel="stylesheet" href="style3.css" href="scripts.js">
	<script src="scripts.js"></script>
    
    
    
    <style>
    @import url('https://fonts.googleapis.com/css?family=Josefin+Sans');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  font-family: 'Josefin Sans', sans-serif;
}

body{
  /*background-color: darkseagreen; */
    background-image: url(https://image.freepik.com/free-vector/contact-us-woman-with-headphones-microphone-with-computer_113065-280.jpg);
}

.wrapper{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  max-width: 350px;
  width: 100%;
  background: #fff;
  padding: 25px;
  border-radius: 5px;
  box-shadow: 4px 4px 2px rgba(254,236,164,1); 
}

.wrapper h2{
  text-align: center;
  margin-bottom: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: #332902;
}

.wrapper .input_field{
  margin-bottom: 10px;
}

.wrapper .input_field input[type="text"],
.wrapper textarea{
  border: 1px solid #e0e0e0;
  width: 100%;
  padding: 10px;
}

.wrapper textarea{
  resize: none;
  height: 80px;
}

.wrapper .btn input[type="submit"]{
  border: 0px;
  margin-top: 15px;
  padding: 10px;
  text-align: center;
  width: 100%;
  background: #fece0c;
  color: #332902;
  text-transform: uppercase;
  letter-spacing: 5px;
  font-weight: bold;
  border-radius: 25px;
  cursor: pointer;
}

#error_message{
  margin-bottom: 20px;
  background: #fe8b8e;
  padding: 0px;
  text-align: center;
  font-size: 14px;
  transition: all 0.5s ease;
} 
    
  </style>  

</head>
<body>

<div class="wrapper">
  <h2>Contact us</h2>
  <div id="error_message"></div>
  <form method="POST" action="contactusprocess.php" id="myform">
    <div class="input_field">
        <input type="text" placeholder="Name" id="name" name="name">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Phone" id="phone" name="phone">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Email" id="email" name="email">
      </div>
    <div class="input_field">
        <textarea placeholder="Message" id="message" name="message"></textarea>
    </div>
    <div class="btn">
        <a href="#"><input type="submit" value="SUBMIT NOW"></a>
    </div>
  </form>
</div>

</body>
</html>
 
 