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
				</div>
						
			</div>

			<!-- blog-section 
				================================================== -->
			<div class="section-content blog-section">
				<div class="container">
          			<div class="blog-box">
          				<div class="row">
          					<div class="col-md-12">	
							  <div class="blog-post triggerAnimation animated" data-animate="slideInUp">
							  <div class="post-content">
							  
								  <div class="detailsContent">
										<?php the_content(); ?>
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
