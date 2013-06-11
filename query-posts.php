	<?php 
    	query_posts( 
    		array(
    			'post-type'		=> 'bw_homes',
    			'posts-per-page'	=> 30
    		)
    	);
    	while ( have_posts() ) : the_post(); 
	?>
