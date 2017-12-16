<?php get_header(); ?>

<div class="content">
	<div class="text-content">
		<?php
		        if(have_posts()):
		            while(have_posts()): the_post();
		    ?>
		    <div>
		        <h1><?php the_title(); ?></h1>
		        <div class="thumbnail-img"> <?php the_post_thumbnail('large'); ?> </div>
		        <small>Posted on <?php the_time('F j,Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
		        <?php the_content(); ?>
		        <hr>
		    </div>
		    <?php endwhile; ?>
		<?php endif; ?>
	</div>
	<div class="widget-content">
		text
	</div>
</div>

<?php get_footer(); ?>
