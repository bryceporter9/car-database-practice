<!--New reservation Success Page-->
<!DOCTYPE php>
<html lang="eng">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>New Reservation Success Page</title>
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
				
				$cName = $_POST["Name"];
				$nameCheck = "SELECT name, ID_No
							FROM customer
							WHERE 'customer.name' = '".$cName."';";//get query from tim

				//if the customer exist, execute the query for the reservation.
				if ($result = $conn-> query($nameCheck)){					
	  				//store the mysql query in a variable using the input from post
	  				$carType = $_POST["C_Type"];
 					$startDate = $_POST["Start_Date"];
 					$returnDate = $_POST["Return_Date"];


	  				$sql = "SELECT 'car.model','car_type.car_type_name'
 							FROM car,car_type,rental 
 							WHERE 'car_type.car_type_id' = 'car.car_type'
					 		AND 'car_type.car_type_name' = '".$carType."'
 							AND 'car.V_id' = 'rental.V_Id'
 							AND 'rental.start_date' > '".$startDate."'
 							AND 'rental.end_date' > '".$returnDate."'";

 					//if there is a result from the query, store it in variable using oop method
					if($result = $conn-> query($sql)){
						echo "There is a result.";	
						//while there is a result left in array, assign value to variable using oop method
						while ($row = $result->fetch_assoc()) {
							echo "Car Model: ";
							echo $row['car.model'];
							echo "<br>";
							echo "Car Type: ";
							echo $row['car_type.car_type_name'];
							echo "<br>";			
						}
						echo "Let's finish the reservation.";
						//free up the result variable to be used again
						mysqli_free_result($result);
					}
					//if no results then display message
					else{
						echo "0 results";
					}
				}

				else{
					echo "I am sorry, but that customer does not exist. Please add the customer to the database before proceeding.";

				}
				

				
		?>

	</body>
</html>