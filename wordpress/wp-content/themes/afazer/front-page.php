<?php get_header(); ?>

  <!--======= BANNER =========-->
  <div id="banner">
    <div class="flex-banner">
      <ul class="slides">

        <?php
          $slides_home = new WP_Query( array( 'post_type' => 'slides' ) );

          if ( $slides_home->have_posts() ) : 
            while ( $slides_home->have_posts() ) : $slides_home->the_post();
              get_template_part( 'template-parts/home/content', 'slides' );
            endwhile; 
            wp_reset_postdata();
          endif;
        ?>

      </ul>
    </div>
  </div>

  <!--======= SERVICES =========-->
  <section class="services">
    <div class="container">

      <!--======= SERVICES ROW =========-->
      <ul class="row">

        <!--======= SERVICES =========-->
        <li class="col-md-4 padding-r-80 hidden-xs">
          <div class="sponsor">
            <a href="#">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sponsor-home-1.jpg" alt="">
            </a>
          </div>
        </li>

        <!--======= SERVICES =========-->
        <li class="col-md-4 padding-r-80">
          <div class="tittle">
            <h2 class="text-left">
             Controle e Administre com o <strong>AFAZER</strong>
            </h2>
          </div>
          <p>
            AFAZER é um Sistema profissional que auxilia a Gestão da Manutenção Predial,
            Ativos, Reformas e Documentos. Estamos conectando os diversos setores
            das construção civil com os sistemas prediais.
          </p>
          <a href="<?php echo get_permalink( get_page_by_path( 'solucoes' ) ); ?>" class="btn">Saiba Mais</a>
        </li>


        <?php get_template_part( 'template-parts/home/content', 'fornecedores' ); ?>

        

        <!--======= SERVICES =========-->
        <li class="col-md-4 padding-r-80 hidden-lg hidden-md">
          <div class="sponsor">
            <a href="#">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sponsor-home-1.jpg" alt="">
            </a>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <section class="blog">
    <div class="container">

      <!--======= TITTLE =========-->
      <div class="tittle">
        <h2>artigos e notícias</h2>
      </div>
      <ul class="row">

        <?php
          $posts_home = new WP_Query( array( 'post_type' => 'post' ) );

          if ( $posts_home->have_posts() ) : 
            $count = 0;
            while ( $posts_home->have_posts() ) : $posts_home->the_post();
              get_template_part( 'template-parts/home/content', 'posts' );
              $count++;

              if($count == 2) {
                ?>

                  <li class="col-sm-4">
                      <div class="b-inner blog-sponsor">
                      <a href="#">
                          <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/sponsor-home-2.jpg" alt="" >
                      </a>
                      </div>
                  </li>

                <?php
              }
            endwhile; 
            wp_reset_postdata();
          endif;
        ?>

        
      </ul>
    </div>
  </section>

  <!--======= CLIENTS FEEDBACK =========-->
  <section class="clients">
    <div class="container">

      <!--======= TITTLE =========-->
      <div class="tittle">
        <h2>eles aprovam</h2>
      </div>
      <ul class="row">

      <?php
          $clientes_home = new WP_Query( array( 'post_type' => 'clientes' ) );
          if ( $clientes_home->have_posts() ) :
              while ( $clientes_home->have_posts() ) : $clientes_home->the_post();
                  get_template_part( 'template-parts/home/content', 'clientes' );
              endwhile;
          else : 
              get_template_part( 'template-parts/post/content', 'none' );
          endif; 
      ?>

        
      </ul>
    </div>
  </section>

  <?php get_footer(); ?>


