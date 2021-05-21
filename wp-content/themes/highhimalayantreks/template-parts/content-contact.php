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
							
									<div class="post-content">
										
										<div class="detailsContent">
                                           <?php the_content(); ?>
											</div>
									</div>
								</div>
					        </div>
							<div class="col-md-3 sidebarStyle">
          						<div class="sidebar triggerAnimation animated" data-animate="slideInUp">									
								  <div class="category-widget widget">
<h3>Contact Information</h3>

<p><?php dynamic_sidebar( 'contact-information' ); ?> </p>

</div>
								 <div class="category-widget widget">
									  <?php dynamic_sidebar( 'things-todo-in-nepal' ); ?>
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
