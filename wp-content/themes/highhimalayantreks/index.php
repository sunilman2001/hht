<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package highhimalayantreks
 */

get_header(); ?>
<!-- slider 
			================================================== -->
		<div id="slider" class="slider1">
			<div class="tp-banner-container">
				<div class="tp-banner" >
					<ul class="slides">	<!-- SLIDE  -->
						<li data-transition="fade" data-slotamount="7" data-masterspeed="500" >
							<!-- MAIN IMAGE -->
                            <?php $slider_1_image = ot_get_option('slider_1_image'); ?>
							<img src="<?php if(($slider_1_image)){ ?>
								<?php  echo ot_get_option('slider_1_image'); ?>
							<?php } ?>" class="imgAdjust"  alt="slidebg1"  >
							<!-- LAYERS -->

							<!-- LAYER NR. 1 -->
							<div class="tp-caption large_bold_white skewfromrightshort customout"
								data-x="250"
								data-y="174"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="500"
								data-start="1200"
								data-easing="Back.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								data-captionhidden="on"
								style="z-index: 4"><?php $slider_1_heading = ot_get_option('slider_1_heading'); if(($slider_1_heading)){ ?>
									<?php  echo $slider_1_heading; ?>
								<?php } ?>
							</div>
							
							<!-- LAYER NR. 2 -->
							<div class="tp-caption medium_thin_white customin ltl"
								data-x="250"
								data-y="250"
								data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="1000"
								data-start="1500"
								data-easing="Back.easeInOut"
								data-endspeed="400"
								data-endeasing="Back.easeIn"
								style="z-index: 14"><?php $slider_1_description = ot_get_option('slider_1_description'); if(($slider_1_description)){ ?>
									<?php  echo $slider_1_description; ?>
								<?php } ?>
							</div>
							
							<!-- LAYER NR. 3 -->
							<div class="tp-caption medium_thin_white customin ltl"
								data-x="250"
								data-y="300"
								data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="1000"
								data-start="2000"
								data-easing="Back.easeInOut"
								data-endspeed="400"
								data-endeasing="Back.easeIn"
								style="z-index: 14"><a class="button-large" href="<?php $slider_1_link = ot_get_option('slider_1_link') ; if(($slider_1_link)){ ?>
									<?php  echo $slider_1_link; ?>
								<?php } ?>">view more</a>
							</div>
						</li>
						<!-- SLIDE  -->
						<li data-transition="fade" data-slotamount="7" data-masterspeed="1000" >
							<!-- MAIN IMAGE -->
							<img src="<?php $slider_2_image = ot_get_option('slider_2_image'); ?>
							<?php if(($slider_2_image)){ ?>
								<?php  echo $slider_2_image; ?>
							<?php } ?>
							"  alt=""  class="imgAdjust">
							<!-- LAYERS -->
							<!-- LAYER NR. 1 -->
							<div class="tp-caption large_bold_white skewfromrightshort customout"
								data-x="250"
								data-y="174"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="500"
								data-start="1200"
								data-easing="Back.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								data-captionhidden="on"
								style="z-index: 4"><?php $slider_2_heading = ot_get_option('slider_2_heading'); if(($slider_2_heading)){ ?>
									<?php  echo $slider_2_heading; ?>
								<?php } ?>
							</div>
							
							<!-- LAYER NR. 2 -->
							<div class="tp-caption medium_thin_white customin ltl"
								data-x="250"
								data-y="240"
								data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="1000"
								data-start="1500"
								data-easing="Back.easeInOut"
								data-endspeed="400"
								data-endeasing="Back.easeIn"
								style="z-index: 14"><?php $slider_2_description = ot_get_option('slider_2_description'); if(($slider_2_description)){ ?>
									<?php  echo $slider_2_description; ?>
								<?php } ?>
							</div>
							
							<!-- LAYER NR. 3 -->
							<div class="tp-caption medium_thin_white customin ltl"
								data-x="250"
								data-y="300"
								data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="1000"
								data-start="2000"
								data-easing="Back.easeInOut"
								data-endspeed="400"
								data-endeasing="Back.easeIn"
								style="z-index: 14"><a class="button-large" href="<?php $slider_2_link = ot_get_option('slider_2_link') ; if(($slider_2_link)){ ?>
									<?php  echo $slider_2_link; ?>
								<?php } ?>">view more</a>
							</div>
						</li>
						<!-- SLIDE  -->
						<li data-transition="fade" data-slotamount="7" data-masterspeed="600" >
							<!-- MAIN IMAGE -->
							<img src="<?php $slider_3_image = ot_get_option('slider_3_image'); ?>
							<?php if(($slider_3_image)){ ?>
								<?php  echo $slider_3_image; ?>
							<?php } ?>"  alt=""  class="imgAdjust">
							<!-- LAYERS -->
							<!-- LAYER NR. 1 -->
							<div class="tp-caption large_bold_white skewfromrightshort customout"
								data-x="250"
								data-y="174"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="500"
								data-start="1200"
								data-easing="Back.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								data-captionhidden="on"
								style="z-index: 4"><?php $slider_3_heading = ot_get_option('slider_3_heading'); if(($slider_3_heading)){ ?>
									<?php  echo $slider_3_heading; ?>
								<?php } ?>
							</div>
							
							<!-- LAYER NR. 2 -->
							<div class="tp-caption medium_thin_white customin ltl"
								data-x="250"
								data-y="240"
								data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="1000"
								data-start="1500"
								data-easing="Back.easeInOut"
								data-endspeed="400"
								data-endeasing="Back.easeIn"
								style="z-index: 14"><?php $slider_3_description = ot_get_option('slider_3_description'); if(($slider_3_description)){ ?>
									<?php  echo $slider_3_description; ?>
								<?php } ?>
							</div>
							
							<!-- LAYER NR. 3 -->
							<div class="tp-caption medium_thin_white customin ltl"
								data-x="250"
								data-y="300"
								data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="1000"
								data-start="1800"
								data-easing="Back.easeInOut"
								data-endspeed="400"
								data-endeasing="Back.easeIn"
								style="z-index: 14"><a class="button-large" href="<?php $slider_3_link = ot_get_option('slider_3_link') ; if(($slider_3_link)){ ?>
									<?php  echo $slider_3_link; ?>
								<?php } ?>">view more</a>
							</div>

							
						</li>
						<!-- SLIDE  -->
						<li data-transition="fade" data-slotamount="7" data-masterspeed="800" >
							<!-- MAIN IMAGE -->
							<img src="<?php $slider_4_image = ot_get_option('slider_4_image'); ?>
							<?php if(($slider_4_image)){ ?>
								<?php  echo $slider_4_image; ?>
							<?php } ?>"  class="imgAdjust" alt="">
							<!-- LAYERS -->

							

							<!-- LAYER NR. 2 -->
							<div class="tp-caption large_bold_white skewfromrightshort customout"
								data-x="250"
								data-y="174"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="500"
								data-start="1800"
								data-easing="Back.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								data-captionhidden="on"
								style="z-index: 4"><?php $slider_4_heading = ot_get_option('slider_4_heading'); if(($slider_4_heading)){ ?>
									<?php  echo $slider_4_heading; ?>
								<?php } ?>
							</div>
							
							<!-- LAYER NR. 3 -->
							<div class="tp-caption medium_thin_white customin ltl"
								data-x="250"
								data-y="240"
								data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="1000"
								data-start="2100"
								data-easing="Back.easeInOut"
								data-endspeed="400"
								data-endeasing="Back.easeIn"
								style="z-index: 14"><?php $slider_4_description = ot_get_option('slider_4_description'); if(($slider_4_description)){ ?>
									<?php  echo $slider_4_description; ?>
								<?php } ?>
							</div>
							
							<!-- LAYER NR. 4 -->
							<div class="tp-caption medium_thin_white customin ltl"
								data-x="250"
								data-y="300"
								data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="1000"
								data-start="2500"
								data-easing="Back.easeInOut"
								data-endspeed="400"
								data-endeasing="Back.easeIn"
								style="z-index: 14"><a class="button-large" href="<?php $slider_4_link = ot_get_option('slider_4_link') ; if(($slider_4_link)){ ?>
									<?php  echo $slider_4_link; ?>
								<?php } ?>">view more</a>
							</div>
						</li>
					</ul>
					<div class="tp-bannertimer"></div>
				</div>
			</div>
			<!-- <div class="banner-thumbs">
				<div class="container triggerAnimation animated" data-animate="slideInUp">
					
					<ul class="slider-thumbnails">
						<li class="active">
							<a href="#" class="btn slide-thumbs" id="slidethumb1" data-slide="1">
								<span>1</span>
								<h2><?php if((ot_get_option('slider_1_tab_name'))){ ?>
									<?php  echo ot_get_option('slider_1_tab_name'); ?>
								<?php } ?></h2>
								<p><?php if((ot_get_option('slider_1_tab_description'))){ ?>
									<?php  echo ot_get_option('slider_1_tab_description'); ?>
								<?php } ?></p>
							</a>
						</li>
						<li>
							<a href="#" class="btn slide-thumbs" id="slidethumb2" data-slide="2">
								<span>2</span>
								<h2><?php if((ot_get_option('slider_2_tab_name'))){ ?>
									<?php  echo ot_get_option('slider_2_tab_name'); ?>
								<?php } ?></h2>
								<p><?php if((ot_get_option('slider_2_tab_description'))){ ?>
									<?php  echo ot_get_option('slider_2_tab_description'); ?>
								<?php } ?></p>
							</a>
						</li>
						<li>
							<a href="#" class="btn slide-thumbs" id="slidethumb3" data-slide="3">
								<span>3</span>
								<h2><?php if((ot_get_option('slider_3_tab_name'))){ ?>
									<?php  echo ot_get_option('slider_3_tab_name'); ?>
								<?php } ?></h2>
								<p><?php if((ot_get_option('slider_3_tab_description'))){ ?>
									<?php  echo ot_get_option('slider_3_tab_description'); ?>
								<?php } ?></p>
							</a>
						</li>
						<li>
							<a href="#" class="btn slide-thumbs" id="slidethumb4" data-slide="4">
								<span>4</span>
								<h2><?php if((ot_get_option('slider_4_tab_name'))){ ?>
									<?php  echo ot_get_option('slider_4_tab_name'); ?>
								<?php } ?></h2>
								<p><?php if((ot_get_option('slider_4_tab_description'))){ ?>
									<?php  echo ot_get_option('slider_4_tab_description'); ?>
								<?php } ?></p>
							</a>
						</li>
					</ul>
					
				</div>
			</div> -->
		</div>
		<!-- End slider -->

		<!-- content 
			================================================== -->
		<div id="content">
				<div class="title-section white">
					<div class="container" data-animate="fadeIn">
						<div class="col-md-1"><img src="<?php echo get_template_directory_uri(); ?>/images/mani_wheel.gif"></div>
						<div class="col-md-11">
							<h1><?php if((ot_get_option('welcome_title'))){ ?>
									<?php  echo ot_get_option('welcome_title'); ?>
								<?php } ?></h1>
							<br/>
							<p><?php if((ot_get_option('welcome_description'))){ ?>
								<?php  echo ot_get_option('welcome_description'); ?>
							<?php } ?></p>

						</div>
				</div>
				</div>

			<!-- sevices-section section
				================================================== -->
			<div class="section-content services-section ">
				<div class="title-section">
					<div class="container triggerAnimation animated" data-animate="fadeIn">
						<h1><?php if((ot_get_option('adventures_main_title'))){ ?>
									<?php  echo ot_get_option('adventures_main_title'); ?>
								<?php } ?></h1>
					</div>
				</div>
				
				<div class="services-box parallax" data-stellar-background-ratio="0">
					<div class="container">
						<div class="row">
							<div class="col-sm-4">
								<div class="services-post triggerAnimation animated" data-animate="flipInY">
									<div class="services-head">
										<a href="#" class="icon"><span class="trekkingIcon"></span></a>
										<h2><?php if((ot_get_option('trekking_title'))){ ?><?php  echo ot_get_option('trekking_title'); ?><?php } ?></h2>
										<span><?php if((ot_get_option('trekking_sub_title'))){ ?><?php  echo ot_get_option('trekking_sub_title'); ?><?php } ?></span>
									</div>
									<p><?php if((ot_get_option('trekking_description'))){ ?><?php  echo ot_get_option('trekking_description'); ?><?php } ?></p>
									<a href="<?php if((ot_get_option('trekking_link'))){ ?><?php  echo ot_get_option('trekking_link'); ?><?php } ?>" class="button-one">Read More</a>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="services-post triggerAnimation animated" data-animate="flipInY">
									<div class="services-head">
											<a href="#" class="icon"><span class="peakClimbingIcon"></span></a>
										<h2><?php if((ot_get_option('peak_climbing_title'))){ ?><?php  echo ot_get_option('peak_climbing_title'); ?><?php } ?></h2>
										<span><?php if((ot_get_option('peak_climbing_sub_title'))){ ?><?php  echo ot_get_option('peak_climbing_sub_title'); ?><?php } ?></span>
									</div>
									<p><?php if((ot_get_option('peak_climbing_description'))){ ?><?php  echo ot_get_option('peak_climbing_description'); ?><?php } ?></p>
									<a href="<?php if((ot_get_option('peak_climbing_link'))){ ?><?php  echo ot_get_option('peak_climbing_link'); ?><?php } ?>" class="button-one">Read More</a>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="services-post triggerAnimation animated" data-animate="flipInY">
									<div class="services-head">
										<a href="#" class="icon"><span class="mountainingIcon"></span></a>
										<h2><?php if((ot_get_option('mountaining_title'))){ ?><?php  echo ot_get_option('mountaining_title'); ?><?php } ?></h2>
										<span><?php if((ot_get_option('mountaining_sub_title'))){ ?><?php  echo ot_get_option('mountaining_sub_title'); ?><?php } ?></span>
									</div>
									<p><?php if((ot_get_option('mountaining_description'))){ ?><?php  echo ot_get_option('mountaining_description'); ?><?php } ?></p>
									<a href="<?php if((ot_get_option('mountaining_link'))){ ?><?php  echo ot_get_option('mountaining_link'); ?><?php } ?>" class="button-one">Read More</a>
								</div>
							</div>
						
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="services-post triggerAnimation animated" data-animate="flipInY">
									<div class="services-head">
										<a href="#" class="icon"><span class="tourIcon"></span></a>
										<h2><?php if((ot_get_option('nature_safari_title'))){ ?><?php  echo ot_get_option('nature_safari_title'); ?><?php } ?></h2>
										<span><?php if((ot_get_option('nature_safari_sub_title'))){ ?><?php  echo ot_get_option('nature_safari_sub_title'); ?><?php } ?></span>
									</div>
									<p><?php if((ot_get_option('nature_safari_description'))){ ?><?php  echo ot_get_option('nature_safari_description'); ?><?php } ?></p>
									<a href="<?php if((ot_get_option('nature_safari_link'))){ ?><?php  echo ot_get_option('nature_safari_link'); ?><?php } ?>" class="button-one">Read More</a>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="services-post triggerAnimation animated" data-animate="flipInY">
									<div class="services-head">
										<a href="#" class="icon"><span class="riverRaftingIcon"></span></a>
										<h2><?php if((ot_get_option('river_rafting_title'))){ ?><?php  echo ot_get_option('river_rafting_title'); ?><?php } ?></h2>
										<span><?php if((ot_get_option('river_rafting_sub_title'))){ ?><?php  echo ot_get_option('river_rafting_sub_title'); ?><?php } ?></span>
									</div>
									<p><?php if((ot_get_option('river_rafting_description'))){ ?><?php  echo ot_get_option('river_rafting_description'); ?><?php } ?></p>
									<a href="<?php if((ot_get_option('river_rafting_link'))){ ?><?php  echo ot_get_option('river_rafting_link'); ?><?php } ?>" class="button-one">Read More</a>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="services-post triggerAnimation animated" data-animate="flipInY">
									<div class="services-head">
										<a href="#" class="icon"><span class="paraglidingIcon"></span></a>
										<h2><?php if((ot_get_option('culture_and_heritage_title'))){ ?><?php  echo ot_get_option('culture_and_heritage_title'); ?><?php } ?></h2>
										<span><?php if((ot_get_option('culture_and_heritage_sub_title'))){ ?><?php  echo ot_get_option('culture_and_heritage_sub_title'); ?><?php } ?></span>
									</div>
									<p><?php if((ot_get_option('culture_and_heritage_description'))){ ?><?php  echo ot_get_option('culture_and_heritage_description'); ?><?php } ?></p>
									<a href="<?php if((ot_get_option('culture_and_heritage_link'))){ ?><?php  echo ot_get_option('culture_and_heritage_link'); ?><?php } ?>" class="button-one">Read More</a>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>

			<!-- portfolio-section 
				================================================== -->
			<div class="section-content portfolio-section">
				<div class="title-section">
					<div class="container triggerAnimation animated" data-animate="fadeIn">
						<h1><?php if((ot_get_option('exclusive_offers_title'))){ ?><?php  echo ot_get_option('exclusive_offers_title'); ?><?php } ?></h1>
						<p><?php if((ot_get_option('exclusive_offers_description'))){ ?><?php  echo ot_get_option('exclusive_offers_description'); ?><?php } ?></p>
					</div>
				</div>
				<div class="portfolio-box triggerAnimation animated" data-animate="fadeIn">
					<div id="owl-demo" class="owl-carousel owl-theme">
          
