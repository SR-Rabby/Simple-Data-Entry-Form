
<?php
	$conn = mysqli_connect('localhost','root','','datacollection');

	if (isset($_GET['deletesi'])) {
		$deletesi = $_GET['deletesi'];

		$sql = "DELETE FROM student WHERE si = $deletesi";

		if(mysqli_query($conn, $sql) == TRUE)
		{
			header('location:Update.php');
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Record</title>
</head>
<body>
	<h1 id="h1">Student Record</h1>
	<center>
	<form action="" method="POST">
		<input id="input1" type="text" name="id" placeholder="Enter id to Search">
		<input id="input2" type="submit" name="Search" value="Search Result">
		</form></center>	
	<center>
		<?php
			$sql = "SELECT * FROM student";
			$query = mysqli_query ($conn, $sql);
			echo " <table class='table' border='1px solid blue'>
						<tr class='tr'>
						
							<th>ID</th>
							<th>NAME</th>
							<th>Gender</th>
							<th>Mobile</th>
							<th>Email</th>
							<th>Language</th>
							<th>Date</th>
	
						</tr>";
						while($data=mysqli_fetch_assoc($query))
						{

						
							$id = $data['Id'];
							$name = $data['Name'];
							$gender = $data['Gender'];
							$mobile = $data['Mobile'];
							$email = $data['Email'];
							$language = $data['Language'];
							$date = $data['Date'];
							


							echo "
							<tr>
								
								<td>$id</td>
								<td>$name</td>
								<td>$gender</td>
								<td>$mobile</td>
								<td>$email</td>
								<td>$language</td>
								<td>$date</td>
								

							</tr>";
						}



		?>
	
	</center>

</body>
</html>