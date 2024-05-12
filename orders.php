<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
$conn = mysqli_connect("localhost", "root", "", "T");
$sql = "SELECT id,name,address,date,food FROM ord WHERE email = '$email'";


$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    echo "<center><h2>Your Bookings</h2></center>";
    echo "<center><table>";
    echo "<tr><th>ORDER ID</th><th>ORDERED BY</th><th>ADDRESS</th><th>ORDERED_AT</th><th>ORDERED_FOOD</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["address"] . "</td><td>" .$row["date"] ."</td><td>" .$row["food"] ."</td></tr>";
    }
    echo "</center></table>";
} else {
    echo "No bookings found on this email";
}

mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
    <input type="submit" name="submit" value="view_bookings">
    <br>
        Click here to cancel your booking<a href="cancel.php" title="cancel"> Cancellation
</form>
</div>
</body>
</html>


