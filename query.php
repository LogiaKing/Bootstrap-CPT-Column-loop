  <?php
  $args = array(
    'post_type' => 'property-items'
  );
  $query = new WP_Query( $args );
  ?>
  <div class="container">
    <div class="row">
      <?php if($query -> have_posts() ) : while( $query -> have_posts() ) : $query -> the_post(); ?>
      <div class="col-md-6"> <a href= "<?php the_permalink(); ?>">
        <?php the_post_thumbnail(); ?>
        <header class="entry-header">
          <?php the_title('<h1>', '</h1>'); ?>
        </header>
        <?php the_excerpt();?>
        </a> </div>
      <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
    <!-- .col end --> 
  </div>
