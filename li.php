<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TEESKPO</title>
  <style>
    html{
    background-image: url('CW.jpeg');
    width:100%; 
    height: 100%;
     background-repeat: no-repeat; 
     background-position: center;
     background-size: cover;
   }
  
  .login-box {
    width: 350px;
    margin: auto;
    padding: 30px;
    margin-top: 130px;
  }
  
  h1 {
    
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    text-align: center;
    font-size: 36px;
    margin-bottom: 30px;
  }
  
  form {
    display: flex;
    flex-direction: column;
  }
  
  label {
    font-weight: bolder;
    font-size: 18px;
    margin-bottom: 10px;
  }
  
  input[type="text"],
  input[type="password"] {
    border-radius: 5px;
    border: none;
    padding: 10px;
    margin-bottom: 20px;
  }
  
  button[type="submit"] {
    background-color: hsl(122, 39%, 49%);
    color: rgb(255, 255, 255);
    border: none;
    border-radius: 5px;
    padding: 10px;
    font-size: 18px;
    cursor: pointer;
  }
  
  button[type="submit"]:hover {
    background-color: #3e8e41;
  }
  
  </style>
</head>
<body>
  <div class="login-box">
    <h1>Login</h1>
    <form role="form" name="login" action="" method="post">
      <label for="email">Email id:</label>
      <input type="text" id="email" name="email" required>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <button type="submit"  name="submit" value="Login" >Login</button>
      <br>
        Click here to <a href="reg.php" title="Registration"> Register here
    </form>
  </div>

  <?php
    
        if($_SERVER['REQUEST_METHOD']=='POST'){
        $email = $_POST['email'];	
       
        $password = $_POST['password'];
        
        
        $con = mysqli_connect("localhost","root","","T");
        
        if (mysqli_connect_errno())
                    {
                    echo "Failed to connect to MySQL: " .mysqli_connect_error();
                    }
		
		
			$query = "SELECT * FROM registration WHERE email='$email' and password='$password'";
                        $result = mysqli_query($con,$query);
                        if($result)
                        {
                            if(mysqli_num_rows($result)>0)
                            {
                                session_start();
                                $_SESSION['email'] = $email;
                                
                                header("Location: hm.php");
                            }
                            else{
                                echo("Invalid credenatials");
                            }
                            
                        }                     
                  
	      }
               
        ?>
</body>
</html>
