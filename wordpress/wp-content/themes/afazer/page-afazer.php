<?php get_header(); ?>


  <!--======= SERVICES =========-->
  <section class="services">
    <div class="container">

      <ul class="row">

      <?php
          if ( have_posts() ) :
              while ( have_posts() ) : the_post();
                  get_template_part( 'template-parts/afazer/content', 'destaques' );
              endwhile;
          else : 
              get_template_part( 'template-parts/post/content', 'none' );
          endif; 
      ?>

      </ul>
    </div>
  </section>


  <section class="solution about-what-is">
    <div class="container">
      <div class="row">

        <?php
          $about_title       = get_post_meta( get_the_ID(), '_afazer_titulo', true);
          $about_description = get_post_meta( get_the_ID(), '_afazer_description', true);
          $about_image       = get_post_meta( get_the_ID(), '_afazer_image', true);
        ?>

        <div class="col-sm-6">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-about.jpg" class="img-responsive" alt="Logo AFAZER">
        </div>
        <div class="col-sm-6 text-center">
          <h3><?php echo $about_title; ?></h3>
          <p class="exo text-uppercase">
            <?php echo $about_description; ?>
          </p>
          <a href="#." class="btn">Fale Conosco</a>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="about-why">
        <h4>Por que o AFAZER?</h4>

        <?php
          if ( have_posts() ) :
              while ( have_posts() ) : the_post();
                  get_template_part( 'template-parts/afazer/content', 'porque' );
              endwhile;
          else : 
              get_template_part( 'template-parts/post/content', 'none' );
          endif; 
        ?>

      </div>
    </div>
  </section>

  <section class="offer-services fluxo-system">
    <div class="container">
      <!--======= TITTLE =========-->
      <div class="tittle">
        <h2>Como funciona o fluxo do sistema?</h2>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div role="tabpanel">
            <!--======= NAV TABS =========-->
            <ul class="nav nav-tabs" role="tablist">

              <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/afazer/content', 'fluxo-menu' );
                    endwhile;
                else : 
                    get_template_part( 'template-parts/post/content', 'none' );
                endif; 
              ?>

            </ul>
          </div>
        </div>

        <!--======= NAV TABS CONTENT =========-->
        <div class="col-sm-8">
          <div class="tab-content">


          <?php
              if ( have_posts() ) :
                  while ( have_posts() ) : the_post();
                      get_template_part( 'template-parts/afazer/content', 'fluxo-tabs' );
                  endwhile;
              else : 
                  get_template_part( 'template-parts/post/content', 'none' );
              endif; 
            ?>

            

          </div>
        </div>
      </div>
    </div>
  </section>


  <div class="who-we-are">
    <div class="container">
      <div class="row">

        <div class="col-md-12">
          <div class="tittle">
            <h2 class="before-green">Funcionalidades</h2>
          </div>
        </div>
          <div class="panel-group" id="accordion">

            <?php
              if ( have_posts() ) :
                  while ( have_posts() ) : the_post();
                      get_template_part( 'template-parts/afazer/content', 'funcionalidades' );
                  endwhile;
              else : 
                  get_template_part( 'template-parts/post/content', 'none' );
              endif; 
            ?>

          </div>
        </div>

      </div>
    </div>

    <section>
      <div class="container">
        <div class="about-why about-benefits">
          <h4>Benefícios</h4>


          <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    get_template_part( 'template-parts/afazer/content', 'beneficios' );
                endwhile;
            else : 
                get_template_part( 'template-parts/post/content', 'none' );
            endif; 
          ?>

          
          <!--<p class="low-level-list">
            <i class="fa fa-circle"></i>
            Nossa equipe está disponível das 08 hrs até às 18 hrs, de segunda a sexta-feira. Suporte via telefone, e-mail e Skype.
          </p>-->

        </div>
      </div>
    </section>
  </div>



  <section class="parthner">
    <div class="container">
      <!--======= TITTLE =========-->
      <div class="tittle">
        <h2>Clientes</h2>
      </div>

      <!--======= PARTHNERS =========-->
      <div class="parthner-slide">


        <?php
          if ( have_posts() ) :
              while ( have_posts() ) : the_post();
                  get_template_part( 'template-parts/afazer/content', 'clientes' );
              endwhile;
          else : 
              get_template_part( 'template-parts/post/content', 'none' );
          endif; 
        ?>
        
      </div>
    </div>
  </section>


<?php get_footer();?>