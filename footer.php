    <!-- FOOTER START -->

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/institutotim.css">

    <footer class="section section-primary">
      <div class="section section-footer">
        <div class="container">

          <div class="row">
            <div class="col-md-12">
              <div class="section">
                <div class="container">
                  <div class="row">
                    <div class="col-md-8 col-md-8 col-sm-12 col-xs-12">
                      <div class="col-md-3 col-md-3 col-sm-6 col-xs-12 text-left">
                        <p class="footertitle">O que é TIM Faz Ciência?</p>

            
                      <!--  
                        <p class="">Conheça TIM Tec</p>-->
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-left footerborder-left">
                        <p class="footertitle">CONHEÇA AS 7 OPERAÇÕES</p>

                          <?php 

                          wp_nav_menu ( array(
                          'theme_location' => '',
                          'menu' => 'footer-1', 
                          'menu-class' => '',
                          'items_wrap' => '<ul id="%1$s" class="footer-links">%3$s</ul>', 
                          'container' => '', 
                          'fallback_cb' => '', 
                          'depth' => 2)

                          ); ?>
                        <!--
                        <p class="">Funcionalidades</p>
                        <p class="">Instalação e desenvolvimento</p>-->
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-left footerborder-left">
                        <p class="footertitle">GALERIA DE PENSADORES</p>


                          <?php 

                          wp_nav_menu ( array(
                          'theme_location' => '',
                          'menu' => 'footer-3', 
                          'menu-class' => '',
                          'items_wrap' => '<ul id="%1$s" class="footer-links">%3$s</ul>', 
                          'container' => '', 
                          'fallback_cb' => '', 
                          'depth' => 2)

                          ); ?>
                        <!--<p class="">Lista de Cursos</p>-->
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-left footerborder-left">
                        <p class="footertitle">Queremos ouvir você</p>

                          <?php 

                          wp_nav_menu ( array(
                          'theme_location' => '',
                          'menu' => 'footer-4', 
                          'menu-class' => '',
                          'items_wrap' => '<ul id="%1$s" class="footer-links">%3$s</ul>', 
                          'container' => '', 
                          'fallback_cb' => '', 
                          'depth' => 2)

                          ); ?>

                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center footerborder-left">
                      <div class="row">
                        <br>
                        <br>
                        <a href="https://institutotim.org.br" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_header_institutotim.png"></a>
                        <h5 class="footertitle">Instituto TIM nas Redes</h5>
                        <a href="mailto:contato@timfazciencia.com.br"><i class="fa fa-fw fa-lg text-inverse fa-at"></i></a>
                        <a href="https://www.facebook.com/timfazciencia"><i class="fa fa-facebook fa-fw fa-lg text-inverse"></i></a>
                        <!--<a href="https://twitter.com/"><i class="fa fa-fw hub fa-lg text-inverse fa-twitter"></i></a> -->

                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
             <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 text-center footertitle">
               <div class="row">
                  <br><br><br><br><br>
                 Copyright TIM Celular 2017 - Todos os direitos reservados.
              </div>
            </div>
          </div>
        </div>
<br />
<br />
      </div>

    </footer>

</body>
</html>
