<div class="category-widget widget">
<h3>
    <?php                                     
    $current = $post->ID;                                     
    $parent = $post->post_parent;                                     
    $grandparent_get = get_post($parent);                                     
    $grandparent = $grandparent_get->post_parent;                                     
    ?>    
<?php echo get_the_title($parent); ?> Information
</h3>

<ul class="category-list">
<?php $current_pageid = get_the_ID(); //echo $current_pageid; ?> 
<?php $parent_pageid = wp_get_post_parent_id( $post_ID ); //echo $parent_pageid; ?>   
<?php if($parent_pageid == 0) $parent_pageid = $current_pageid;   ?>

<?php $sub_pages = new WP_Query(array(
    'post_type' => array('page'),
    'post_parent' => $parent_pageid,
    'numberposts' => -1,
    'post_status' => 'publish',
    'meta_query' => array(
		array(
			'key' => 'is_info_page',
			'compare' => '=',
			'value' => '1'
		)
	)

));?>
<?php if($sub_pages -> have_posts()){?>   
<?php while($sub_pages->have_posts()): $sub_pages->the_post();?>
    <?php
        $this_ID =  $post->ID ; 
        //echo $this_ID; echo('--');
        //echo $current_pageid  ;
    ?>
    <li class="<?php echo $this_ID == $current_pageid ? 'active' : ''; ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; wp_reset_query();?>
<?php } else { ?>
<div class="no-posts">Pages have not been added.</div>
<?php } ?>
</ul>
</div>