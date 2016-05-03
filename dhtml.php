
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>DHTML</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/germanflag.png" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <link rel= "stylesheet" href ="assets/css/style.css">
  <script src = "assets/js/animate.js"></script>
  </head>
<!-- NAVBAR
================================================== -->
	<body  onload="annoyTheUser()">
	<!--nav-->
	<?php include 'header.html';?>
	<!--End Navigation-->




<div id="list2">
<h1 id = 'title' class = "facts">DHTML Properties</h1>
<p>Personally I'm not a fan of flashy colour changing stuff on websites so this page will
stay independent from the actual site in terms of content. The purpose of this page is to
display some DHTML elements we've learned in class. You can begin by changing the colour of
the header above to black, red, or yellow by clicking the buttons below.</p>
<div class = "otterContainer">
<button onclick="turnRed('title');">Turn Red</button><br>
<button onclick="turnYellow('title');">Turn Yellow</button><br>
<button onclick="turnBlack('title');">Turn Black</button><br>
</div>
	<div>
		<p>Below you can move the german flag around the page</p>
		<iframe src="moveSomething.html" width="700"height="700"></iframe>
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
