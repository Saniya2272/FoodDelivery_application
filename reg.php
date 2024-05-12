<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ZWIGGY DELIVERY- Register</title>
    <style>
   html{
     background-image: url('CW1.jpg');
     height: 100%;
     background-repeat: no-repeat; 
     background-position: center;
     background-size: cover;
   }
form {
    border-radius: 5px;
    width: 300px;
}

h1 {

    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    color: white;
    text-align: center;
    margin-top: 0;
}
input[type=text], input[type=password], input[type=email] {
    padding: 10px;
    width: 100%;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    box-sizing: border-box;
}
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
}
input[type=submit]:hover {
    background-color: #45a049;
}
label {
    color:white;
    font-weight: bold;
}
    </style>
</head>

<body>
<div>
	<form action="" method="POST">
		<h1>Registration</h1>
		<label for="Username">UserName</label>
		<input type="text" id="Username" name="Username" required>
		<label for="email">Email</label>
		<input type="email" id="email" name="email" required>
        <label for="Phone_number">Phone Number</label>
		<input type="text" id="P_N" name="P_N" required>
		<label for="password">Password</label>
		<input type="password" id="password" name="password" required>
		<label for="confirm-password">Confirm Password</label>
		<input type="password" id="confirm-password" name="confirm-password" required>
		<input type="submit" value="Register">
        Click here to <a href="li.php" title="Login"> Login 
            
	</form>
</div>
<?php
 
 $Name = $id = $Contact = $Password = "" ;
        
 if($_SERVER["REQUEST_METHOD"]=="POST"){
     $Name = $_POST['Username'];
     $Id = $_POST['email'];
     $Contact = $_POST['P_N'];
     $Password = $_POST['password'];
     
     $con = mysqli_connect("localhost","root","","T");                     

     $query = "INSERT INTO `registration` (username,email,phone_number,password) VALUES ('$Name','$Id', '$Contact', '$Password')";
                 $result = mysqli_query($con,$query);
                 if($result){
      echo ("Registration Succesful");
                 }
                             else
                             {
                                 echo ("Fail"); 
                             }
                  } 
 
?>
</body>
</html>
