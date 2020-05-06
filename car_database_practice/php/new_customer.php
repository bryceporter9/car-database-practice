<!--Created by: Bryce Porter, Tim Frymire, Kendra Kabel-->
<!--May 5, 2020-->
<!--Homework 2-->
<!--Status:Runs successfully; fully functional-->
<!--New Customer php page-->
<!DOCTYPE php>
<html lang="eng">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>New Customer Success Page</title>
	</head>
	<body>		
		<?php
				//set parameters for logging in
				$servername="Localhost";
				$username="root";
				$password="";
				$sdbname="tbk_rentals";
				//create a connection
				$conn=new mysqli($servername, $username, $password, $sdbname);
				//check connection status
				if ($conn->connect_error){
					die("Connection Failed: ".$conn->conect_error);
				}

				//store mysql query in variable using input in post
				$sql = "INSERT INTO customer (Id_No, Phone, Name) VALUES ('".$_POST["C_ID"]."','".$_POST["Phone"]."','".$_POST["Name"]."');";
				
				//connect to the database and run the query using oop method
				$conn -> query($sql);

				echo "The customer ";
				echo $_POST["Name"];
				echo " has been added successfully. Select the button below to return to the home page.";
		?>

		<!--form with button to redirect to home page-->
		<form><button formaction="index.php" name="Home Page Button">Home</button></form>
			<br>
		<p>If you do not yet have an account, please select the button below to add a new customer.</p>
		<form><button formaction="Reserve.html" name="Reservation Button">Make a reservation</button></form>
	</body>
</html>