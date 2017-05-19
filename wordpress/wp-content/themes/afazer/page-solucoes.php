<?php get_header(); ?>


  <section class="offer-services">
    <div class="container">
      <!--======= TITTLE =========-->
      <div class="tittle">
        <h2>O aplicativo é dividido em módulos e serviços que podem compor sua licença de uso de acordo com sua necessidade e possibilidades. </h2>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div role="tabpanel">
            <!--======= NAV TABS =========-->
            <ul class="nav nav-tabs" role="tablist">

            <?php
              if ( have_posts() ) :
                  while ( have_posts() ) : the_post();
                      get_template_part( 'template-parts/solucoes/content', 'modulos-menu' );
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
                      get_template_part( 'template-parts/solucoes/content', 'modulos-tabs' );
                  endwhile;
              else : 
                  get_template_part( 'template-parts/post/content', 'none' );
              endif; 
            ?>

          </div>
        </div>
      </div>
      <div class="text-center">
        <a href="contato/" class="btn">Solicite um Orçamento</a>
      </div>
    </div>
  </section>

  <section class="services why-choose our-solution elementos">
    <div class="container">
      <div class="tittle">
        <h2>Elementos do Sistema</h2>
      </div>

      <!--======= SERVICES ROW =========-->
      <ul class="row">


        <?php
          if ( have_posts() ) :
              while ( have_posts() ) : the_post();
                  get_template_part( 'template-parts/solucoes/content', 'elementos' );
              endwhile;
          else : 
              get_template_part( 'template-parts/post/content', 'none' );
          endif; 
        ?>

    
      </ul>
      <div class="text-center">
        <a href="contato/" class="btn">Solicite um Orçamento</a>
      </div>
    </div>
  </section>

  <section class="pricing">
    <div class="container">
      <div class="service-package">
        <div class="tittle">
          <h2>Pacotes de Serviço</h2>
        </div>

        <div class="package-table">
          <table>
            <thead>
              <tr>
                <th>SERVIÇOS</th>
                <th>BÁSICO</th>
                <th>COMPLETO</th>
              </tr>
            </thead>
            <tbody>


              <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/solucoes/content', 'pacotes' );
                    endwhile;
                else : 
                    get_template_part( 'template-parts/post/content', 'none' );
                endif; 
              ?>

             
            </tbody>
          </table>
        </div>

        <div class="package-table">
          <table>
            <thead>
              <tr>
                <th>SERVIÇOS ADICIONAIS</th>
              </tr>
            </thead>
            <tbody>


              <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/solucoes/content', 'adicionais' );
                    endwhile;
                else : 
                    get_template_part( 'template-parts/post/content', 'none' );
                endif; 
              ?>

              
            </tbody>
          </table>
        </div>

        <div class="package-table">
          <table>
            <thead>
              <tr>
                <th>MÓDULOS INDEPENDENTES</th>
              </tr>
            </thead>
            <tbody>


              <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/solucoes/content', 'independentes' );
                    endwhile;
                else : 
                    get_template_part( 'template-parts/post/content', 'none' );
                endif; 
              ?>

             
            </tbody>
          </table>
        </div>
      </div>
      <div class="text-center">
        <a href="contato/" class="btn">Solicite um Orçamento</a>
      </div>
    </div>
  </section>







  </div>

<?php get_footer(); ?>