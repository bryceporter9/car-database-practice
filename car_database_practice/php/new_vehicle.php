<!--Created by: Bryce Porter, Tim Frymire, Kendra Kabel-->
<!--May 5, 2020-->
<!--Homework 2-->
<!--Status:Runs successfully; fully functional-->
<!--New Vehicle Success Page-->
<!DOCTYPE php>
<html lang="eng">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>New Vehicle Successful Page</title>
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

				//store the mysql query in a variable using the input from post
				$sql = "INSERT INTO car (V_ID, Year, Model, Car_type) VALUES ('".$_POST["V_ID"]."','".$_POST["V_Year"]."','".$_POST["V_Model"]."','".$_POST["V_Type"]."');";

				//connecting to database and running query using oop method
				$conn -> query($sql);

		?>

		New vehicle type is: 
			<?php //check to see what type of vehicle it is and display it
				if ($_POST["V_Type"] == 1) {
					echo "Compact";
				}

				elseif ($_POST["V_Type"] == 2) {
					echo "Medium";
				}

				elseif ($_POST["V_Type"] == 3) {
					echo "Large";
				}

				elseif ($_POST["V_Type"] == 4) {
					echo "SUV";
				}

				elseif ($_POST["V_Type"] == 5) {
					echo "Truck";
				}

				elseif ($_POST["V_Type"] == 6) {
					echo "Van";
				}

				else{
					echo "That input was incorrect.";
				}
			 
			?>
			<br>

		The vehicle ID is: <?php echo $_POST["V_ID"]; ?>
			<br>

		The model is: <?php echo $_POST["V_Model"]; ?>
			<br>

		The year is <?php echo $_POST["V_Year"]; ?>
			<br>

		<p>Please press the button below to return home.</p>

		<!--form with button to redirect to home page-->
		<form>
			<button formaction="index.php" name="Home Button">Return Home</button>
		</form>
	</body>
</html>