<?php 
			$exclusive_offers = new WP_Query(array(				
				'post_type'=>array('page'),
				'orderby'=>'post_date',
				'orderby'=>'menu_order',
				'order'=>'ASC',			
				'meta_key' => 'has_exclusive_offer',
				'meta_value' => true,								
				'posts_per_page' => 11		
			));
			
?>     			
 <?php if($exclusive_offers -> have_posts()){?>  
<?php  while ($exclusive_offers -> have_posts()) : $exclusive_offers -> the_post();  ?>
						<div class="item project-post">
							<div class="project-gal">
								<?php if ( has_post_thumbnail() ) { 
										echo the_post_thumbnail('large');
										} else {?>
											<img src="<?php echo get_template_directory_uri(); ?>/images/image-na-thumb.jpg" />
										<?php } ?> 
								<div class="hover-box">
									<a class="zoom" href="<?php the_post_thumbnail_url(); ?>"><i class="fa fa-search-plus"></i></a>
									<a class="link" href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
								</div>
							</div>
							<div class="project-content">
								<h2><?php the_title(); ?></h2>
								<div class="pricePro"><p><?php $package_price = get_field('package_price'); ?>
                                                        <?php if( !($package_price) ): ?>
                                                        <?php echo $package_price; ?>
                                                  <?php endif; ?></p></div>
							</div>
						</div>
 <?php endwhile; wp_reset_query();?>
<?php } else { ?>
<div class="no-posts">Content not available now.</div>
<?php } ?>

					 
					</div>
					<div class="buttons">
						<a class="owl-prev button-third" href="#"><i class="fa fa-angle-left"></i></a>
						<!-- <a class="button-third" href="#">View more</a> -->
						<a class="owl-next button-third" href="#"><i class="fa fa-angle-right"></i></a>
					</div>
				</div>
			</div>

			<!-- features-section 
				================================================== -->
			<div class="section-content features-section parallax" data-stellar-background-ratio="0">
				<div class="container">
					<div class="features-head triggerAnimation animated" data-animate="fadeIn">
					<div class="col-md-5 expertWrapper">
						<h1><?php if((ot_get_option('meet_experts_title'))){ ?><?php  echo ot_get_option('meet_experts_title'); ?><?php } ?></h1>
						<p><?php if((ot_get_option('meet_experts_description'))){ ?><?php  echo ot_get_option('meet_experts_description'); ?><?php } ?></p>


					</div>
					<div class="col-md-6"><?php if((ot_get_option('meet_experts_video'))){ ?><?php  echo ot_get_option('meet_experts_video'); ?><?php } ?></div>
						
												
					</div>
					
					
				</div>
			</div>

		
						<!-- client-section 
				================================================== -->
			<div class="section-content client-section">
				<div class="title-section">
					<div class="container triggerAnimation animated" data-animate="fadeIn">
						<h1><?php if((ot_get_option('mission_vision_title'))){ ?><?php  echo ot_get_option('mission_vision_title'); ?><?php } ?></h1>
						<?php if((ot_get_option('mission_vision_description'))){ ?><?php  echo ot_get_option('mission_vision_description'); ?><?php } ?>
					</div>
					</div>
				</div>
			
			</div>

			<!-- testimonials-section 
				================================================== -->
			<div class="section-content testimonials-section transparent-back">
				<div class="title-section test-style1">
					<div class="container">
						<h1><?php if((ot_get_option('testimonials_title'))){ ?><?php  echo ot_get_option('testimonials_title'); ?><?php } ?></h1>
						<div><?php if((ot_get_option('testimonials_description'))){ ?><?php  echo ot_get_option('testimonials_description'); ?><?php } ?></div>
					</div>
				</div>
				<div class="container">
					<ul class="bxslider">
						<li>
							<div class="row">
                            				<?php $testimonials_row1 = new WP_Query(array(
                                                    'post_type' => array('page'),
                                                    'post_parent' => 98,
                                                    'post_status' => 'publish',
													'posts_per_page' => 3,
                                                    'order'=>'DESC' 
                                                    ));?>
                                                <?php if($testimonials_row1 -> have_posts()){?>   
                                                <?php while($testimonials_row1->have_posts()): $testimonials_row1->the_post();?>
                                                <div class="col-sm-4">
                                                <div class="testimonial-post">
                                                
                                                    <img src="<?php 
													if ( has_post_thumbnail() ) { 
														the_post_thumbnail_url('medium');
													} 
													?>" alt="<?php the_title(); ?>">
                                                    
                                                    <h2><?php the_title(); ?></h2>
                                                    <?php the_content(); ?>
                                                </div>
                                            </div>	
                                                    
                                                <?php endwhile; wp_reset_query();?>
                                                <?php } else { ?>
                                                <div class="no-posts">Content not available now.</div>
                                           		<?php } ?>
                            
								
								
							</div>
						</li>
						<li>
							<div class="row">
								<?php $testimonials_row2 = new WP_Query(array(
                                                    'post_type' => array('page'),
                                                    'post_parent' => 98,
                                                    'post_status' => 'publish',
													'offset' => 3,
													'posts_per_page' => 3,
                                                    'order'=>'DESC' 
                                                    ));?>
                                                <?php if($testimonials_row2 -> have_posts()){?>   
                                                <?php while($testimonials_row2->have_posts()): $testimonials_row2->the_post();?>
                                                <div class="col-sm-4">
                                                <div class="testimonial-post">
                                                
                                                    <img src="<?php 
													if ( has_post_thumbnail() ) { 
														the_post_thumbnail_url('medium');
													} 
													?>" alt="<?php the_title(); ?>">
                                                    
                                                    <h2><?php the_title(); ?></h2>
                                                    <?php the_content(); ?>
                                                </div>
                                            </div>	
                                                    
                                                <?php endwhile; wp_reset_query();?>
                                                <?php } else { ?>
                                                <div class="no-posts">Content not available now.</div>
                                           		<?php } ?>
							</div>
						</li>
						<li>
							<div class="row">
								<?php $testimonials_row2 = new WP_Query(array(
                                                    'post_type' => array('page'),
                                                    'post_parent' => 98,
                                                    'post_status' => 'publish',
													'offset' => 6,
													'posts_per_page' => 3,
                                                    'order'=>'DESC' 
                                                    ));?>
                                                <?php if($testimonials_row2 -> have_posts()){?>   
                                                <?php while($testimonials_row2->have_posts()): $testimonials_row2->the_post();?>
                                                <div class="col-sm-4">
                                                <div class="testimonial-post">
                                                
                                                    <img src="<?php 
													if ( has_post_thumbnail() ) { 
														the_post_thumbnail_url('medium');
													} 
													?>" alt="<?php the_title(); ?>">
                                                    
                                                    <h2><?php the_title(); ?></h2>
                                                    <?php the_content(); ?>
                                                </div>
                                            </div>	
                                                    
                                                <?php endwhile; wp_reset_query();?>
                                                <?php } else { ?>
                                                <div class="no-posts">Content not available now.</div>
                                           		<?php } ?>
							</div>
						</li>
						
					</ul>
				</div>
			</div>

