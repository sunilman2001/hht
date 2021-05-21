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
				<div class="container breadcrumbWrap">
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
                                <?php if ( has_post_thumbnail() ) { 
								echo the_post_thumbnail('full');
								} else {?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/image-na.jpg" />
								<?php } ?> 
									
									<div class="post-content">
										<div class="content-data contentPic">
											<h2><?php the_title(); ?></h2>											
										</div>
										<div class="detailsContent">
                                           <?php the_content(); ?>
											</div>
									</div>
								</div>
						
								<div class="section-content portfolio-section"> 
                         				<div class="portfolio-box">
                         					
                         					<div class="nepalTrekkingCatagories">
                                            
                                            <?php //$current_pageid = get_the_ID(); //echo $current_pageid; ?>
      
												<?php $teahouse_trekking = new WP_Query(array(
														'post_type' =>'page',			
														'post_status' => 'publish',
														'meta_query'	=> array(
															'relation'		=> 'AND',
															array(
																'key'		=> 'package_type',																
																'value'		=> 'Trekking',			
																'compare'	=> '=',
															),
															array(
																'key'		=> 'is_homestay_trekking',																
																'value'		=> true,
																'compare'	=> '=',
																
															),
														)																				
                                                    ));?>
                                                <?php if($teahouse_trekking -> have_posts()){?>   
                                                <?php while($teahouse_trekking->have_posts()): $teahouse_trekking->the_post();?>                                             
                         						<div class="project-post">
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
                                      <!--  <div class="category-widget widget">
                                                  <h3>Quick Inquiry Form</h3>
                                                  <?php //echo do_shortcode( '[contact-form-7 id="128" title="Quick Inquiry Form"]' ); ?>

                                             </div> -->
                                              <?php $exclude_sidebar = get_page_template_slug( $post->ID ); //echo $exclude_teahouse_camping; ?>      
                                        <?php if($exclude_sidebar != "page-homestay-treks.php"){?>
                                        <div class="category-widget widget">
                                                  <h3><?php                                     
															$current = $post->ID;                                     
															$parent = $post->post_parent;                                     
															$grandparent_get = get_post($parent);                                     
															$grandparent = $grandparent_get->post_parent;                                     
															?>
														<?php echo get_the_title($current); 
													  ?>
                                                    </h3>
                                                  <ul class="category-list">
                                                <?php $current_pageid = get_the_ID(); //echo $current_pageid; ?> 
                                                <?php $parent_pageid = wp_get_post_parent_id( $post_ID ); //echo $parent_pageid; ?>      
												<?php $sub_pages = new WP_Query(array(
                                                    'post_type' => array('page'),
                                                    'post_parent' => $current_pageid,
                                                    'numberposts' => -1,
                                                    'post_status' => 'publish',
                                                    'order'=>'DESC' 
                                                    ));?>
                                                <?php if($sub_pages -> have_posts()){?>   
                                                <?php while($sub_pages->have_posts()): $sub_pages->the_post();?>
                                                	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                                 	<?php endwhile; wp_reset_query();?>
                                                <?php } else { ?>
                                                <div class="no-posts">Packages have not been added.</div>
                                           		<?php } ?>
                                                  </ul>
                                             </div>
                                          <?php } ?>   
          							
									<div class="category-widget widget">
                                    <?php dynamic_sidebar( 'sidebar-menu-1' ); ?>  
									</div>

									<div class="category-widget widget">
                                    <?php dynamic_sidebar( 'sidebar-menu-2' ); ?>     
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
