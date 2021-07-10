<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package highhimalayantreks
 */

?>
<div class="silhouette"></div>
<footer>
	<div class="up-footer">
		<div class="container">
			<div class="footCont">

				<div class="footer-menu-1">
					<?php dynamic_sidebar('footer-menu-1'); ?>
				</div>

				<div class="footer-menu-2">
					<?php dynamic_sidebar('footer-menu-2'); ?>
				</div>

				<div class="footer-menu-3">
					<?php dynamic_sidebar('footer-menu-3'); ?>
				</div>
				<div class="footer-menu-climbing-peaks">
					<?php dynamic_sidebar('Footer-menu-climbing-peaks'); ?>
					<!-- <div class="widget footer-widget flickr-widget">
								<h1><?php if ((ot_get_option('footer_contact_title'))) { ?><?php echo ot_get_option('footer_contact_title'); ?><?php } ?></h1>
								
								<div class="contact-infoMain">
								<?php if ((ot_get_option('footer_contact_details'))) { ?><?php echo ot_get_option('footer_contact_details'); ?><?php } ?>

								</div>
							</div>							 -->
				</div>
				<div class="recAff">
					<div class="affiliated">
						<h1 >Affiliated with</h1>
						<ul class="affWith">
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/affiliated/img01.png" alt="associate"  /></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/affiliated/img02.png" alt="associate"  /></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/affiliated/img03.png" alt="associate"  /></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/affiliated/img04.png" alt="associate"  /></li>						
						</ul>
						<ul class="affWith">
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/affiliated/img05.png" alt="associate"  /></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/affiliated/img06.png" alt="associate"  /></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/affiliated/img07.png" alt="associate"  /></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/affiliated/img08.png" alt="associate"  /></li>
						</ul>
					</div>
					<div class="socialWrapper">
					<h1>Stay Connected</h1>
						<ul class="social-icons" >
						<?php if((ot_get_option('connect_youtube'))){ ?>
							<li><a class="youtube" href="<?php  echo ot_get_option('connect_youtube'); ?>"><i class="fa fa-youtube"></i></a></li>
						<?php }?>
						<?php if((ot_get_option('connect_facebook'))){ ?>   
							<li><a class="facebook" href="<?php  echo ot_get_option('connect_facebook'); ?>"><i class="fa fa-facebook"></i></a></li>
							<?php }?>
						<?php if((ot_get_option('connect_twitter'))){ ?>   
							<li><a class="twitter" href="<?php  echo ot_get_option('connect_twitter'); ?>"><i class="fa fa-twitter"></i></a></li>
							<?php }?>
						<?php if((ot_get_option('connect_instagram'))){ ?>   
							<li><a class="instagram" href="<?php  echo ot_get_option('connect_instagram'); ?>"><i class="fa fa-instagram"></i></a></li>
							<?php }?>
						</ul>
					</div>
				</div>



			</div>


			<div class="footer-line">
				<p>Copyright <?php echo date_i18n('Y') ?>. High Himalaya treks. All rights reserved.</p>
			</div>

		</div>
	</div>

</footer>
<!-- End footer -->
</div>
<!-- End Container -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<?php echo do_shortcode('[contact-form-7 id="129" title="Book This Trip"]'); ?>
		</div>
	</div>
</div>

<div class="modal fade" id="myModalQuickEnquiry" tabindex="-1" role="dialog" aria-labelledby="myModalQuickEnquiryLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<?php echo do_shortcode('[contact-form-7 id="769" title="Quick Inquiry - Free Quote"]'); ?>
		</div>
	</div>
</div>

