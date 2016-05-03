
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Comments</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/germanflag.png" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="assets/js/validate.js" type="text/javascript"></script>
  <link rel= "stylesheet" href ="assets/css/style.css">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
	<!--nav-->
	<?php include 'header.html';?>
	<!--End Navigation-->



	<div id="list2">
	<h1 class = "facts">Comments Page</h1>
	<p>See what others have to say about their visit to Germany.</p>
	<P>Already visited Germany? Leave a comment below and describe your experience there.</P>

	
	
	
	<div class = "commentSection">	
		<?php
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



	echo"<br> <br>";


	// Create a query string
	$sql = "SELECT name, Comment FROM $tname";

	// Execute your query on the server connection
	$result = $conn->query($sql);

	// Check to see if results were found
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<p>Name: " .
			$row["name"] .
			"</p> <p>Comment: " .
			$row["Comment"] .
			"</p><br>";
	} //end while

	}//end if

	// NO results were found in the query
	else {
		echo "0 results";
	}

	// close the connection to the database on the server
	$conn->close();

	?>
	</div>
	
	<div class = "submitSection">	
		<form name="myForm" action ="commentSubmit.php" onsubmit="return validateForm()" method="post">
			<p>Name:<br> <input type="text" id="name" name="name">
			</p>
			<p>Comment:<br><textarea rows="5" cols="50" name ="comment" id="comment">Leave a comment here...</textarea>
			</p>
			<input type="submit" name="submit">
		</form>
	</div>

	
</div>



      <!-- FOOTER -->
      <?php include 'footer.html';?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
