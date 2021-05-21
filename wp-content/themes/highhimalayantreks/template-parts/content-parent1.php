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
				<div class="container breadcrumbWrap2">
                <div class="hht-breadcrumb">
                            <?php custom_breadcrumbs(); ?>
                            <div class="clearfix"></div>
                            </div>                            
					<!-- <h1><?php the_title(); ?></h1>s-->
				</div>
			</div>

			<!-- blog-section 
				================================================== -->
			<div class="section-content blog-section with-sidebar">
				<div class="container">
          			<div class="blog-box">
          				<div class="row">
          					<div class="col-md-9">
                            

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
										<div class="content-data contentPic">
											<h2><?php the_title(); ?></h2>											
										</div>
										<div class="detailsContent">
                                           <?php the_content(); ?>
											</div>
									</div>
									
									<div class="sub_listing_title">
									<h3><?php the_field('sub_listing_title'); ?></h3>
									</div>
						
								<div class="section-content portfolio-section"> 
							
                         				<div class="portfolio-box">
                         					
                         					<div class="nepalTrekkingCatagories">
                                            
                                            <?php $current_pageid = get_the_ID(); //echo $current_pageid; ?>
      
												<?php $sub_pages = new WP_Query(array(
                                                    'post_type' => array('page'),
                                                    'post_parent' => $current_pageid,
                                                    'numberposts' => -1,
													'post_status' => 'publish',
													'post__not_in' => array(1411, 1413, 1442, 1415, 1417, 1420, 1422, 1424, 1546, 1550, 1552,1548),
                                                    'order'=>'ASC' 
                                                    ));?>
                                                <?php if($sub_pages -> have_posts()){?>   
                                                <?php while($sub_pages->have_posts()): $sub_pages->the_post();?>                                             
                         						<div class="project-post ">
                         							<div class="project-gal">
                                                    <?php $thumbnail = get_the_post_thumbnail_url(); //echo $thumbnail; ?>
                                                       <?php if ( has_post_thumbnail() ) { 
														echo the_post_thumbnail('medium');
														} else {?>
															<img src="<?php echo get_template_directory_uri(); ?>/images/image-na-thumb.jpg" />
														<?php } ?> 
                                                        
                         								<div class="hover-box">
                         									<a class="zoom" href="<?php echo $thumbnail; ?>"><i class="fa fa-search-plus"></i></a>
                         									<a class="link" href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
                         								</div>
                         							</div>
                         							<div class="project-content">
                         								<h2><?php the_title(); ?></h2>
                         								
                         							</div>
                         						</div>
                                                <?php endwhile; wp_reset_query();?>
                                                <?php } else { ?>
                                                <div class="no-posts">Packages have not been added.</div>
                                            <?php } ?>
                                   
                         					</div>
                         				</div>
                     			    </div>                                   
                                   
					        </div>
							
          					<div class="col-md-3 sidebarStyle">
          						<div class="sidebar triggerAnimation animated" data-animate="slideInUp">
                                       <!-- <div class="category-widget widget">
                                                  <h3>Quick Inquiry Form</h3>
                                                  <?php //echo do_shortcode( '[contact-form-7 id="128" title="Quick Inquiry Form"]' ); ?>

                                             </div> -->

									<?php
									$parent_page_type =  get_the_title();
									//echo $parent_page_type;
									?>

									<?php  if($parent_page_type == "Destinations") {?>	

											<div class="category-widget widget">									  
												<?php dynamic_sidebar( 'destination-information' ); ?>
											</div>

											<div class="category-widget widget">
												<?php //dynamic_sidebar( 'things-todo-in-nepal' ); ?>
											</div>								
									
									<?php } else if( $parent_page_type == "Nepal Trekking") {?>

											<div class="category-widget widget">									  
												<?php //dynamic_sidebar( 'nepal-trekking-information' ); ?>
												<?php 
													get_template_part( 'template-parts/menu', 'info-pages' );
													?>
											</div>

											<div class="category-widget widget">
												<?php dynamic_sidebar( 'things-todo-in-nepal' ); ?>
											</div>

									<?php } else if ($parent_page_type == "Nepal Peak Climbing") {?>

											<?php 
											get_template_part( 'template-parts/menu', 'info-pages' );
											?>

											<div class="category-widget widget">
												<?php dynamic_sidebar( 'things-todo-in-nepal' ); ?>
											</div>
											
									<?php } else if($parent_page_type == "Mountaineering Expedition"){ ?>
										<?php 
											get_template_part( 'template-parts/menu', 'info-pages' );
											?>
											<!-- <div class="category-widget widget">
												<?php// dynamic_sidebar( 'nepal-mountaineering-information' ); ?>
											</div> -->

											<div class="category-widget widget">
												<?php dynamic_sidebar( 'things-todo-in-nepal' ); ?>
											</div>

									<?php } else if($parent_page_type == "Nepal Tours"){ ?>
										<?php 
											get_template_part( 'template-parts/menu', 'info-pages' );
											?>
						
									<div class="category-widget widget">
										<?php dynamic_sidebar( 'things-todo-in-nepal' ); ?>
									</div>											

									<?php } else {?>
										<?php 
											get_template_part( 'template-parts/menu', 'child-pages' );
											?>
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
		</div>
		<!-- End content -->