<div class="modal fade" id="fDModal" tabindex="-1" role="dialog" aria-labelledby="myModalQuickEnquiryLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header" style="display:flex;">
				<h3 class="modal-title">Join Our Fixed Departure</h3>
				<button type="button" class="close" data-dismiss="modal" style="margin-left:auto;">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<div class="fixedDepartureModal">

					<!-- <div class="dateSelect">
							<select name="" id="">
								<option value="">2021</option>
								<option value="">2022</option>
								<option value="">2023</option>
							</select>

						</div> -->
					<table cellspacing="0" cellpadding="0" class="fdTbl">
						<thead>
							<tr>

								<!-- <th>Trip </th> -->
								<th>Trip Dates</th>
								<th>Availability</th>
								<th>Price</th>
								<th>Space Left</th>
								<th></th>
							</tr>
						</thead>

						<?php

						if (have_rows('fixed_departure')) :
							while (have_rows('fixed_departure')) : the_row();

								$startDate = get_sub_field('trip_start_date');
								$endDate = get_sub_field('trip_end_date');
								$availability = get_sub_field('availability');
								$price =  get_sub_field('price');
								$spaceLeft = get_sub_field('space_left');
								$soldOut = get_sub_field('sold_out');
						?>


								<tr class="moreList">
									<td><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $startDate; ?> - <?php echo $endDate; ?></td>
									<td><?php echo $availability; ?></td>
									<td><div class="d-flex"><i class="fa fa-tag" aria-hidden="true"></i><?php echo $price; ?></div></td>
									<td><i class="fa fa-user" aria-hidden="true"></i><?php echo $spaceLeft; ?></td>

									<?php
									if ($spaceLeft == 0) : ?>
										<td class="full"><?php echo $soldOut; ?></td>
										<td style="display:none"><a href="#" class="button-one" data-toggle="modal" data-target="#bookNow">Book Now</a></td>
									<?php
									else : ?>
										<td><a href="#" class="button-one" data-toggle="modal" data-target="#bookNow" data-dismiss="modal">Book Now</a></td>
									<?php
									endif;
									?>

									<!-- <td><?php echo $soldOut; ?></td>
                                                                 <td><a href="#" class="button-one" data-toggle="modal" data-target="#bookNow">Book Now</a></td> -->
								</tr>

							<?php endwhile; ?>
						<?php else : ?>
							<div class="no-posts">Content not available now.</div>
						<?php endif; ?>
					</table>
				</div>
				<div class="loadMore">
						<a href="#" id="loadMore">Load More</a>
					</div>
			</div>

			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>


<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.migrate.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.imagesloaded.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/plugins-scroll.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/waypoint.min.js"></script>

<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.themepunch.revolution.min.js"></script>

<!-- <script type="application/javascript" src="<?php // echo get_template_directory_uri() 
												?>/js/jquery-1.12.4.min.js"></script> -->
<script type="application/javascript" src="<?php echo get_template_directory_uri() ?>/slick/slick.min.js"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

<!-- THE SCRIPT INITIALISATION -->
<!-- LOOK THE DOCUMENTATION FOR MORE INFORMATIONS -->
<script type="text/javascript">
	var revapi;

	jQuery(document).ready(function() {
		//alert("jQuery from Footer Works!")
		$("#banner-slider").slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 5000,
			dots: true,
			arrows: false,
			// nextArrow: '<a href="#" class="next"><i class="fa fa-chevron-right"></i></a>',
			// prevArrow: '<a href="#" class="prev"><i class="fa fa-chevron-left"></i></a>',
		});
		revapi = jQuery('.tp-banner').revolution({
			delay: 6000,
			startwidth: 1170,
			startheight: 738,
			hideThumbs: 10,
			fullWidth: "on",
			forceFullWidth: "on",
			navigationType: "bullet",
			navigationArrows: "solo",
			onHoverStop: "off",
			navigationVOffset: 60,
			hideThumbsOnMobile: "on",
			hideBulletsOnMobile: "on",
			hideArrowsOnMobile: "on"

		});

		//    revapi = jQuery('.tp-banner').revolution(
		// 	{
		// 		delay:9000,
		// 		startwidth:1600,
		// 		startheight:738,
		// 		hideThumbs:10,
		// 		fullWidth:"on",
		// 		forceFullWidth:"on",
		// 		navigationType:"none",
		// 		navigationArrows:"none",
		// 		onHoverStop:"off"
		// 	});

		//    var slideThumb = $('.slide-thumbs');

		// 	slideThumb.on('click', function(){
		// 		var btn = $(this);
		// 		revapi.revshowslide(btn.data('slide'));

		// 	});
		// 	revapi.bind("revolution.slide.onchange", function (e,data) {
		// 		slideThumb.parent('li').removeClass('active');
		// 		$('#slidethumb' + data.slideIndex).parent('li').addClass('active');
		// 	});


		//ajax loader


	}); //ready
</script>

<!-- END REVOLUTION SLIDER -->
<?php wp_footer(); ?>
</body>

</html>