<!DOCTYPE html>
<html>
<head>
	<title>os2 project</title>
	<meta charset="UTF-8">

	<link rel="stylesheet" type="text/css" href="CSS/ImageText.css">
	<link rel="stylesheet" type="text/css" href="CSS/navbar.css">
	<link rel="stylesheet" type="text/css" href="CSS/dropdown.css">
	<link rel="stylesheet" type="text/css" href="CSS/FormStyle.css">

		
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

			<?php  
				$host = 'localhost';  // host name ..
				$user = 'root';  // user name ..
				$pass = '';	// password ..
				$dp = 'os2';	// database name ..
				//database connection 
				$conn = mysqli_connect($host, $user, $pass, $dp); 
				//connection failed
				if(! $conn ) {
					die('Could not connect: ' . mysqli_error());  
				}


				if ( isset( $_POST['submit'] ) ) {
					
  					$id = $_REQUEST['id'];
					$name = $_REQUEST['name'];
					$phone = $_REQUEST['phone'];
					$age = $_REQUEST['age'];
					
					
					// insert data ..

					
					
					$sql  ="INSERT INTO sec2 VALUES ('$id','$name','$phone','$age')";
					
					// check the operation ..
					if(mysqli_query($conn, $sql)){

						echo "<h1>insertion is done</h1>";
						echo "<br>";
						echo "<h2>thank you eng.ahmed farag </h2>";
						
						
						
						
					}else{
						echo "<h3>فى غلط عيد المحاوله مره تانيه: ". mysqli_error($conn) . "</h3>";
					}

				
				}

				mysqli_close($conn);	// close connection ..
			?>
		</div>
	</div>
</body>
</html>





