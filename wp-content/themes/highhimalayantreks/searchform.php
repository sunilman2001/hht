<form role="search" method="get" id="searchform" class="form search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">		
		<input type="search" class="search-field" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Search..." />		
        <input type="submit" id="searchsubmit" class="search-btn btn btn--primary" value="Search" />
        <!-- <button type="submit" id="searchsubmit"><span class="fa fa-search"></span></button> -->
</form>