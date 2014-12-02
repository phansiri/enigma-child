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
      <div class="carousel-inner">

          <?php $wl_theme_options = weblizar_get_options();
            $ImageUrl1 = WL_TEMPLATE_DIR_URI ."/images/1.png";
            $ImageUrl2 = WL_TEMPLATE_DIR_URI ."/images/2.png";
            $ImageUrl3 = WL_TEMPLATE_DIR_URI ."/images/3.png";
            $ImageUrl4 = WL_TEMPLATE_DIR_URI ."/images/4.png"  ?>
            <div class="item active">
                <?php if($wl_theme_options['slide_image_1']!='') {  ?>
              <img src="<?php echo esc_url($wl_theme_options['slide_image_1']); ?>" class="img-responsive" alt="<?php echo esc_attr($wl_theme_options['slide_title_1']); ?>">
              <?php } else { ?>
              <img src="<?php echo esc_url($ImageUrl1); ?>" class="img-responsive" alt="First slide">
              <?php } ?>
              <div class="container">
                <div class="carousel-caption">
                <?php if($wl_theme_options['slide_title_1']!='') {  ?>
                <div class="carousel-text">
                <h1 class="animated bounceInLeft"><?php echo esc_attr($wl_theme_options['slide_title_1']); ?></h1>
                </div>
                <?php } ?>
                </div>
              </div>
            </div>
            <div class="item">
                <?php if($wl_theme_options['slide_image_2']!='') {  ?>
              <img src="<?php echo esc_url($wl_theme_options['slide_image_2']); ?>" class="img-responsive" alt="<?php echo esc_attr($wl_theme_options['slide_title_2']); ?>">
              <?php } else { ?>
              <img src="<?php echo esc_url($ImageUrl2); ?>" class="img-responsive" alt="Second slide">
              <?php } ?>
              <div class="container">
                <div class="carousel-caption">
                <?php if($wl_theme_options['slide_title_2']!='') {  ?>
                <div class="carousel-text">
                  <h1 class="animated bounceInLeft"><?php echo esc_attr($wl_theme_options['slide_title_2']); ?></h1>
                </div>
                <?php } ?>
                </div>
              </div>
            </div>
            <div class="item">
                <?php if($wl_theme_options['slide_image_3']!='') {  ?>
              <img src="<?php echo esc_url($wl_theme_options['slide_image_3']); ?>" class="img-responsive" alt="<?php echo esc_attr($wl_theme_options['slide_title_3']); ?>">
              <?php } else { ?>
              <img src="<?php echo esc_url($ImageUrl3); ?>" class="img-responsive" alt="Third slide">
              <?php } ?>
              <div class="container">
                <div class="carousel-caption">
                <?php if($wl_theme_options['slide_title_3']!='') {  ?>
                <div class="carousel-text">
                  <h1 class="animated bounceInLeft"><?php echo esc_attr($wl_theme_options['slide_title_3']); ?></h1>
                </div>
                <?php } ?>
                </div>
              </div>
            </div>
            <div class="item">
                <?php if($wl_theme_options['slide_image_4']!='') {  ?>
              <img src="<?php echo esc_url($wl_theme_options['slide_image_4']); ?>" class="img-responsive" alt="<?php echo esc_attr($wl_theme_options['slide_title_4']); ?>">
              <?php } else { ?>
              <img src="<?php echo esc_url($ImageUrl4); ?>" class="img-responsive" alt="Third slide">
              <?php } ?>
              <div class="container">
                <div class="carousel-caption">
                <?php if($wl_theme_options['slide_title_4']!='') {  ?>
                <div class="carousel-text">
                  <h1 class="animated bounceInLeft"><?php echo esc_attr($wl_theme_options['slide_title_4']); ?></h1>
                </div>
                <?php } ?>
                </div>
              </div>
            </div>

      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	  <div class="enigma_slider_shadow"></div>
    </div><!-- /.carousel -->