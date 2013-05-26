<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home - Home Page | monsterweb</title>
  <meta charset="utf-8">
  <div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/all.js#xfbml=1&appId=605601616134280";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


  	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
</script>

<script>
function initialize()
{
var mapProp = {
  center:new google.maps.LatLng(-6.5897222,106.7913889),
  zoom:8,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
var map=new google.maps.Map(document.getElementById("googleMap")
  ,mapProp);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
   <link rel="stylesheet" href="<?php echo base_url(); ?>sources/css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="<?php echo base_url(); ?>sources/css/style.css" type="text/css" media="all">
  <script type="text/javascript" src="<?php echo base_url(); ?>sources/js/jquery-1.4.2.min.js" ></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>sources/js/cufon-yui.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>sources/js/Humanst521_BT_400.font.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>sources/js/Humanst521_Lt_BT_400.font.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>sources/js/cufon-replace.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>sources/js/roundabout.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>sources/js/roundabout_shapes.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>sources/js/gallery_init.js"></script>
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  <script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
  <script type="text/javascript" src="js/cufon-yui.js"></script>
  <script type="text/javascript" src="js/Humanst521_BT_400.font.js"></script>
  <script type="text/javascript" src="js/Humanst521_Lt_BT_400.font.js"></script>
<script type="text/javascript" src="js/roundabout.js"></script>
  <script type="text/javascript" src="js/roundabout_shapes.js"></script>
  <script type="text/javascript" src="js/gallery_init.js"></script>
  <script type="text/javascript" src="js/cufon-replace.js"></script>
  <!--[if lt IE 7]>
  	<link rel="stylesheet" href="css/ie/ie6.css" type="text/css" media="all">
  <![endif]-->
  <!--[if lt IE 9]>
  	<script type="text/javascript" src="js/html5.js"></script>
    <script type="text/javascript" src="js/IE9.js"></script>
  <![endif]--> 

  
  
</head>

<body>
  <!-- header -->
  <header>
    <div class="container">
    	<h1><a href="<?php echo base_url(); ?>index.php/site/index.php">Design Burnquist</a></h1>
      <nav>
        <ul>
          <li><a href="<?php echo base_url(); ?>index.php/site/index" class="current">Home</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/site/about">About</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/site/privacy">Privacy</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/site/gallery">Gallery</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/site/contacts">Contact</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/site/sitemap">Sitemap</a></li>
        </ul>
      </nav>
    </div>
	</header>
  <!-- #gallery -->
  <section id="gallery">
  	<div class="container">
    	<ul id="myRoundabout">
      	<li><img src="<?php echo base_url(); ?>sources/images/slide3.jpg" alt=""></li>
        <li><img src="<?php echo base_url(); ?>sources/images/slide2.jpg" alt=""></li>
        <li><img src="<?php echo base_url(); ?>sources/images/slide5.jpg" alt=""></li>
        <li><img src="<?php echo base_url(); ?>sources/images/slide1.jpg" alt=""></li>
        <li><img src="<?php echo base_url(); ?>sources/images/slide4.jpg" alt=""></li>
      </ul>
  	</div>
  </section>
  <!-- /#gallery -->
  <div class="main-box">
    <div class="container">
      <div class="inside">
        <div class="wrapper">
        	<!-- aside -->
          <aside>
            <h2>Welcome <span>to Jargon Site</span></h2>
			
			  <p>Jargon is:</p>
			  <p>The free encyclopedia Pending changes shown on page being not Examined Jargon is a specific term used in the field of life (environment) specific. Jargon usually not understood by people from other areas of life. Suppose "computer jargon" means the terms specifically related to computers and only understood by people associated with the computer field.</p>
			  <p> <a href=" " target=" http://id.wikipedia.org/wiki/Jargon" rel="nofollow">Indonesian From Wikipedia</a></p>
			  <p>This website is optimized for 1024X768 screen resolution. It is also HTML5 &amp; CSS3 valid.</p>
              <figure><a href="#"><img src="images/banner1.jpg" alt=""></a></figure>
          </aside>
        
          <div class="fb-like" data-href="http://bambang-priyatna.rhcloud.com" data-send="true" data-width="450" data-show-faces="true"></div>
        
                     <!-- content -->
          <section id="content">
            <article>
            	<h2>Recent <span>Maps Site</span></h2>
             <div id="googleMap" style="width:550px;height:300px;"></div>
              </article> 
			</br>
          </section>
       </div>
      </div>
    </div>
  </div>
  <!-- footer -->
  <footer>
    <div class="container">
    	<div class="wrapper">
        <div class="fleft">Copyright 2013- Burnquist73</div>
        <div class="fright">Website template designed by <a href=" " target="_blank" rel="nofollow">www.burnquist73.com</a></div>
      </div>
    </div>
  </footer>
  <script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
