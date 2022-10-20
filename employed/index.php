<html>

<head>
	
<meta charset="utf-8">
<title>Employee List</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
	
<body>
	
	<div id="wrap">
	
		<div id="search">
		
			<img src="img/notebook.png">
			
				<a class="adduser" href="insert.php"> <img src="img/adduser.png" height="50px" title="Add Employee"> </a>
				<a class="removeuser" href="remove.php"> <img src="img/deleteuser.png" height="50px" title="Remove Employee"> </a>
			
			<form action="#" method="GET">
			
				<input type="text" placeholder="Search List" name="criteria">
				<input type="submit" value="search"> <br>
			
			</form>
		
		</div>
		
	<?php
		
	include("inc/getResults.php");
		
	?>
	
	</div>
	
</body>

</html>