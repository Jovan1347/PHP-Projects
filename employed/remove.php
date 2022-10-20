<html>

<head>
	
<meta charset="utf-8">
<title>Employee List</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
	
<body>
	
	<div id="wrap">
	
		<div id="search">
			
				<img a src="img/deletecontact.png">
			
				<a class="adduser" href="index.php"> <img src="img/notebook.png" height="50px" title="Search Employee"> </a>
				<a class="removeuser" href="insert.php"> <img src="img/adduser.png" height="50px" title="Add New Employee"> </a>
		
		</div>
		
		<?php
		
		require('inc/connect.php');
		$query = "SELECT * FROM employees";
		$result = mysqli_query($conn,$query);
		
		if(mysqli_num_rows($result) > 0) {
			
			while($row = mysqli_fetch_assoc($result)) {
				?>
		
					<div id="result">
		
						<a href="inc/removeContact.php?id=<?php echo $row['id'] ?>"> <img src="img/removeuser.png"> </a>
						
						<p> <b>Name: </b> <?php echo $row['fname'] . " " . $row['lname']; ?> </p>
						<p> <b>Salary: </b> <?php echo $row['salary']; ?> </p>
						
		
					</div>
				
				<?php
			}
			
		} else {
			
			echo "No employees!";
			
		}
		
		?>
	
	</div>
	
</body>

</html>










