<!DOCTYPE html>
<html>
<html lang="en">
	<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style>
	
		div.withpadding{
			margin:center;
			width:100%;
			padding: 50px;
		}
		
		div.login-register-buttons{
			margin:center;
			width:100%;
			padding: 5px;
		}
		
		p.withpadding{
			margin:center;
			width:100%;
			padding: 10px;
		}
		
		h1.withpadding{
			margin:center;
			width:100%;
		}
	
	</style>
	</head>
	
	<body>
		
		<?php
			include 'header.php'; 
			echo 
			"<div class='jumbotron jumbotron-fluid withpadding'>".
				"
				<h1 class='text-center withpadding'><b>Thunder Bay Stock Exchange</b></h1>
				<p class='text-center withpadding'>
					Your favourite simulated market for practice of stock buying, selling, and trading!
				</p>
				<br>
				<p class='text-center withpadding'>Please Login or Register below</p>
				
				<div class='login-register-buttons'>
					<button type='button' class='btn btn-danger btn-lg'>REGISTER</button>
					<button type='button' class='btn btn-primary btn-lg'>LOGIN</button>
				</div>
				";
		?>
		
		<!--
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$databasename = "stock_exchange";
			
			//create connection
			$conn = new mysqli($servername, $username, $password, $databasename);
			
			//check connection
			if($conn -> connect_error){
				die("Connection Failed. " . $conn->connect_error);
			}
			echo "<b style='color:green;'>Connection Successful</b>";
		?>
		
		<?php
			$sql = "SELECT * FROM stock_table";
			$result = $conn -> query($sql);
			
			echo "<table><tr>".
			"<th>Stock Name</th>".
			"<th>Stock Key</th>".
			"</tr>";
			
			if($result){
				while($row = $result -> fetch_assoc()){
					echo "<tr>".
					"<td>".$row["stock_name"]."</td>".
					"<td>".$row["stock_key"]."</td>".
					"<td>".$row["stock_price"]."</td>".
					"</tr>";
				}
			}else{
				echo "Error, no results";
			}
		?>
		-->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>