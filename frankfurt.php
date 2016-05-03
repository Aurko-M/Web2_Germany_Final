
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Frankfurt</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/germanflag.png" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <link rel= "stylesheet" href ="assets/css/style.css">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
	<!--nav-->
	<?php include 'header.html';?>
	<!--End Navigation-->



    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
      <div class="carousel-inner" role="listbox">
	  
      <div class="item active">
        <img src="assets/images/frankfurt.jpg" alt="" >
      </div>
      <div class="item">
        <img src="assets/images/frankfurt1.jpg" alt="" >
      </div>
    
      <div class="item">
        <img src="assets/images/frankfurt2.jpg" alt="" >
      </div>
	  
      <div class="item">
        <img src="assets/images/frankfurt3.jpg" alt="" >
      </div>
		
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
	<!-- /.carousel -->
<div class = "cities">
<h1 class = "facts">Frankfurt</h1>


<h4 class = "maps">Frankfurt, the largest city in the German state of Hesse, is also the fifth largest City in Germany.
Frankfurt is the largest financial center in all of Europe; home to the European Central Bank, Deutsche Bundesbank, Frankfurt Stock Exchange 
and several other commercial banks.</h4>
</div>

    <div class="container marketing">

<div class = "foodcontent">
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Städelsches Kunstinstitut und Städtische Galerie (Städel)</h2>
          <p class="lead">The Städel Museum in Frankfurt is home to one of most important collections of art in Germany.
		  Some art exhibitions are paintings by Edgar Dega, Pablo Picasso, Max Beckmann, and Claude Monet.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="assets/images/frankfurtmusuem.jpg" alt="Generic placeholder image">
        </div>
      </div>

	  <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Alte Oper</h2>
          <p class="lead">The original opera house in Frankfurt is now called Alte Oper, which translates to Old Opera.
		  The original opera house was finished in 1880, however it was destroyed by bombs from Allied forces in 1944. The 
		  opera house was rebuilt and reopened in 1981.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="assets/images/frankfurtopera.jpg" alt="Generic placeholder image">
        </div>
      </div>
	  <hr class="featurette-divider">
<!-- /END THE FEATURETTES -->
</div>









      <!-- FOOTER -->
      <?php include 'footer.html';?>

    </div><!-- /.container -->


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
