<body>

  <!-- Full Body Container -->
  <div id="container">


    <!-- Start Header Section -->
    <div class="hidden-header"></div>
    <header class="clearfix">

      <!-- Start Top Bar -->
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <!-- Start Contact Info -->
              <ul class="contact-details">
                <li><a href="#"><i class="fa fa-map-marker"></i> La City IVANDRY BOX 001</a>
                </li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> contact@antanajewelers.com</a>
                </li>
                <li><a href="#"><i class="fa fa-phone"></i> +261 32 00 000 00</a>
                </li>
              </ul>
              <!-- End Contact Info -->
            </div>
            <!-- .col-md-6 -->
            <div class="col-md-5">
              <!-- Start Social Links -->
              <ul class="social-list">
                <li>
                  <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a class="google itl-tooltip" data-placement="bottom" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a>
                </li>
                <li>
                  <a class="dribbble itl-tooltip" data-placement="bottom" title="Dribble" href="#"><i class="fa fa-dribbble"></i></a>
                </li>
                <li>
                  <a class="linkdin itl-tooltip" data-placement="bottom" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                  <a class="flickr itl-tooltip" data-placement="bottom" title="Flickr" href="#"><i class="fa fa-flickr"></i></a>
                </li>
                <li>
                  <a class="tumblr itl-tooltip" data-placement="bottom" title="Tumblr" href="#"><i class="fa fa-tumblr"></i></a>
                </li>
                <li>
                  <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                  <a class="vimeo itl-tooltip" data-placement="bottom" title="vimeo" href="#"><i class="fa fa-vimeo-square"></i></a>
                </li>
                <li>
                  <a class="skype itl-tooltip" data-placement="bottom" title="Skype" href="#"><i class="fa fa-skype"></i></a>
                </li>
              </ul>
              <!-- End Social Links -->
            </div>
            <!-- .col-md-6 -->
          </div>
          <!-- .row -->
        </div>
        <!-- .container -->
      </div>
      <!-- .top-bar -->
      <!-- End Top Bar -->


      <!-- Start  Logo & Naviagtion  -->
      <div class="navbar navbar-default navbar-top">
        <div class="container">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand" href="<?php echo base_url(); ?>">
              <img alt="" src="<?php echo base_url(); ?>assets/images/logo.jpg">
            </a>
          </div>
          <div class="navbar-collapse collapse">
            <!-- Stat Search -->
            <div class="search-side">
              <a class="show-search"><i class="fa fa-search"></i></a>
              <div class="search-form">
                <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                  <input type="text" value="" name="s" id="s" placeholder="Search the site...">
                </form>
              </div>
            </div>
            <!-- End Search -->
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a class="active" href="<?php echo base_url(); ?>">Acceuil</a>
              </li>
              <?php foreach ($categories as $c) {

                echo '<li><a href="#">'.$c->name.'</a><ul class="dropdown">';
                foreach ($sub_categories as $sc){
                  if ($c->id == $sc->category_id) {
              ?>
                  <li><a href="<?php echo base_url(); ?>section/<?php echo $c->id.'/'.$sc->id;?>"><?php echo $sc->name; ?></a>
                  </li>
              <?php
                  }
                }
                echo '</ul></li>';
              } 
              ?>
              
              <li><a href="<?php echo base_url(); ?>contact">Contact</a>
              </li>
            </ul>
            <!-- End Navigation List -->
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
          <li>
            <a class="active" href="<?php echo base_url(); ?>">Acceuil</a>
          </li>
          <?php foreach ($categories as $c) {

            echo '<li><a href="#">'.$c->name.'</a><ul class="dropdown">';
            foreach ($sub_categories as $sc){
              if ($c->id == $sc->category_id) {
          ?>
              <li><a href="<?php echo base_url(); ?>section/<?php echo $c->id.'/'.$sc->id;?>"><?php echo $sc->name; ?></a>
              </li>
          <?php
              }
            }
            echo '</ul></li>';
          } 
          ?>
          
          <li><a href="<?php echo base_url(); ?>contact">Contact</a>
          </li>
        </ul>
        <!-- Mobile Menu End -->

      </div>
      <!-- End Header Logo & Naviagtion -->

    </header>
    <!-- End Header Section -->