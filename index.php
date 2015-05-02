<?php
 echo "mail not sent";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Deerfoot Bottle Depot is Calgary's number one recycling centre in the city.  We offer the best service and the most up to day technology to make your visit as pleasant as possible">
    <meta name="Bottle Depot" content="Deerfoot Bottle Depot Calgary">
    <link rel="icon" href="../../favicon.ico">

    <title>Deerfoot Bottle Depot | Contact</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Include Font-Awesome -->
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div id="nav-bar" class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html">Deerfoot Bottle Depot</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="bottle-drive.html">Bottle Drive</a></li>
                <li class="active"><a href="contact.html">Contact</a></li>
              </ul>
                <div class="social-media">
                  <!-- Facebook -->
                  <a href="https://www.facebook.com/pages/Deerfoot-Bottle-Depot/106746249418966" target="_blank"><img src="images/facebook.png" alt="Facebook" /></a>
                   
                  <!-- Twitter -->
                  <a href="https://twitter.com/deerfootdepot" target="_blank"><img src="images/twitter.png" alt="Twitter" /></a>
                   
                  <!-- Google+ -->
                  <a href="https://plus.google.com/117804188496632083014/about" target="_blank"><img src="images/google.png" alt="Google" /></a>
                </div>
            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Background Image Where Carousel used to be
    ================================================== -->
	 <div class="container"> 
     <div class="background">
	     <img src="images/test3.jpg" alt="Deerfoot Bottle Depot">
     </div>
   </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->


    <div class="container marketing">


      <!-- START THE FEATURETTES -->

      <div class="row featurette">
        <div class="col-sm-6 contact-form">
          <h2 class="contaxt">Book Your Bottle Drive</h2>
          <?php echo $result; ?>
          <form method="post">

            <div class="form-group">
            <label for="name">Your Name:</label>
            <input type="text" name="name" class="form-control" placeholder="Your Name" />
            </div>

             <div class="form-group">
            <label for="email">Your E-Mail:</label>
            <input type="email" name="email" class="form-control" placeholder="Your E-Mail" />
            </div>

             <div class="form-group">
            <label for="phone">Your Phone Number:</label>
            <input type="phone" name="phone" class="form-control" placeholder="(xxx) xxx-xxxx" />
            </div>

            <div class="form-group">
            <label for="date">Date of Bottle Drive:</label>
            <input type="date" name="date" class="form-control" />
            </div>

             <div class="form-group">
            <label for="comment">Any Additional Comments:</label>
            <textarea class="form-control" name="comment"></textarea> 
            </div>

            <input type="submit" name="submit" class="btn btn-lg btn-primary" value="Submit" />
            

          </form>
        </div><!-- Row Featurette end -->
        <div class="col-sm-6">
          <p>your text here</p>
        </div>
      </div>

	     
      <hr class="bottle-drive-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <div class="row">
          <div class="col-sm-2">
            <p class="copyright">&copy; 2015 Deerfoot Bottle Depot</p>
          </div>
          <div class="col-sm-8">
            <p class="center">11440 29 St SE, 114th Ave and 29th St SE | 403-203-0666 | <a href="mailto:contact@deerfootbottledepot.com"> contact@deerfootbottledepot.com</a></p>
            <p class="center"><strong>Hours:</strong> Mon-Sat: 9:00 AM - 5:30 PM | Sun: 10:00 AM - 4:00 PM | Holidays: 10:00 AM - 4:00 PM</p>
          </div>
          <div class="col-sm-2 social-media">
            
          </div>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

