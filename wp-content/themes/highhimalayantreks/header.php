<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package highhimalayantreks
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" media="screen">	
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/animate.css" media="screen">
<!-- REVOLUTION BANNER CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/settings.css" media="screen" />

<link type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css" media="screen"  rel="stylesheet" />
<link type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css" media="screen"  rel="stylesheet" />
<link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" media="screen"  rel="stylesheet" />
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/main.css" media="screen">

</head>

<body <?php body_class(); ?>>

<?php 
$number_of_years = ot_get_option('number'); 
$years_of_experience = ot_get_option('years_of_experience'); 
?>
	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
		<header class="clearfix">
			<!-- Static navbar -->
			<div class="navbar navbar-default navbar-fixed-top">			
				<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-5">
						<a href="<?php echo site_url(); ?>" class="mainLogo"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/logo.png"></a>
						<div class="navbar-header pull-right">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							
						</div>
					</div>
					<div class="col-sm-12 col-md-7">
					<div class="flexCol">
						<div class="experience">
						    <span>Over</span>
						<span><?php  echo $number_of_years; ?></span><span><?php  echo $years_of_experience; ?></span>
						</div>
						<div class="top_section">
							<?php dynamic_sidebar( 'header-menu' ); ?>
								
						</div>   
					</div>
					</div>
					
					<div class="navbar-collapse collapse">
                    <?php 
								$top_menu = array(
									'menu'            => 'Top Menu',
									'container'       => '',
									'container_class' => '',
									'container_id'    => '',
									'menu_class'      => 'top-menu',
									'menu_id'         => '',
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'before'          => '',
									'after'           => '',
									'link_before'     => '',
									'link_after'      => '',
									'items_wrap'      => '<ul id="navigate" class="nav navbar-nav navbar-right list-menu">%3$s</ul>',
									'depth'           => 0,
									'walker'          => new UL_Class_Walker()
								);
								wp_nav_menu( $top_menu );
								?>
					</div>
				</div>
			</div>
		</header>
		<!-- End Header -->
		