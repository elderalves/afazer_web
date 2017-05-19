<?php
get_header();
wpb_set_post_views(get_the_ID());
?>


  <!--======= BLOG =========-->
  <section class="blog">
    <div class="container">
      <ul class="row">
        <li class="col-sm-8">

          <?php // Show the selected frontpage content.
              if ( have_posts() ) :
                  while ( have_posts() ) : the_post();
                      get_template_part( 'template-parts/content', 'single' );
                  endwhile;
              else : 
                  get_template_part( 'template-parts/post/content', 'none' );
              endif; 
          ?>


          <div class="sponsor-blog">
            <a href="#.">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sponsor-blog-1.jpg" alt="">
            </a>
          </div>

        </li>

        <?php get_template_part( 'template-parts/content', 'sidebar' ); ?>

      </ul>
    </div>
  </section>

<?php

get_footer();

?>