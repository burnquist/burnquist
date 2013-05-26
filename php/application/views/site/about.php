<!DOCTYPE html>
<html lang="en">
<head>
  <title>About - About Page | monsterweb</title>
  <meta charset="utf-8">
   
   <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/all.js#xfbml=1&appId=605601616134280";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
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
            <h2>About <span>Your Website</span></h2>
            	<ul class="news">
			<?php
					echo "<li>";
				$no=0;
				foreach ($hslquery->result() as $row)
				{
				$no++;
			
			echo "<li>";
			echo "</br>";
			echo "<figure><strong>";echo $row->id;echo "</strong></figure>";
			echo "<h3><a href='#'>";echo $row->tgl_news;echo"&nbsp";echo $row->title; echo "</a></h3>";
			echo $row->komentar;echo"&nbsp;<a href='#'>...</a>"; 	

				}
			echo "</li>";
			echo "</br>";
			?>

			</ul>
            <div class="img-box">
           
          </aside>
          
         <div id="fb-root"></div>

<div class="fb-like" data-href="http://bambang-priyatna.rhcloud.com/index.php/site/about" data-send="true" data-width="450" data-show-faces="true"></div>
          <!-- content -->
          <section id="content">
            <article>
            	<h2>About <span>Your Team</span></h2>
              <!-- .team-list -->
              <ul class="team-list">
              	<li>
                	<figure><img src="<?php echo base_url(); ?>sources/images/img2.jpg" alt=""></figure>
                  <h3><a href="#">Team Member One</a></h3>
                  He is the most important member of your team.its my robot number 1 <a href="#">...</a>
                </li>
                <li>
                	<figure><img src="<?php echo base_url(); ?>sources/images/img3.jpg" alt=""></figure>
                  <h3><a href="#">Another Team Member</a></h3>
                  its my robot number 2 <a href="#">...</a>
                </li>
                <li>
                	<figure><img src="<?php echo base_url(); ?>sources/images/img4.jpg" alt=""></figure>
                  <h3><a href="#">Owner Team Member</a></h3>
                  Identification </br>
				  Name : Bambang Priyatna S.kom </br>
				  Place/Date of birth : Jakarta, 21 Maret 1979 </br>
				  Hobby : Badminton, Reading and coolese
				  <a href="#">...</a>
                </li>
              </ul>
              <!-- /.team-list -->
            </article> 
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
