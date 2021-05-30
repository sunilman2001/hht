<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package highhimalayantreks
 */

?>

<div id="content">

			<!-- page-banner 
				================================================== -->
			<div class="section-content page-banner nepal-trekking-page-banner">
				<div class="container breadcrumbWrap" >
                <div class="hht-breadcrumb">
                            <?php custom_breadcrumbs(); ?>
                            <div class="clearfix"></div>
                            </div>
                            
					<!-- <h1><?php the_title(); ?></h1> -->
                  
				</div>
			</div>

			<!-- blog-section 
				================================================== -->
			<div class="section-content blog-section with-sidebar">
				<div class="container">
          			<div class="blog-box">
          				<div class="row">
          					<div class="col-md-9">
						  
        						<div class="blog-post triggerAnimation animated" data-animate="slideInUp">
								<!-- Slider Logic Starts -->
								
								<?php
											$slider_1_image = get_field('slider_1_image');
											$slider_1_title = get_field('slider_1_title');
											
											$slider_2_image = get_field('slider_2_image');
											$slider_2_title = get_field('slider_2_title');


											$slider_3_image = get_field('slider_3_image');
											$slider_3_title = get_field('slider_3_title');


											$slider_4_image = get_field('slider_4_image');
											$slider_4_title = get_field('slider_4_title');


											$slider_5_image = get_field('slider_5_image');
											$slider_5_title = get_field('slider_5_title');

											$slider_6_image = get_field('slider_6_image');
											$slider_6_title = get_field('slider_6_title');

											$slider_7_image = get_field('slider_7_image');
											$slider_7_title = get_field('slider_7_title');
											
									?>


									<div class="banner-slider" id="banner-slider">
									<!-- Sets featured image as first slide -->
									<?php if ( has_post_thumbnail() ) { ?>
											<div class="the-slider">
													<?php the_post_thumbnail('full') ?>
													<div class="the-caption">
														<?php the_title(); ?>
													</div>
											</div>
												
												<?php } else {?>
													<img src="<?php echo get_template_directory_uri(); ?>/images/image-na.jpg" />
										<?php } ?>

										<?php if( !empty($slider_1_image) ): ?>
											<div class="the-slider">
													<img src="<?php echo $slider_1_image; ?>" />
													<div class="the-caption">
														<?php echo $slider_1_title; ?>
													</div>
											</div>
										<?php endif; ?>	
										<?php if( !empty($slider_2_image) ): ?>
											<div class="the-slider">
													<img src="<?php echo $slider_2_image; ?>" />
													<div class="the-caption">
														<?php echo $slider_2_title; ?>
													</div>
											</div>
										<?php endif; ?>	
										<?php if( !empty($slider_3_image) ): ?>
											<div class="the-slider">
													<img src="<?php echo $slider_3_image; ?>" />
													<div class="the-caption">
														<?php echo $slider_3_title; ?>
													</div>
											</div>
										<?php endif; ?>	
										<?php if( !empty($slider_4_image) ): ?>
											<div class="the-slider">
													<img src="<?php echo $slider_4_image; ?>" />
													<div class="the-caption">
														<?php echo $slider_4_title; ?>
													</div>
											</div>
										<?php endif; ?>	
										<?php if( !empty($slider_5_image) ): ?>
											<div class="the-slider">
													<img src="<?php echo $slider_5_image; ?>" />
													<div class="the-caption">
														<?php echo $slider_5_title; ?>
													</div>
											</div>
										<?php endif; ?>	
										<?php if( !empty($slider_6_image) ): ?>
											<div class="the-slider">
													<img src="<?php echo $slider_6_image; ?>" />
													<div class="the-caption">
														<?php echo $slider_6_title; ?>
													</div>
											</div>
										<?php endif; ?>	
										<?php if( !empty($slider_7_image) ): ?>
											<div class="the-slider">
													<img src="<?php echo $slider_7_image; ?>" />
													<div class="the-caption">
														<?php echo $slider_7_title; ?>
													</div>
											</div>
										<?php endif; ?>	
										
									</div>

									<!-- Slider Logic Ends  -->
									
									<div class="post-content">
										<!-- <div class="content-data contentPic">
											<h2><?php the_title(); ?></h2>											
										</div> -->
										<div class="detailsContent">
                                           <?php the_content(); ?>
											</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 sidebarStyle">
								<div class="sidebar triggerAnimation animated" data-animate="slideInUp"> 
								<?php if(wp_get_post_parent_id( get_the_ID())) {?>
										<div class="category-widget widget">
											<?php dynamic_sidebar( 'nepal-highlights' ); ?>
										</div>
										<div class="category-widget widget">
											<?php dynamic_sidebar( 'nepal-travel-information' ); ?>
										</div>
										<div class="category-widget widget">
											<?php dynamic_sidebar( 'things-todo-in-nepal' ); ?>
										</div>
									<?php } ?>
								</div>
								  
          					</div>
							
                			
                            
          					
          				</div>
					 
					</div>
          		</div>
			</div>
		</div>
		<!-- End content -->
