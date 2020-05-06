<!--Rates Change Success Page-->
<!DOCTYPE php>
<html lang="eng">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Rate Change Success Page</title>
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
				};

				//store the inputs as results from post
				$vType =  $_POST["V_Type"];
				$weeklyRate = $_POST["Weekly"];
				$dailyRate = $_POST["Daily"];

				//store mysql query in variable using input in post
				$sql = "UPDATE car_type SET weekly_rate = ('".$weeklyRate."') WHERE car_type_name = ('".$vType."');";

				//connect to the database and run the query using oop method
				$conn -> query($sql);

				//store mysql query in variable using input in post
				$sql = "UPDATE car_type SET daily_rate = ('".$dailyRate."') WHERE car_type_name = ('".$vType."');";

				//connect to the database and run the query using oop method
				$conn -> query($sql);
		?>

		<p>The rates have been updates succesffully. Please press the button below to return to the home screen.</p>
			<br>
		<form><button formaction="index.php" name="Home Page Button">Home</button></form>
	</body>
</html>