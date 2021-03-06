<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact us - Contacts Page | monsterweb</title>
  <meta charset="utf-8">
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
            <h2>Our <span>Contacts</span></h2>
            <!-- .contacts -->
            <ul class="contacts">
            	<li><strong>Zip Code:</strong>14250</li>
              <li><strong>Country:</strong>Indonesia</li>
              <li><strong>City:</strong>Jakarta</li>
              <li><strong>Telephone 1:</strong>+021 </li>
              <li><strong>Fax:</strong>+021 </li>
              <li><strong>Email:</strong><a href="#">burnquist73@yahoo.com</a></li>
            </ul>
            <!-- /.contacts -->
            <h3>Miscellaneous info:</h3>
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.
          </aside>
          
          <div id="fb-root"></div>
		<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/all.js#xfbml=1&appId=605601616134280";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-like" data-href="http://bambang-priyatna.rhcloud.com/index.php/site/contacts" data-send="true" data-width="450" data-show-faces="true"></div>
          <!-- content -->
          <section id="content">
            <article>
            	<h2>Contact <span>Form</span></h2>
              <form id="contacts-form" action="" method="post">
                <fieldset>
                  <div class="field">
                    <label>Your Name:</label>
                    <input type="text" value=""/>
                  </div>
                  <div class="field">
                    <label>Your E-mail:</label>
                    <input type="email" value=""/>
                  </div>
                  <div class="field">
                    <label>Your Website:</label>
                    <input type="url" value=""/>
                  </div>
                  <div class="field">
                    <label>Your Message:</label>
                    <textarea></textarea>
                  </div>
                  <div><a href="#" onclick="document.getElementById('contacts-form').submit()">Send Your Message!</a></div>
                </fieldset>
              </form>
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
