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

			<!-- blog-section Related Packages
				================================================== -->
			<div class="section-content blog-section with-sidebar">
				<div class="container">
          			<div class="blog-box">
          				<div class="row">
                        
          					<div class="col-md-9">
                           
                        
                       
          						<div class="triggerAnimation animated" data-animate="fadeIn">
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
										
										<div class="detailsContent">
                                           <?php the_content(); ?>
											</div>
									</div>
								</div>
								
                			
                                   <div class="triggerAnimation animated midContent" data-animate="fadeIn">

                             

                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs trekkingTabs" id="myTab">
                                             <li class="active">
                                                  <a href="#itinerary" data-toggle="tab">
                                                       <h2>Trip Itinerary </h2>
                                                  </a>
                                             </li>
                                             <li>
                                                  <a href="#costIns" data-toggle="tab">
                                                       <h2>Cost Includes/Excludes</h2>
                                                   </a>
                                             </li>
                                             <!-- <li>
                                                  <a href="#costExc" data-toggle="tab">
                                                       <h2>Cost Excludes</h2>
                                                  </a>
                                             </li> -->
                                             <li>
                                                  <a href="#faqs" data-toggle="tab">
                                                       <h2>FAQs</h2>
                                                  </a>
                                             </li>
                                              <li>
                                                  <a href="#bookingForm" data-toggle="tab">
                                                       <h2>Booking Form</h2>
                                                  </a>
                                             </li>
                                             
                                        </ul>

                                        <div class="tab-content">
                                             <div class="tab-pane active" id="itinerary">
                                                  <h2>Trip Itinerary </h2>
                                                  <p>
                                                  <?php $trip_itinerary = get_field('trip_itinerary'); ?>
                                                        <?php if( !empty($trip_itinerary) ): ?>
                                                        <?php echo $trip_itinerary; ?>
                                                  <?php endif; ?>
                                                  </p>
                                             </div>
                                             <div class="tab-pane" id="costIns">
                                                  <h2>Cost Includes</h2>
                                                 <p>
                                                  <?php $cost_includes = get_field('cost_includes'); ?>
                                                        <?php if( !empty($cost_includes) ): ?>
                                                        <?php echo $cost_includes; ?>
                                                  <?php endif; ?>
                                                  </p>
                                                  <h2>Cost Excludes</h2>
                                                  <p>
                                                  <?php $cost_excludes = get_field('cost_excludes'); ?>
                                                        <?php if( !empty($cost_excludes) ): ?>
                                                        <?php echo $cost_excludes; ?>
                                                  <?php endif; ?>
                                                  </p>
                                             </div>
                                           <!--  <div class="tab-pane" id="costExc">
                                                  
                                             </div> -->
                                             <div class="tab-pane" id="faqs">
                                                  <h2>FAQs</h2>
                                                  <p>
                                                  <?php $faqs = get_field('faqs'); ?>
                                                        <?php if( !empty($faqs) ): ?>
                                                        <?php echo $faqs; ?>
                                                  <?php endif; ?>
                                                  </p>
                                             </div>
                                             <div class="tab-pane" id="bookingForm">
                                                  <h2>Booking Forms</h2>
                                                 <p>
                                                  <?php $booking_form = get_field('booking_form'); ?>
                                                        <?php if( !empty($booking_form) ): ?>
                                                        <?php echo $booking_form; ?>
                                                  <?php endif; ?>
                                                 
                                                  </p>
                                             </div>
                                        </div>
                              
                         </div>


					        </div>
          					<div class="col-md-3 sidebarStyle">
          						<div class="sidebar triggerAnimation animated" data-animate="fadeIn">
                                        <div class="category-widget widget" style="margin-bottom:0;" >
                                             
                                                 <div class="widget-block"> 
                                                      <!-- <a href="#" class="btn btn-primary btnBook " data-toggle="modal"    data-target="#myModal">
                                                         Book This Trip
                                                       </a> -->
                                                       <?php 
                                                       $package_starts_from = get_field('package_starts_from'); 
                                                       $min_package_price = get_field('min_package_price');
                                                       $max_package_price = get_field('max_package_price');
                                                       ?>
                                                       <div class="package-starts-from">
                                                            <?php if( !empty($package_starts_from) ): ?>
                                                            <div class="package-starts-from__label">
                                                            <span class="package-starts-from__price">Price starts from: <?php echo $package_starts_from; ?></span>
                                                            </div>
                                                                 
                                                            <div class="packageBD triggerAnimation animated" data-animate="fadeIn">
                                                                 <p><span class="min_package_price"><?php echo $min_package_price; ?></span></p>
                                                                 <p><span class="max_package_price"><?php echo $max_package_price; ?></span></p>
                                                            </div>
                                                       </div>
                                                       
                                                       <?php endif; ?>
                                                 </div>
                                                 
                                                 

                                             </div>
                                             <!-- <div class="category-widget widget" >
                                                  <div class="widget-block">
                                                       <div class="guaranteed-text-info">
                                                            <?php dynamic_sidebar( 'guaranteed-text-info' ); ?>
                                                       </div>
                                                  </div>
                                             </div> -->
                                            
                                          <div class="category-widget widget">
                                                  <h3>Trip Profile</h3>
                                                  <div class="trip-fact">
                                                       <i class="fa fa-clock-o" aria-hidden="true"></i><strong>Trip Duration:</strong> <?php echo get_field('trip_duration'); ?><br>
                                                       <i class="fa fa-bookmark" aria-hidden="true"></i><strong>Trek Grade:</strong> <?php echo get_field('trek_grade'); ?><br>
                                                       <i class="fa fa-signal" aria-hidden="true"></i><strong>Highest Alt:</strong> <?php echo get_field('highest_alt'); ?><br>
                                                       <i class="fa fa-home" aria-hidden="true"></i><strong>Trek Style:</strong> <?php echo get_field('trek_style'); ?><br>
                                                       <i class="fa fa-bed" aria-hidden="true"></i><strong>Accommodation:</strong> <?php echo get_field('accommodation'); ?><br>
                                                       <i class="fa fa-pagelines" aria-hidden="true"></i><strong>Best Season:</strong> <?php echo get_field('best_season'); ?><br>
                                                       <i class="fa fa-users" aria-hidden="true"></i><strong>Group Size:</strong> <?php echo get_field('group_size'); ?><br>
                                                       <i class="fa fa-plane fan" aria-hidden="true"></i><strong>/<i class="fa fa-bus" aria-hidden="true"></i>Mode of Travel:</strong> <?php echo get_field('mode_of_travel'); ?><br>
                                                       <i class="fa fa-map-marker" aria-hidden="true"></i><strong>Start/End:</strong> <?php echo get_field('start_end'); ?>
                                                  </div>
                                             </div>
   
                                             <div class="category-widget widget" >
                                             
                                                 
                                                 
                                             <div class="online-inquiry"> 
                                                  <a href="#" class="btn btn-primary btn-online-inquery " data-toggle="modal"    data-target="#myModalQuickEnquiry">
                                                     Quick Inquiry
                                                   </a>
                                             </div>

                                         </div>
                                        <div class="category-widget widget">
                                                  <h3><?php                                     
															$current = $post->ID;                                     
															$parent = $post->post_parent;                                     
															$grandparent_get = get_post($parent);                                     
															$grandparent = $grandparent_get->post_parent;                                     
															?>
														<?php //echo get_the_title($parent); 
													  ?>
                                                    Related Packages</h3>
                                                  <ul class="category-list">
                                                <?php $current_pageid = get_the_ID(); //echo $current_pageid; ?> 
                                                <?php $parent_pageid = wp_get_post_parent_id( $post_ID ); //echo $parent_pageid; ?>      
												<?php $sub_pages = new WP_Query(array(
                                                    'post_type' => array('page'),
                                                    'post_parent' => $parent_pageid,
                                                    'numberposts' => -1,
                                                    'post_status' => 'publish',
                                                    'post__not_in'	=> array($current_pageid),
                                                    'order'=>'ASC' 
                                                    ));?>
                                                <?php if($sub_pages -> have_posts()){?>   
                                                <?php while($sub_pages->have_posts()): $sub_pages->the_post();?>
                                                	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                                 	<?php endwhile; wp_reset_query();?>
                                                <?php } else { ?>
                                                <div class="no-posts">Content not available now.</div>
                                           		<?php } ?>
                                                  </ul>
                                             </div>

          							
          							<div class="category-widget widget">
                                                  <h3><?php                                     
                                                            $current = $post->ID;                                     
                                                            $parent = $post->post_parent;                                     
                                                            $grandparent_get = get_post($parent);                                     
                                                            $grandparent = $grandparent_get->post_parent;                                     
                                                            ?>
                                                  Popular <?php echo get_the_title($grandparent); 
                                                       ?>
                                                    </h3>
										<ul class="category-list">
									 			<?php $current_pageid = get_the_ID(); //echo $current_pageid; ?> 
                                                <?php $parent_pageid = wp_get_post_parent_id( $post_ID ); //echo $parent_pageid; ?>      
                                                <?php $grand_parent_pageid = wp_get_post_parent_id( $parent_pageid ); //echo $grand_parent_pageid; ?>                                                      
												<?php $sub_pages = new WP_Query(array(
                                                    'post_type' => array('page'),
                                                    'post_parent' => $grand_parent_pageid,
                                                    'numberposts' => -1,
                                                    'post_status' => 'publish',
                                                    'post__not_in' => array(1411, 1413, 1442, 1415, 1417, 1420, 1422, 1424),
                                                    'order'=>'ASC' 
                                                    ));?>
                                                <?php if($sub_pages -> have_posts()){?>   
                                                <?php while($sub_pages->have_posts()): $sub_pages->the_post();?>
                                                	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                                 	<?php endwhile; wp_reset_query();?>
                                                <?php } else { ?>
                                                <div class="no-posts">Content not available now.</div>
                                           		<?php } ?>
										</ul>
									</div>

									

									<div class="category-widget widget">
                                    <?php dynamic_sidebar( 'additional-activities-in-nepal' ); ?>     
									</div>
									</div>
          						</div>
          					</div>
          				</div>
					 
					</div>
          		</div>
			</div>
		</div>
		<!-- End content -->
