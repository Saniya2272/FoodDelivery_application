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
        $Id = $_POST['order_id'];
        $email=$_POST['email'];
        
        
        $sql = "DELETE FROM ord where id='$Id' AND email='$email'";

        
        if ($conn->query($sql) === TRUE) {
            echo "order cancelled successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }


    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/rf.css"> -->
</head>
<style>
        html{
            background-color: azure;
            color: rgb(0, 0, 0);
            text-decoration: underline;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 50px;
		}

		label {
			margin-bottom: 10px;
			font-weight: bold;
		}

		input[type="int"] {
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 4px;
			font-size: 16px;
			margin-bottom: 20px;
			width: 300px;
			max-width: 100%;
		}

        input[type="text"] {
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 4px;
			font-size: 16px;
			margin-bottom: 20px;
			width: 300px;
			max-width: 100%;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 11px;
			transition: background-color 0.3s ease;
		}

		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
        </style>
<body>
    <div class="container">
    <form method="post" action="">
    <label for="email">Enter Your email-id:</label>
    <input type="text" name="email" placeholder="Your email address">
    <label for="book_id">Enter Your order-id:</label>
    <input type="int" name="order_id" placeholder="order id">
    <input type="submit" name="submit" value="cancel">
    <br>
        Click here to view bookings<a href="orders.php" title="bookings"> My bookings
</form>
</div>
</body>
</html>


