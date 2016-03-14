  <!DOCTYPE html>
  <html <?php language_attributes(); ?>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="imagens/favicon.ico" />

    <title><?php wp_title('|', 'true', 'right'); ?> <?php bloginfo('name'); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.css" rel="stylesheet">

    <link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css"  media="all" />

    <!-- CSS -->
    <link href="<?php bloginfo('stylesheet_url');?>" type="text/css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
          <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
              <![endif]-->
              <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />
              <?php wp_enqueue_script(‘jquery’); ?>
              <?php wp_head(); ?>

            </head>

            <body>
            <div class="slider"  id="top">               
                  <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">        
                    <div data-src="<?php echo esc_url(get_template_directory_uri()); ?>/imagens/slide1.jpg">
                      <div class="camera_caption fadeIn">
                        EXCELÊNCIA NO ATENDIMENTO
                      </div>
                    </div> 
                    <div data-src="<?php echo esc_url(get_template_directory_uri()); ?>/imagens/slider41_p(4).jpg">
                      <div class="camera_caption fadeIn">
                        MOVENDO A INDÚSTRIA
                      </div>                                                      
                    </div>
                    <div data-src="<?php echo esc_url(get_template_directory_uri()); ?>/imagens/slider41_p(2).jpg">
                      <div class="camera_caption fadeIn">
                        AGILIDADE NA ENTREGA
                      </div>                                                      
                    </div>
                    <div data-src="<?php echo esc_url(get_template_directory_uri()); ?>/imagens/2.png">
                      <div class="camera_caption fadeIn">
                        EFICIÊNCIA NA PRODUÇÃO
                      </div>                                                    
                    </div>
                  </div>
                  <div class="clear"> </div>                
                </div>
              <div id="top"></div>

              <div class="container">
               <div id="header">
                <!-- start-image-slider -->
                
                <!-- End-image-slider -->
                <div class="clear"> </div>
                <!-- End-imageslider -->
                <!-- --start-top-header--- -->
              </div>
              <div class="logo">
               <a href="index.php"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/imagens/logoSN.png" alt="Grupo SN" title="Grupo SN"></a>
             </div>
            </div>
            <div class="container">
             <nav class="navbar navbar-default" role="navigation">
              <div class="container-menu">
              <div class="row6">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>
                    <div class="menu-main-nav-container">
                      <ul class="nav-menu" id="menu-main-nav">
                        <?php
                        wp_nav_menu( array(
                          'menu'              => 'Menu Principal',
                          'theme_location'    => 'Menu Principal',
                          'depth'             => 2,
                          'container'         => 'div',
                          'container_class'   => 'collapse navbar-collapse',
                          'container_id'      => 'bs-example-navbar-collapse-1',
                          'menu_class'        => 'nav navbar-nav',
                          'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                          'walker'            => new wp_bootstrap_navwalker())
                        );
                        ?>
                      </ul>
                    </div>
                  </div>
                </div>
              </div><!-- /.container-fluid -->
            </nav>