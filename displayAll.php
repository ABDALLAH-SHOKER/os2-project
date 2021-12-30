<!DOCTYPE html>
<html>
<head>
	<title style="centered">os2 project </title>
	<meta charset="UTF-8">

	<link rel="stylesheet" type="text/css" href="CSS/ImageText.css">
	<link rel="stylesheet" type="text/css" href="CSS/navbar.css">
	<link rel="stylesheet" type="text/css" href="CSS/dropdown.css">
	<link rel="stylesheet" type="text/css" href="CSS/FormStyle.css">
	
	<style>
		table, th, td {
  			border: 2px solid white;
  			border-collapse: collapse;
			
		}
		table {
			position: relative;
			left: 15px;
			border-spacing: 5px;
		}

		th, td {
  			padding: 15px;
		}

		
	</style>
</head>
<body>

	<div class="container">
		<img src="1.jpg" class="bg-image" alt="Snow"><!-- image -->

  		
  		<nav class="top-left bg-image">
  			<ul>
  				

  				
				  <li class="dropdown">
  					<a class="dropbtn">students</a>
  					<div class="dropdown-content">
						<a href="add.html">add new</a>
						<a href="SearchAbout.html">search</a>
						
					</div>
  				</li>


  				

</ul>

  		</nav>
		
		</nav>
		


		<!-- center of image -->
		<div class="centered bg-text">
			<table style="border: 2px solid white; border-collapse: collapse;">
			<h1> data of all students</h1>
			<br>
			
<br>
				<tr>
    					<th>id</th>
    					<th>name</th>
					<th>phone</th>
					<th>age</th> 
					  
    					
  				</tr>
			<?php 
$conn = mysqli_connect("localhost","root","","os2");

if (! $conn) {
echo mysqli_connect_error();
exit();	

}

$query = "SELECT * FROM sec2 ";




$result = mysqli_query($conn,$query);
while ($row = mysqli_fetch_assoc($result)) {
	echo '<tr>';
	echo "<th>". $row['id'] ."</th>";
	echo "<th>". $row['name'] ."</th>";
	echo "<th>". $row['phone'] ."</th>";
	echo "<th>". $row['age'] ."</th>";
	
							
	

}



mysqli_close($conn);

?>
			</table>
		</div>
	</div>
</body>
</html>