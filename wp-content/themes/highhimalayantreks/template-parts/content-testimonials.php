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
				<div class="container">
					<h1><?php the_title(); ?></h1>
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
											<img src="<?php echo get_template_directory_uri(); ?>/images/nepal-trekking/image-na.jpg" />
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
								
                			
                                   


					        </div>
          					<div class="col-md-3 sidebarStyle">
          						<div class="sidebar triggerAnimation animated" data-animate="slideInUp">
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
