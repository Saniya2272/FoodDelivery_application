<!DOCTYPE html>
<html>
<head>
<title>SSS Food Court</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
.btn:hover{
    color: blue;
}
.header .a .logo i{
    color:azure;
    font-size:2rem;
}
.header .a .logo:hover{
    color:black;
}
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap');
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="header">
  <div class="a" style="letter-spacing:4px;">
    <a href="#home" class="logo"><i class="fa-solid fa-fork-knife"></i>Tiskpoo</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#home" class="w3-bar-item w3-button">Home</a>
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#menu" class="w3-bar-item w3-button">Menu</a>
      <a href="menu.php" class="w3-bar-item w3-button">Order</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
      <a href="orders.php" class="w3-bar-item w3-button">View Orders</a>
      <a href="lo.php" class="w3-bar-item w3-button">Logout</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-image" src="food4.jpg" alt="Hamburger Catering" width="1600" height="800">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-xxlarge">SSS Food Court</h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="food5.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="700" height="850">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">About</h1><br>
      <h5 class="w3-center">Tradition since 1995</h5>
      <p class="w3-large">SSS Food Court is a restaurent with cozy look and spacious.Also 5 star restaurent with delcious food and we provides you the best services.Enjoy your food!!!</p>
    </div>
  </div>
  
  <hr>
  
 
  <!-- Menu Section -->
  <div class="w3-row w3-padding-64" id="menu">
    <div class="w3-col l6 w3-padding-large">
      <h1 class="w3-center">Our Menu</h1><br>
      <h4>Bread Basket</h4>
      <p class="w3-text-grey">Assortment of fresh baked fruit breads and muffins</p>
      <p>Price:RS.100</p>
      <label for="Quantity">Quantity:</label>
			<input type="number" id="Quantity" name="Quantity" placeholder="Enter Quantity:"><br>
      <a href="#" class="btn">Add to Cart</a><br>
    
      <h4>Honey Almond Granola with Fruits</h4>
      <p class="w3-text-grey">Natural cereal of honey toasted oats, raisins, almonds and dates</p>
      <p>Price:RS.150</p>
      <label for="Quantity">Quantity:</label>
			<input type="number" id="Quantity" name="Quantity" placeholder="Enter Quantity:"><br>
      <a href="#" class="btn">Add to Cart</a><br>
    
      <h4>Belgian Waffle</h4>
      <p class="w3-text-grey">Vanilla flavored batter with malted flour</p>
      <p>Price:Rs.120</p>
      <label for="Quantity">Quantity:</label>
			<input type="number" id="Quantity" name="Quantity" placeholder="Enter Quantity:"><br>
      <a href="#" class="btn">Add to Cart</a><br>
    
      <h4>Scrambled eggs</h4>
      <p class="w3-text-grey">Scrambled eggs, roasted red pepper and garlic, with green onions</p>
      <p>Price:Rs.110</p>
      <label for="Quantity">Quantity:</label>
			<input type="number" id="Quantity" name="Quantity" placeholder="Enter Quantity:"><br>
      <a href="#" class="btn">Add to Cart</a><br>
    
      <h4>Blueberry Pancakes</h4>
      <p class="w3-text-grey">With syrup, butter and lots of berries</p>
      <p>Price:Rs.75</p>
      <label for="Quantity">Quantity:</label>
			<input type="number" id="Quantity" name="Quantity" placeholder="Enter Quantity:"><br>
      <a href="#" class="btn">Add to Cart</a>   
    </div>
  </div>

  <hr>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-64" id="contact">
    <h1>Contact</h1><br>
    <p>We offer full-service for any event, large or small. We understand your needs and we will deliver the food to satisfy the biggerst criteria of them all, both look and taste. Do not hesitate to contact us.</p>
    <p class="w3-text-blue-grey w3-large"><b>Marathalli,Bangalore Karnataka 560090</b></p>
    <p>You can also contact us by phone 00553123-2323 or email sss@gmail.com, or you can send us a message here:</p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<label for="email">Email:   </label>
		<input type="email" id="email" name="email" required><br><br>
    <label for="name">Name:</label>
		<input type="text" id="name" name="name"><br><br>
    <label for="text">Contact number:</label>
		<input type="text" id="c_n" name="c_n"><br><br>
    <label for="nop">No of persons:</label>
		<input type="nop" id="nop" name="nop"><br><br>
		<label for="date">Date:</label>
		<input type="date" id="date" name="date"><br><br>
    <label for="ds">Description:</label>
		<input type="ds" id="ds" name="ds"><br><br>
		<input type="submit" name='sm' value="send message">

  </div>
  
<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">Tiskpoo</a></p>
</footer>

<?php
    

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "T";

		
		$conn = new mysqli($servername, $username, $password, $dbname);

	
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		if (isset($_POST['sm'])) {
      $Id = $_POST['email'];
			$name = $_POST["name"];
      $cn=$_POST["c_n"];
			$nop = $_POST["nop"];
			$date = $_POST["date"];
			$ds = $_POST["ds"];

		
			$sql = "INSERT INTO contact(email,name,phone_number,people,date,description)
					VALUES ('$Id','$name','$cn','$nop', '$date','$ds')";

			
			if ($conn->query($sql) === TRUE) {
				echo "message sent   successfully!";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}

		
		$conn->close();
	?>

</body>
</html>
