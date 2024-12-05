<?php get_header(); 

if ( have_posts() ) : 
     while ( have_posts() ) : the_post(); ?>
          <h2><a href="<?php the_permalink() ?>"> <?php the_title(); ?>  </a></h2>
          <div><?php the_content(); ?></div>
          <hr>
          <?php 
          get_footer();
     endwhile; ?>
<?php else : ?>
     <p>No posts found.</p>
<?php endif; ?>

