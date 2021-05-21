<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package highhimalayantreks
 */

?>
<?php
$legal_document_header = get_field('legal_documents');
$dropdown1_header = get_field('dropdown1_header');
$dropdown1_image = get_field('dropdown1_image');
$dropdown2_header = get_field('dropdown2_header');
$dropdown2_image = get_field('dropdown2_image');
$dropdown3_header = get_field('dropdown3_header');
$dropdown3_image = get_field('dropdown3_image');
$dropdown4_header = get_field('dropdown4_header');
$dropdown4_image = get_field('dropdown4_image');
$dropdown5_header = get_field('dropdown5_header');
$dropdown5_image = get_field('dropdown5_image');
$dropdown6_header = get_field('dropdown6_header');
$dropdown6_image = get_field('dropdown6_image');


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

          						<div class="blog-post triggerAnimation animated" data-animate="slideInUp">
							
									<div class="post-content">
									<h3><?php the_title(); ?></h3>	
										<div class="detailsContent">
                                           <?php the_content(); ?>
											</div>
											<hr/>
											<h4><?php echo $legal_document_header ?></h4>
											<div class="accordion">
												<div class="panel-group" id="accord" role="tablist" aria-multiselectable="false">
														<div class="panel panel-default">
															<div class="panel-heading" role="tab" id="heading01">
																<h5 class="panel-title">
																	<a role="button" data-toggle="collapse" class="accordion-plus-toggle collapsed" data-parent="#accord" href="#collapse1" aria-expanded="false" aria-controls="collapse1"><?php echo $dropdown1_header; ?> </a>
																</h5>
															</div>
															<div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading01">
																<div class="panel-body"><img src="<?php echo $dropdown1_image; ?>"></div>
															</div>
														</div>
														<div class="panel panel-default">
															<div class="panel-heading" role="tab" id="heading02">
																<h5 class="panel-title">
																	<a role="button" data-toggle="collapse" class="accordion-plus-toggle collapsed" data-parent="#accord" href="#collapse2" aria-expanded="false" aria-controls="collapse2"><?php echo $dropdown2_header; ?> </a>
																</h5>
															</div>
															<div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading02">
																<div class="panel-body"><img src="<?php echo $dropdown2_image; ?>"></div>
															</div>
														</div>
														<div class="panel panel-default">
															<div class="panel-heading" role="tab" id="heading03">
																<h5 class="panel-title">
																	<a role="button" data-toggle="collapse" class="accordion-plus-toggle collapsed" data-parent="#accord" href="#collapse3" aria-expanded="false" aria-controls="collapse3"><?php echo $dropdown3_header; ?> </a>
																</h5>
															</div>
															<div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading03">
																<div class="panel-body"><img src="<?php echo $dropdown3_image; ?>"></div>
															</div>
														</div>
														<div class="panel panel-default">
															<div class="panel-heading" role="tab" id="heading04">
																<h5 class="panel-title">
																	<a role="button" data-toggle="collapse" class="accordion-plus-toggle collapsed" data-parent="#accord" href="#collapse4" aria-expanded="false" aria-controls="collapse4"><?php echo $dropdown4_header; ?> </a>
																</h5>
															</div>
															<div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading04">
																<div class="panel-body"><img src="<?php echo $dropdown4_image; ?>"></div>
															</div>
														</div>
														<div class="panel panel-default">
															<div class="panel-heading" role="tab" id="heading05">
																<h5 class="panel-title">
																	<a role="button" data-toggle="collapse" class="accordion-plus-toggle collapsed" data-parent="#accord" href="#collapse5" aria-expanded="false" aria-controls="collapse5"><?php echo $dropdown5_header; ?> </a>
																</h5>
															</div>
															<div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading05">
																<div class="panel-body"><img src="<?php echo $dropdown5_image; ?>"></div>
															</div>
														</div>

														<div class="panel panel-default">
															<div class="panel-heading" role="tab" id="heading06">
																<h5 class="panel-title">
																	<a role="button" data-toggle="collapse" class="accordion-plus-toggle collapsed" data-parent="#accord" href="#collapse6" aria-expanded="false" aria-controls="collapse6"><?php echo $dropdown6_header; ?> </a>
																</h5>
															</div>
															<div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading06">
																<div class="panel-body"><img src="<?php echo $dropdown6_image; ?>"></div>
															</div>
														</div>
														
													</div>
												</div>
											</div>
										</div>
					        		</div>
								<div class="col-md-3 sidebarStyle">
          							<div class="sidebar triggerAnimation animated" data-animate="slideInUp">									
								  		<div class="category-widget widget">
									<h3>
									Why choose us?
									</h3>
									<?php dynamic_sidebar( 'why-choose-us' ); ?>
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
