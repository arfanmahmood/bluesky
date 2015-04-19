<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>

    <!-- Bootstrap -->
    <link href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet" media="screen"> 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  <?php
      /* We add some JavaScript to pages with the comment form
       * to support sites with threaded comments (when in use).
       */
      if ( is_singular() && get_option( 'thread_comments' ) )
          wp_enqueue_script( 'comment-reply' );
  
      /* Always have wp_head() just before the closing </head>
       * tag of your theme, or you will break many plugins, which
       * generally use this hook to add elements to <head> such
       * as styles, scripts, and meta tags.
       */
      wp_head();
  ?>    
    
  </head>
  <body>
  
  <div class="template-container">
  
    <div class="container-fluid">
    
      <!-- Top Navigation Code -->
      <div class="topnav row" id="home">
      
      	<!-- Logo -->
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 logo">
          <a href="<?php echo home_url(); ?>#home"><img src="<?php bloginfo( 'template_url' ); ?>/img/logo.png" width="125" height="30" alt="" border="0"></a>
        </div>
		
        <!-- Navigation Links -->
        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 navigation">
        
          <div class="navbar navbar-default navbar-right" role="navigation">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              <div class="navbar-collapse collapse">
                <?php wp_nav_menu( array('menu' => 'Top Navigation', 'container' => false, 'menu_class' => 'nav navbar-nav' )); ?>
              </div><!--/.nav-collapse -->
          </div>
        
        </div>
        <!-- End of Navigation Links -->
      
      </div>
      <!-- End of Top Navigation Code -->