<!-- sevices-section section
				================================================== -->
			<div class="section-content services-section">
				<div class="title-section">
					<div class="container triggerAnimation animated" data-animate="fadeIn">
						<h1><?php if((ot_get_option('why_us_main_title'))){ ?><?php  echo ot_get_option('why_us_main_title'); ?><?php } ?></h1>
					</div>
				</div>
					<div class="services-box whyServices parallax" data-stellar-background-ratio="0">
					<div class="container">
						<div class="row">
							<div class="col-sm-4">
								<div class="services-post triggerAnimation animated whyWrap" data-animate="flipInY">
									<div class="services-head ">
										<h2><?php if((ot_get_option('why_us_1_title'))){ ?><?php  echo ot_get_option('why_us_1_title'); ?><?php } ?></h2>
										<span><?php if((ot_get_option('why_us_1_sub_title'))){ ?><?php  echo ot_get_option('why_us_1_sub_title'); ?><?php } ?></span>
									</div>
									<!-- <a href="<?php if((ot_get_option('why_us_1_link'))){ ?><?php  echo ot_get_option('why_us_1_link'); ?><?php } ?>" class="button-one">Read More</a> -->
								</div>
							</div>
							<div class="col-sm-4">
								<div class="services-post triggerAnimation animated whyWrap" data-animate="flipInY">
									<div class="services-head ">
										<h2><?php if((ot_get_option('why_us_2_title'))){ ?><?php  echo ot_get_option('why_us_2_title'); ?><?php } ?></h2>
										<span><?php if((ot_get_option('why_us_2_sub_title'))){ ?><?php  echo ot_get_option('why_us_2_sub_title'); ?><?php } ?></span>
									</div>
									<!-- <a href="<?php if((ot_get_option('why_us_2_link'))){ ?><?php  echo ot_get_option('why_us_2_link'); ?><?php } ?>" class="button-one">Read More</a> -->
								</div>
							</div>
							<div class="col-sm-4">
								<div class="services-post triggerAnimation animated whyWrap" data-animate="flipInY">
									<div class="services-head ">
										<h2><?php if((ot_get_option('why_us_3_title'))){ ?><?php  echo ot_get_option('why_us_3_title'); ?><?php } ?></h2>
										<span><?php if((ot_get_option('why_us_3_sub_title'))){ ?><?php  echo ot_get_option('why_us_3_sub_title'); ?><?php } ?></span>
									</div>
									<!-- <a href="<?php if((ot_get_option('why_us_3_link'))){ ?><?php  echo ot_get_option('why_us_3_link'); ?><?php } ?>" class="button-one">Read More</a> -->
								</div>
							</div>
						
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="services-post triggerAnimation animated whyWrap" data-animate="flipInY">
									<div class="services-head ">
										<h2><?php if((ot_get_option('why_us_4_title'))){ ?><?php  echo ot_get_option('why_us_4_title'); ?><?php } ?></h2>
										<span><?php if((ot_get_option('why_us_4_sub_title'))){ ?><?php  echo ot_get_option('why_us_4_sub_title'); ?><?php } ?></span>
									</div>
									<!-- <a href="<?php if((ot_get_option('why_us_4_link'))){ ?><?php  echo ot_get_option('why_us_4_link'); ?><?php } ?>" class="button-one">Read More</a> -->
								</div>
							</div>
							<div class="col-sm-4">
								<div class="services-post triggerAnimation animated whyWrap" data-animate="flipInY">
									<div class="services-head ">
										<h2><?php if((ot_get_option('why_us_5_title'))){ ?><?php  echo ot_get_option('why_us_5_title'); ?><?php } ?></h2>
										<span><?php if((ot_get_option('why_us_5_sub_title'))){ ?><?php  echo ot_get_option('why_us_5_sub_title'); ?><?php } ?></span>
									</div>
									<!-- <a href="<?php if((ot_get_option('why_us_5_link'))){ ?><?php  echo ot_get_option('why_us_5_link'); ?><?php } ?>" class="button-one">Read More</a> -->
								</div>
							</div>
							<div class="col-sm-4">
								<div class="services-post triggerAnimation animated whyWrap" data-animate="flipInY">
									<div class="services-head ">
										<h2><?php if((ot_get_option('why_us_6_title'))){ ?><?php  echo ot_get_option('why_us_6_title'); ?><?php } ?></h2>
										<span><?php if((ot_get_option('why_us_6_sub_title'))){ ?><?php  echo ot_get_option('why_us_6_sub_title'); ?><?php } ?></span>
									</div>
									<!-- <a href="<?php if((ot_get_option('why_us_6_link'))){ ?><?php  echo ot_get_option('why_us_6_link'); ?><?php } ?>" class="button-one">Read More</a> -->
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>

			<!-- single project -section 
				================================================== -->
			<div class="single-project">
				<div class="title-section white">
					<div class="container triggerAnimation animated" data-animate="fadeIn">
						<h1><?php if((ot_get_option('special_tours_title'))){ ?><?php  echo ot_get_option('special_tours_title'); ?><?php } ?></h1>
						
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<div class="project-block triggerAnimation animated" data-animate="slideInLeft">
								<div class="flexslider">
									<ul class="slides">
									<?php if ( function_exists( 'ot_get_option' ) ) {
										$special_tours_slides = ot_get_option( 'special_tours_slider_images', array() );
										if ($special_tours_slides) {
												foreach( $special_tours_slides as $slide ) {?>
													<?php //echo $slide['title']; ?>
													<?php //echo $slide['description']; ?>
													<li><img alt="<?php echo $slide['title'] ?>" src="<?php echo $slide['image'] ?>" /></li>
												<?php }
										}
									}
									?>	
									</ul>
								</div>
								
							</div>
						</div>
						<div class="col-md-4" style="overflow:hidden;">
							<div class="project-sidebar triggerAnimation animated" data-animate="slideInRight">								
								<?php if((ot_get_option('special_tours_description'))){ ?><?php  echo ot_get_option('special_tours_description'); ?><?php } ?>
							</div>
							<a href="<?php if((ot_get_option('special_tours_link'))){ ?><?php  echo ot_get_option('special_tours_link'); ?><?php } ?>" class="specialBtn">View More</a>
						</div>
						
					</div>					
				</div>
			</div>


		</div>
		<!-- End content -->

<?php get_footer(); ?>
