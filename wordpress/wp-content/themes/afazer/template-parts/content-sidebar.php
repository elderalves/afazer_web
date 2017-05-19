 <!--======= SIDE BAR =========-->
        <li class="col-sm-4">
          <div class="blog-side-bar">

            <!--=======  CATEGORIES  FILTER =========-->  
            <h5>Categorias</h5>
            <ul class="cate-sim">
              <?php
                $categories = get_categories( array(
                    'orderby' => 'name',
                    'order'   => 'ASC'
                ) );
                
                foreach( $categories as $category ) {
              ?>
              <?php echo '<li><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a></li>'; ?>
              <?php
                } 
              ?>
            </ul>

            <div class="sponsor-blog" style="margin-top: 30px">
              <a href="#.">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sponsor-home-1.jpg" alt="">
              </a>
            </div>

            <!--=======  RECENT POST =========-->
            <h5 class="before-green">MAIS VISTOS</h5>
            <div class="tw-widgets">
              <ul>

              <?php
                  $popularpost = new WP_Query( array( 
                      'posts_per_page' => 5, 
                      'meta_key' => 'wpb_post_views_count', 
                      'orderby' => 'meta_value_num', 
                      'order' => 'DESC'  
                  ) );
                  while ( $popularpost->have_posts() ) : $popularpost->the_post();
              ?>

                <!--=======  RECENT POST =========-->
                <li>
                  <ul class="wid-in">
                    <li>
                      <a href="<?php the_permalink(); ?>">
                        <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                      </a>
                    </li>
                    <li>
                      <div class="img-side"> </div>
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span><i class="fa fa-calendar"></i><?php the_time('M d, Y') ?> </span>
                    </li>
                  </ul>
                </li>

                <?php
                  endwhile;
                ?>

                
              </ul>
            </div>

          </div>
        </li>