<!--Display Database Information Page-->
<!DOCTYPE php>
<html lang="eng">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Display Databse Information Page</title>
	</head>
	<body>
		<h1>Database Information</h1>
			<!--form with button to redirect to home page-->
			<form><button formaction="index.php" name="Home Page Button">Home</button></form>
				<br>
		<h2>Trucks</h2>
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
				
				//store mysql query in variable
				$sql = "SELECT Car_Type_ID, Daily_Rate, Weekly_Rate FROM car_type WHERE Car_Type_Name = 'Truck';";
				
				//if there is a result from the query, store it in variable using oop method
				if($result = $conn-> query($sql)){
					//while there is a result left in array, assign value to variable using oop method
					while ($row = $result->fetch_assoc()) {
						echo "Car type id: ";
						echo $row['Car_Type_ID'];
						echo "<br>";
						echo "Daily rate is: ";
						echo $row['Daily_Rate'];
						echo "<br>";
						echo "Weekly rate is: ";
						echo $row['Weekly_Rate'];
					}
					//free up the result variable to be used again
					mysqli_free_result($result);
				}
				//if no results then display message
				else{
					echo "0 results";
				}
			?>

		<h2>Vans</h2>
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
				
				//store mysql query in variable
				$sql = "SELECT Car_Type_ID, Daily_Rate, Weekly_Rate FROM car_type WHERE Car_Type_Name = 'Van';";
				
				//if there is a result from the query, store it in variable using oop method
				if($result = $conn-> query($sql)){
					//while there is a result left in array, assign value to variable using oop method
					while ($row = $result->fetch_assoc()) {
						echo "Car type id: ";
						echo $row['Car_Type_ID'];
						echo "<br>";
						echo "Daily rate is: ";
						echo $row['Daily_Rate'];
						echo "<br>";
						echo "Weekly rate is: ";
						echo $row['Weekly_Rate'];
					}
					//free up the result variable to be used again
					mysqli_free_result($result);
				}
				//if no results then display message
				else{
					echo "0 results";
				}
			?>
			

		<h2>Compact</h2>
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

				//store mysql query in variable
				$sql = "SELECT Car_Type_ID, Daily_Rate, Weekly_Rate FROM car_type WHERE Car_Type_Name = 'Compact';";
				
				//if there is a result from the query, store it in variable using oop method
				if($result = $conn-> query($sql)){
					//while there is a result left in array, assign value to variable using oop method
					while ($row = $result->fetch_assoc()) {
						echo "Car type id: ";
						echo $row['Car_Type_ID'];
						echo "<br>";
						echo "Daily rate is: ";
						echo $row['Daily_Rate'];
						echo "<br>";
						echo "Weekly rate is: ";
						echo $row['Weekly_Rate'];						
					}
					//free up the result variable to be used again
					mysqli_free_result($result);
				}
				//if no results then display message
				else{
					echo "0 results";
				}
			?>
			

		<h2>Medium</h2>
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

				//store mysql query in variable
				$sql = "SELECT Car_Type_ID, Daily_Rate, Weekly_Rate FROM car_type WHERE Car_Type_Name = 'Medium';";
				
				//if there is a result from the query, store it in variable using oop method
				if($result = $conn-> query($sql)){
					//while there is a result left in array, assign value to variable using oop method
					while ($row = $result->fetch_assoc()) {
						echo "Car type id: ";
						echo $row['Car_Type_ID'];
						echo "<br>";
						echo "Daily rate is: ";
						echo $row['Daily_Rate'];
						echo "<br>";
						echo "Weekly rate is: ";
						echo $row['Weekly_Rate'];						
					}
					//free up the result variable to be used again
					mysqli_free_result($result);
				}
				//if no results then display message
				else{
					echo "0 results";
				}
			?>
			

		<h2>Large</h2>
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
				
				//store mysql query in variable
				$sql = "SELECT Car_Type_ID, Daily_Rate, Weekly_Rate FROM car_type WHERE Car_Type_Name = 'Large';";
				
				//if there is a result from the query, store it in variable using oop method
				if($result = $conn-> query($sql)){
					//while there is a result left in array, assign value to variable using oop method
					while ($row = $result->fetch_assoc()) {
						echo "Car type id: ";
						echo $row['Car_Type_ID'];
						echo "<br>";
						echo "Daily rate is: ";
						echo $row['Daily_Rate'];
						echo "<br>";
						echo "Weekly rate is: ";
						echo $row['Weekly_Rate'];						
					}
					//free up the result variable to be used again
					mysqli_free_result($result);
				}
				//if no results then display message
				else{
					echo "0 results";
				}
			?>
			

		<h2>SUV</h2>
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
				
				//store mysql query in variable
				$sql = "SELECT Car_Type_ID, Daily_Rate, Weekly_Rate FROM car_type WHERE Car_Type_Name = 'SUV';";
				
				//if there is a result from the query, store it in variable using oop method
				if($result = $conn-> query($sql)){
					//while there is a result left in array, assign value to variable using oop method
					while ($row = $result->fetch_assoc()) {
						echo "Car type id: ";
						echo $row['Car_Type_ID'];
						echo "<br>";
						echo "Daily rate is: ";
						echo $row['Daily_Rate'];
						echo "<br>";
						echo "Weekly rate is: ";
						echo $row['Weekly_Rate'];						
					}
					//free up the result variable to be used again
					mysqli_free_result($result);
				}
				//if no results then display message
				else{
					echo "0 results";
				}
			?>
			

		<h2>Current Rentals</h2>
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

				//store mysql query in variable
				$sql = "SELECT Rental_No, Start_Date, End_Date FROM rental WHERE Start_Date < curdate() AND End_Date > curdate();";

				//if there is a result from the query, store it in variable using oop method
				if($result = $conn-> query($sql)){
					echo "<b>Listed by date</b>";
					echo "<br>";
					//while there is a result left in array, assign value to variable using oop method
					while ($row = $result->fetch_assoc()) {
						echo "<br>";
						echo "Date:";
						echo $row['Start_Date'];
						echo " / ";
						echo $row['End_Date'];
						echo "<br>";
						echo "Rental Number:";
						echo $row['Rental_No'];
						echo "<br>";
					}
					//free up the result variable to be used again
					mysqli_free_result($result);
				}
				//if no results then display message
				else{
					echo "0 results";
				}
			?>
			
		<h2>Scheduled Rentals</h2>
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

				$sql = "SELECT Rental_No, Start_Date, End_Date FROM rental WHERE Start_Date > curdate();";

				//if there is a result from the query, store it in variable using oop method
				if($result = $conn-> query($sql)){
					echo "<b>Listed by date</b>";
					echo "<br>";
					//while there is a result left in array, assign value to variable using oop method
					while ($row = mysqli_fetch_array($result)) {
						echo "<br>";
						echo "Date:";
						echo $row['Start_Date'];
						echo " / ";
						echo $row['End_Date'];
						echo "<br>";
						echo "Rental Number:";
						echo $row['Rental_No'];
						echo "<br>";
					}
					//free up the result variable to be used again
					mysqli_free_result($result);
				}
				//if no results then display message
				else{
					echo "0 results";
				}
			?>
						
	</body>
</html>
