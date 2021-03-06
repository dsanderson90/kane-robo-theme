<?php get_header(); ?>

    

    <main>
        <a href="<?php echo site_url('/events');?>">
            <h2 class="page-heading">Events</h2>
        </a>

    <div class="event-section">
		 <h3 id="event-text-heading">Kane Robotics will be exhibiting at the following trade shows:</h3>
        <?php 
        $args = array(
            'post_type' => 'event',
            'posts_per_page' => 8,

        );
        $events = new WP_Query($args);

        while ($events->have_posts()) {
            $events->the_post();
        

        ?>
            <div class="card">
                <div class="expo-event">
                    <a href="<?php echo the_permalink(); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" 
                    alt = "Expo Event">

                    </a>
                </div>

                <div class="card-description">
                    <a href="<?php the_permalink() ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    
                    <p>
                        <?php echo the_content(); ?>
                    </p>
                </div>
            </div>

            <?php }
             wp_reset_query(); 
             ?>


</div>

       

        <div class="pagination">
        <?php echo paginate_links(); ?></div>

        
        	

       <?php get_footer(); ?>