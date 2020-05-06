<!--Landing page-->
<!DOCTYPE php>
<html lang="eng">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Main Page</title>
	</head>
	<body>		
		<h1>TBK Car Rentals</h1>
			<!--Company logo-->
			<img src="image.jpg" name="Shaggy's Truck" width="150" height="100">
			
		<h2>See All Database Information</h2>
			<!--form with button to redirect to db_information page-->
			<form><button formaction="Database_Information.php" name="Database Information Button">Database Information</button></form>

		<h2>Add Customer Information</h2>
			<!--form with button to redirect to add customer page-->
			<form><button formaction="../html/Add_Customer.html" name="Add Customer Button">Add Customer</button></form>

		<h2>Add New Vehicle</h2>
			<!--form with button to redirect to add vehicle page-->
			<form><button formaction="../html/New_Vehicle.html" name="Add Vehicle Button">Add Vehicle</button></form>

		<h2>Reserve A Car</h2>
			<!--form with button to redirect to start a reservation page-->
			<form><button formaction="../html/Reserve.html" name="Reserve Vehicle Button">Reserve Vehicle</button></form>

		<h2>Return A Vehicle</h2>
			<!--form with button to redirect to return a vehicle page-->
			<form><button formaction="../html/Return.html" name="">Return Vehicle</button></form>

		<h2>Update Rental Rates</h2>
			<!--form with button to redirect to update rental rates page-->
			<form><button formaction="../html/Rental_Rates.html" name="Update Rental Rates Button">Update Rental Rates</button></form>
	</body>
</html>
