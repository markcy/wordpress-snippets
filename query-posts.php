	<?php 
    	query_posts( 
    		array(
    			'post_type'		=> 'bw_homes',
    			'posts_per_page'	=> 30
    		)
    	);
    	while ( have_posts() ) : the_post(); 
	?>
