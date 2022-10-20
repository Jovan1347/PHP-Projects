<html>

<head>
	
<meta charset="utf-8">
<title>Employee List</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
	
<body>
	
	<div id="wrap">
	
		<div id="search">
			
				<img a src="img/addcontact.png">
			
				<a class="adduser" href="index.php"> <img src="img/notebook.png" height="50px" title="Search Employee"> </a>
				<a class="removeuser" href="remove.php"> <img src="img/removeuser.png" height="50px" title="Remove Employee"> </a>
			
			<form action="#" method="POST">
				
				<label> First name: <br>
				
					<input type="text" name="fname">
					
				</label><br>
				
				<label> Last name: <br>
				
					<input type="text" name="lname">
					
				</label><br>
				
				<label> Salary: <br>
				
					<input type="text" name="salary">
					
				</label><br>
				
				<input type="submit" name="insert" value="insert"> <br>
			
			</form>
		
		</div>
		
		<div id="message">
		
			<?php 
			
			if(isset($_POST['insert'])) {
				
				if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['salary'])) {
					
					if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['salary'])) {
						
						$fname = trim($_POST['fname']);
						$lname = trim($_POST['lname']);
						$salary = trim($_POST['salary']);
						
						require('inc/connect.php');
						
						$fname = mysqli_real_escape_string($conn, $fname);
						$lname = mysqli_real_escape_string($conn, $lname);
						$salary = mysqli_real_escape_string($conn, $salary);
						
						$query = "INSERT INTO employees(fname, lname, salary) VALUES ('{$fname}','{$lname}','{$salary}')";
						if (mysqli_query($conn, $query) === TRUE) {
							
							echo "New record succesfully created.";
							
						} else {
							
							echo "Error!";
							
						}
						
					} else {
						
						echo "All fields must be filled in.";
						
					}
					
				} else {
					
					echo "All parameters must be sent.";
					
				}
				
			}
			
			?>
			
		</div>
	
	</div>
	
</body>

</html>










