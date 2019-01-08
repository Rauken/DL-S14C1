<?php get_header(); ?>

<?php $query = new WP_Query( 'cat=-3,-8' ); ?>
 <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

 <div class="container">
     <div class="row">

 
 <div class="post">
 
 <!-- Display the Title as a link to the Post's permalink. -->
 <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

 <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
 <small><?php the_time( 'F jS, Y' ); ?> by <?php the_author_posts_link(); ?></small>
 
  <div class="entry">
  	<?php the_content(); ?>
  </div>

  <p class="postmetadata"><?php esc_html_e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
 </div> <!-- closes the first div box -->
 </div>
 </div>
 
 <?php endwhile; 
 wp_reset_postdata();
 else : ?>
 <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
 <?php endif; ?>



<?php get_footer(); ?>