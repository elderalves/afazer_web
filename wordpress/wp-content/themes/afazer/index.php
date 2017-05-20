<?php get_header(); ?>

<!--======= BANNER =========-->
  <div class="sub-banner">
    <div class="container">
      <h1>BLOG</h1>
      <p class="exo">artigos e notícias</p>
    </div>
    <ol class="breadcrumb">
      <li><a href="index.html">home </a></li>
      <li class="active"> BLOG</li>
    </ol>
  </div>

  <!--======= BLOG =========-->
  <section class="blog">
    <div class="container">
      <ul class="row">
        <li class="col-sm-8">

          <?php // Show the selected frontpage content.
              if ( have_posts() ) :
                  while ( have_posts() ) : the_post();
                      get_template_part( 'template-parts/blog/content', 'blog-posts' );
                  endwhile;
              else : 
                  get_template_part( 'template-parts/post/content', 'none' );
              endif; 
          ?>


          <!--======= PAGINATION =========-->
          <!--<ul class="pagination">
            <li><a href="#.">1</a></li>
            <li><a href="#.">2</a></li>
            <li><a href="#.">3</a></li>
            <li><a href="#."><i class="fa fa-angle-double-right"></i></a></li>
          </ul>-->

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

<?php get_footer(); ?>