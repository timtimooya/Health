<?php include('headerhealth.php')?>
<?php include('navbarhealth.php')?>

<br><br>
<link rel="stylesheet" type="text/css" href="styles.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- FlexSlider -->
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" charset="utf-8">
    var $ = jQuery.noConflict();
    $(window).load(function() {
    $('.flexslider').flexslider({
          animation: "fade"
    });
	
	$(function() {
		$('.show_menu').click(function(){
				$('.menu').fadeIn();
				$('.show_menu').fadeOut();
				$('.hide_menu').fadeIn();
		});
		$('.hide_menu').click(function(){
				$('.menu').fadeOut();
				$('.show_menu').fadeIn();
				$('.hide_menu').fadeOut();
		});
	});
  });
</script>

<div>
   
   <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/child.jpg" width="1000px" height="600px" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="img/elephant.jpg" width="1000px" height="600px" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="img/portrait.jpg" width="1000px" height="600px" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
   
   
   
   
   
   <div>
   
   
   
   
   <footer>
<div class="container-fluid padding">
     <div class="row text-center">
       <div class="col-md-4">
	   
	   <hr class="light">
	   <p>555-555-555</p>
	   <p>ti@outlook.com</p>
	   <p>1759</p>
	   <p>20200 kericho</p>
       </div>
	   
	   <div class="col-md-4">
	     <hr class="light">
	     <h5>hospital working hours</h5>
	     <hr class="light">
	     <p>monday:9am-5pm</p>
	     <p>tuesday:9am-5pm</p>
	     <p>wednesday:9am-5pm</p>
	     <p>thursday:9am-5pm</p>
	   </div>
	   
	    <div class="col-md-4">
	     <hr class="light">
	     <h5>service area</h5>
	     <hr class="light">
	     <p>available in all counties</p>
	     <
	   </div>
	   <div class="col-12">
	   <hr class="light">
	   <h5>&copy; timothy.com</h5>
	   </div>
     </div>
   
   
   </div>

   </footer>
   </div>