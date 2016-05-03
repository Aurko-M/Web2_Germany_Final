	<?
	if(isset($_POST['submit'])){
	// Identify the server information
	$servername = "localhost";
	$username = "am9833";
	$password = "fr1end";
	$tablename = "proj2comments";
	$dbname = "am9833";
	// Create a connection to the server
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
	$name = false;	// Store Name
	$comment = false;	// Store Password
	$error = false; // Default error message
		
	// Check if information was entered
	if (isset($_POST['name'])) {
		$name = $_POST['name']; 
	}
	
	// Check if information was entered
	if (isset($_POST['comment'])) {
		$comment = $_POST['comment']; 
	}
	
	// If there are no errors continue
	if (!$error){
		// MYSQL INJECTION PROTECTION
		$name = stripslashes($name); 
		$comment = stripslashes($comment); 
		$name = mysql_real_escape_string($name); 
		$comment = mysql_real_escape_string($comment);
	
	}
	
	if (!$error){
	//BEGIN INSERT
	// Create a query string
	$sql = "INSERT INTO $tablename (name, comment)
	VALUES ('$name', '$comment')";
	
	if ($conn->query($sql) === TRUE) {
		$error = "Your comment was successfully entered";
		
	} else {
		$error = "Error: " . $sql . "<br>" . $conn->error;
	}
	}

	
	}
	header("location: comment.php#");
	exit;
	/*
	if(isset($_POST['submit'])){
	// Identify the server information
	$servername = "localhost";
	$username = "am9833";
	$password = "fr1end";
	// Database name
	$dbname = "am9833";
	// Table name
	$tname = "proj2comments";
	
	// Create a connection to the server
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
	//BEGIN INSERT
	// Create a query string
	$sql = "INSERT INTO $tname (name, comment)
	VALUES ('$name', '$comment')";

	if ($conn->query($sql) === TRUE) {
		echo "Your comment was successfully entered";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	//End INSERT
	// close the connection to the database on the server
	$conn->close();
	}*/
	?>