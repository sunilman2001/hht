
<div class="sidebar">

	<?php 

	$current_id = $post->ID;
	$parent_id = $post->post_parent;
	//$current_page_name = get_the_title($current_id);
	//echo $current_id;
	//echo $parent_id;

		$title_trekking = 'Nepal Trekking';
		$title_climbing = 'Nepal Peak Climbing';
		$title_mountainering = 'Mountaineering Expedition';
		$title_special_interest = 'Special Interest Activities';
		$title_nepal_tours = 'Nepal Tours';
		$menu_title = "Test";

		if($current_id == 18 || $parent_id == 18) {
			$page_name = get_page_by_title($title_trekking); 
			$menu_title = $title_trekking;
		} else if($current_id == 20 || $parent_id == 20){
			$page_name = get_page_by_title($title_climbing); 
			$menu_title = $title_climbing;
		}else if($current_id == 22 || $parent_id == 22){
			$page_name = get_page_by_title($title_mountainering); 
			$menu_title = $title_mountainering;
		}else if($current_id == 24 || $parent_id == 24){
			$page_name = get_page_by_title($title_nepal_tours); 
			$menu_title = $title_nepal_tours;
		}else if($current_id == 26 || $parent_id == 26){
			$page_name = get_page_by_title($title_special_interest); 
			$menu_title = $title_special_interest;
		};


		
		$page_id = $page_name->ID;
		//echo $page_id ; 

		
		if($current_id == 18 || $parent_id == 18) {
			$id_arrays = array(1411, 1413, 1442, 1415, 1417, 1420, 1422, 1424);
		} else if($current_id == 20 || $parent_id == 20){
			$id_arrays = array(1546, 1550, 1552, 1548); //local
			//$id_arrays = array(1556, 1542, 1544, 1546); //live
		}else if($current_id == 22 || $parent_id == 22){
			$id_arrays = array(1546, 1550, 1552, 1548); //local
			//$id_arrays = array(1556, 1542, 1544, 1546); //live
		}else if($current_id == 24 || $parent_id == 24){
			$id_arrays = array(1546, 1550, 1552, 1548); //local
			//$id_arrays = array(1556, 1542, 1544, 1546); //live
		}else if($current_id == 26 || $parent_id == 26){
			$id_arrays = array(1546, 1550, 1552, 1548); //local
			//$id_arrays = array(1556, 1542, 1544, 1546); //live
		};

		

		$id_arrays_excluded = array_diff($id_arrays, array($current_id));
		//print_r($id_arrays_excluded);
		?>
								  
		<div class="category-widget widget">
		<h3 class="widget-title"><?php echo $menu_title; ?> info</h3>
		<ul class="menu">


	  <?php $sub_pages = new WP_Query(array(
		  'post_type' => array('page'),
		  'post_parent' => $page_id,
		  'numberposts' => -1,
		  'post_status' => 'publish',
		  'post__in' => $id_arrays_excluded,
		  'order'=>'ASC' 
		  ));?>
	  <?php if($sub_pages -> have_posts()){?>   
	  <?php while($sub_pages->have_posts()): $sub_pages->the_post();?>  		   
			   <li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>	 
	  <?php endwhile; wp_reset_query();?>
	  </ul>
	  <?php } else { ?>
	  <div class="no-posts">No information pages.</div>
  		<?php } ?>
	  </div>
	</div>