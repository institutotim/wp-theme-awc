<!DOCTYPE html>
<?php $t =& peTheme();?>
<!--[if IE 8 ]><html class="desktop ie8 no-js" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 9 ]><html class="desktop ie9 no-js" <?php language_attributes(); ?>><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" <?php language_attributes();?>><!--<![endif]-->
   
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title><?php $t->header->title(); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<meta name="format-detection" content="telephone=no" />
		<!--?php wp_enqueue_script("jquery"); ?-->


		<!--[if lt IE 9]>
		<script type="text/javascript">/*@cc_on'abbr article aside audio canvas details figcaption figure footer header hgroup mark meter nav output progress section summary subline time video'.replace(/\w+/g,function(n){document.createElement(n)})@*/</script>
		<![endif]-->
		<script type="text/javascript">
			if(Function('/*@cc_on return document.documentMode===10@*/')()){
				document.documentElement.className+=' ie10';
			}
			</script>
		<script type="text/javascript">
			(function(H){
				H.className=H.className.replace(/\bno-js\b/,'js')
			})
			(document.documentElement)
		</script>
		
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

		<!-- favicon -->
		<link rel="shortcut icon" href="<?php echo $t->options->get("favicon") ?>" />

		<?php $t->font->load(); ?>

		<!-- wp_head() -->
		<?php $t->header->wp_head(); ?>





<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68183272-1', 'auto');
  ga('send', 'pageview');

</script>

	</head>
	<body <?php $t->content->body_class(); ?>>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/institutotim.css">
<div class="header">
        <div class="section navbar-overtop-tim">
      <div class="container ">
        <div class="row">
          <div class="col-lg-12">
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
              <a href="http://tim.com.br/" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo_header_portal_tim.png" title="<?php bloginfo( 'name' ); ?>" class="img-responsive"></a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 hidden-lg visible-md" >
              <a href="http://tim.com.br">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo_top_header_institutotim.png" title="<?php bloginfo( 'name' ); ?>" class="img-responsive"></a>
           </div>
          </div>
        </div>
      </div>
    </div>
    <!-- NAVBAR PORTAL TIM END -->
    <!-- NAVBAR MENU START -->
    <div class="section navbar-maintop-tim">
      <div class="container">
        <div class="row row-eq-height">
         <div class="col-lg-5 ">
            <div class="col-md-6 menu-fixed-bottom-left menu-fixed-border-left">
              <a href="http://tim.com.br"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_header_institutotim.png" title="<?php bloginfo( 'name' ); ?>" class="img-responsive"></a>
            </div>
            <div class="col-md-6 menu-fixed-bottom-right" >        
              <a href="<?php bloginfo( 'url'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo_awc.png" class="img-responsive"></a>
            </div>
          </div>

            <div class="col-lg-7">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="search">
                      <form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
                         <input type="search" class="search" placeholder="<?php echo esc_attr_x( 'O que você procura?', 'placeholder' ) ?>"
                       value="<?php echo get_search_query() ?>" name="s"
                       title="<?php echo esc_attr_x( 'O que você procura?', 'label' ) ?>" />
                         <span class="icon"><i class="fa fa-search"></i></span>
                   </form>
                    
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right social">
                      <a href="#"><i class="fa fa-at fa-fw fa-lg text-inverse"></i></a>
                      <a href="#"><i class="fa fa-facebook fa-fw fa-lg text-inverse"></i></a>
                      <a href="#"><i class="fa fa-fw fa-lg fa-youtube-play text-inverse"></i></a>
                      <a href="#"><i class="fa fa-flickr fa-fw fa-lg hub text-inverse"></i></a>
                </div>
              </div>

      <div class="row">
          <nav class="navbar navbar-default border-top">
            <div class="container-fluid">

                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button> 

           <div id="navbar" class="navbar-collapse collapse #navbar" aria-expanded="false">
<!--          <?php
                  wp_nav_menu( array(
                          'menu'              => 'header',
                          'depth'             => 2,
                          'container'         => 'div',
//                'container_class'   => 'collapse navbar-collapse',
                          'container_id'      => 'bs-example-navbar-collapse-1',
                          'menu_class'        => 'nav navbar-nav navbar-right',
                          'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                          'walker'            => new wp_bootstrap_navwalker())
                        );
                  ?>
-->
                              </div>
          </nav>
      </div>

          </div>  <!-- /.navbar-collapse -->
        
        </div><!-- /.container-fluid -->
 </div>
    <!-- NAVBAR MENU END -->

</div> <!-- header-->
            
		<?php get_template_part("menu"); ?>
		<?php $template = is_page() ? $t->content->pageTemplate() : false; ?>

		<?php if ($template === "page_home.php"): ?>
			<?php get_template_part("headlines"); ?>
		<?php endif; ?>