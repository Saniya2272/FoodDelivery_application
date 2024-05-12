<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <title>TEESKPO</title>
    <style>
        html{
            background-color: azure;
            background-image: url("cw4.jpeg");
            color: azure;
            text-align: center;
            border: 10px;
            padding-top:80px;
            background-repeat: no-repeat;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            height: 100%;
            background-repeat: no-repeat; 
            background-position: center;
            background-size: cover;
        }
        
        h1{
            color: black;
            text-align: center;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            text-decoration: underline;
        }
        input[type="text"]{
            border-radius: 5px;
            border-style:ridge;
            padding: 2px;
            margin-bottom: 20px;
        }
        form:label{
            background-color: azure;
        }
        ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
        }

        li {
            float:left;
            }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 12px 16px;
            text-decoration: none;
    }

li a:hover {
  background-color: #111;
}
        .cap{
            text-align:center;
            font-family: "Sofia", sans-serif;
        }
        .cap span{
            background-color:aliceblue;
            
        }
    </style>
</head>
    <body>
        <h1 style=color:aliceblue;>ORDER NOW!!!</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<label for="email">Email:   </label>
		<input type="email" id="email" name="email" required><br><br>
        <label for="name">Name:</label>
		<input type="text" id="name" name="name"><br>
		
		<label for="food">Select the Food:</label><br>
            <input type="checkbox" id="bb" name="food[]" value="Bread Basket">
            <label for="vehicle1"> Bread Basket</label><br>
            <input type="checkbox" id="hag" name="food[]" value="Honey Almond Granola with Fruits">
            <label for="hag"> Honey Almond Granola with Fruits</label><br>
            <input type="checkbox" id="bw" name="food[]" value="Belgian Waffle">
            <label for="bw"> Belgian Waffle</label><br>
            <input type="checkbox" id="se" name="food[]" value="Scrambled eggs">
            <label for="se"> Scrambled eggs</label><br>
            <input type="checkbox" id="bp" name="food[]" value="Blueberry Pancakes">
            <label for="bp"> Blueberry Pancakes</label> <br><br>
        
        
        <label for="ad">Address:</label>
        <input type="text" id="ad" name="ad"><br>   
        <?php
        date_default_timezone_set("Asia/Kolkata");
        ?>  
		<input type="text" name="date" value="<?php echo date('Y-m-d H:i:s'); ?>">
		<input type="submit" value="place order">
	</form>
    <p>Click here to view bookings<a href="orders.php" title="bookings"> My bookings</p>
  

    </section>
    <br>
    
    <?php
    

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "T";

		
		$conn = new mysqli($servername, $username, $password, $dbname);

	
		if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          

          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST["email"];
            $name = $_POST["name"];
            $address = $_POST["ad"];
            $date = $_POST["date"];
            $food = $_POST["food"];
          

            foreach ($food as $selected_food) {
              $sql = "INSERT INTO ord (email, name, address, date, food) VALUES ('$email', '$name', '$address', '$date', '$selected_food')";
            
              if ($conn->query($sql) === FALSE) {
                echo "ORDER FAILED TO PLACE";
              } 
            }
            
            $conn->close();
          }
          
          ?>
          
</body>

</html>

