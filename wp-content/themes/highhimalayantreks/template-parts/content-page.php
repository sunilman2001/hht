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
			
	<div class="section-content page-banner nepal-trekking-page-banner">
		<div class="container breadcrumbWrap">
		<div class="hht-breadcrumb">
                            <?php custom_breadcrumbs(); ?>
                            <div class="clearfix"></div>
                            </div>
							<?php //echo $post->ID; ?>
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
	<?php
		$parent_id = wp_get_post_parent_id( $post_ID );
		// $parent_page_type =  get_the_title($parent_id);
		$parent_page_type = "Nepal Trekking" ;
		//echo $parent_page_type;
	?>
	<div class="section-content blog-section with-sidebar">
		<div class="container">
			<div class="blog-box">
				<div class="row">
				<?php  if($parent_page_type == "Nepal Trekking") {?>
					<div class="col-md-9">
				<?php } else { ?> 
					<div class="col-md-12">
				<?php } ?>	
						<div class="blog-post triggerAnimation animated" data-animate="slideInUp">									
							<div class="post-content">										
								<div class="detailsContent">
									<?php the_content(); ?>
								</div>
							</div>
						</div>
					</div> 
					<?php  if($parent_page_type == "Nepal Trekking") {?>
					<div class="col-md-3 sidebarStyle">
          						<div class="sidebar triggerAnimation animated" data-animate="slideInUp">									
								 <?php 
								 get_template_part( 'template-parts/menu', 'info-pages' );
								 ?>
								 <div class="category-widget widget">
									  <?php dynamic_sidebar( 'things-todo-in-nepal' ); ?>
									</div>
									
						</div>   
					</div>
					<?php } else { ?> 
						<div>NA</div>	
					<?php }?>   					
				</div>
			</div>
				
		</div>
	</div>
</div>

