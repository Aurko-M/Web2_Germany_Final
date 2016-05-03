
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Special Events</title>
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
	  <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>
	<div class = "carousel-inner-food">		
      <div class="carousel-inner" role="listbox">
	  
      <div class="item active">
        <img src="assets/images/berlinfilm.jpg" alt="" >
      </div>

      <div class="item">
        <img src="assets/images/berlinmarathon.jpg" alt="" >
      </div>
    
      <div class="item">
        <img src="assets/images/bookfair.jpg" alt="" >
      </div>

      <div class="item">
        <img src="assets/images/Fasching.jpg" alt="" >
      </div>
	  
      <div class="item">
        <img src="assets/images/oktoberfest.jpg" alt="" >
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
	</div>
	<!-- /.carousel -->


      <!-- START THE FEATURETTES -->
<div class = "foodcontent">
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Oktoberfest</h2>
          <p class="lead">Experience the traditional autumn festival that is held
		  every October in Munich, Germany widely known for the festive beer-making/drinking
		  and merry making. The festival begins late-September/early-October and lasts for 16 days.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="assets/images/oktoberfestsmall.jpg" alt="oktoberfestsmall">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Berlin Film Festival</h2>
          <p class="lead">The Berlin Film Festival is one of the worlds leading film festivals and media
		  event. The event consists of five-hundred thousand people in admission. During the film festival
		  up to four hundred films are displayed, where twenty of those films compete for the the Gold and Silver Bear Awards.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="assets/images/berlinfilmsmall.jpg" alt="berlinfilmsmall">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Berlin Marathon</h2>
          <p class="lead">The Berlin Marathon is held in the city of Berlin. The marathon has a distance of 42.195 kilometers
		  or about 26 miles. The event usually takes place around the last weekend of September.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="assets/images/berlinmarathonsmall.jpg" alt="berlinmarathonsmall">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Frankfurt Book Fair</h2>
          <p class="lead">The Frankfurt Book Fair is the worlds largest trade fair for books. The event is normally held
		  around mid-October every ear at the Frankfurt Trade Fair grounds in Frankfurt, Germany. It should be noted that the event takes
		  place over the course of five days. The first three days are exclusively for trade visitors, who are interested 
		  in the trade or purchase of unique/rare books. The final two days of the event are open to
		  the general public.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="assets/images/bookfairsmall.jpg" alt="bookfairsmall">
        </div>
      </div>
	  <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"><span>Fasching</span></h2>
          <p class="lead">Fasching is a Carnival event that is celebrated among many German 
		  speaking countries such as Germany, Switzerland and Austria. The festival is commonly known 
		  as the fifth season. The season begins every year on November 11, at 11:11 AM, and finishes on Ash
		  Wednesday. Festivities and parties can begin as early as January; however, the actual 
		  carnival week begins on Thursday before Ash Wednesday.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="assets/images/Faschingsmall.jpg" alt="Faschingsmall">
        </div>
      </div>
	  <hr class="featurette-divider">
<!-- /END THE FEATURETTES -->
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
