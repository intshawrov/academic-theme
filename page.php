<?php 
get_header(); 
?>


<section class="blog">
      <div class="container">
            <?php
      if(have_posts() ):
      while( have_posts() ): the_post(); ?>

              <div class="blog-heading">
                  <h3><?php the_title(); ?></h3>
              </div>
<?php
endwhile;
endif;
?>
      </div>
</section>



<?php 
get_footer(); 
?>