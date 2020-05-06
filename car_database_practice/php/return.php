<!--Return Success Page-->
<!DOCTYPE php>
<html lang="eng">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Returun Success Page</title>
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

				$rno = $_POST["Rental_NO"];

				//store the mysql query in a variable using the input from post
				$sql = "SELECT datediff('r.end_date', 'r.start_date') * 'ct.daily_rate'
				FROM rental as r, car_type as ct, car
				WHERE 'r.rental_No' = '".$rno."'
				AND 'r.V_Id' = 'car.V_Id'
				AND 'car.car_type' = 'ct.car_type_id';";

				//if there is a result from the query, store it in variable using oop method
				if($result = $conn-> query($sql)){
					$row = $result-> fetch_assoc();
					echo "The ammount due is: ";
					echo $row;
					
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