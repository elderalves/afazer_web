


  <!--======= FOOTER =========-->
  <footer>
    <div class="container">
      <ul class="row" style="display: flex;">
        <li class="col-sm-4 hidden-xs" style="align-self: center;">
          <a href="<?php echo home_url(); ?>">
            <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-footer.png" alt="" >
          </a>
        </li>

        <!--======= HAPPY CLIENTS =========-->
        <li class="col-sm-3 col-sm-offset-1">

          <!--======= LINKS =========-->
          <h5>MENU</h5>
          <hr>
          <div class="links">
            <ul>
              <li><a href="<?php echo home_url(); ?>">Home</a></li>
              <li><a href="<?php echo get_permalink( get_page_by_path( 'afazer' ) ); ?>">AFAZER</a></li>
              <li><a href="<?php echo get_permalink( get_page_by_path( 'solucoes' ) ); ?>">Soluções AFAZER</a></li>
              <li><a href="<?php echo get_permalink( get_page_by_path( 'blog' ) ); ?>">Blog</a></li>
              <li><a href="<?php echo get_permalink( get_page_by_path( 'cases' ) ); ?>">Cases</a></li>
              <li><a href="<?php echo get_permalink( get_page_by_path( 'contato' ) ); ?>">Fale Conosco</a></li>
            </ul>
          </div>
        </li>

        

        <!--======= HAPPY CLIENTS =========-->
        <li class="col-sm-3 col-sm-offset-1">

          <!--======= LINKS =========-->
          <h5>Fale Conosco</h5>
          <hr>
          <!-- <p>Address: 44 New Design Street,
            Melbourne 005 </p> -->
          <p>Tel: +55 (27) 0000 0000</p>
          <p>Email: contato@afazer.com</p>

          <!--======= SOCIAL ICONS =========-->

          <ul class="social_icons">
            <li class="facebook"> <a href="#."><i class="fa fa-facebook"></i> </a></li>
            <li class="twitter"> <a href="#."><i class="fa fa-twitter"></i> </a></li>
            <li class="linkedin"> <a href="#."><i class="fa fa-google-plus"></i> </a></li>
            <li class="tumblr"> <a href="#."><i class="fa fa-instagram"></i> </a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="rights">
      <p>Copyright © 2017 AFAZER.</p>
    </div>
  </footer>
</div>


<?php wp_footer(); ?>
</body>
</html>