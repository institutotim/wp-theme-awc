<!DOCTYPE html>
<?php $t =& peTheme();?>
<!--[if IE 8 ]><html class="desktop ie8 no-js" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 9 ]><html class="desktop ie9 no-js" <?php language_attributes(); ?>><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" <?php language_attributes();?>><!--<![endif]-->

	<head>
	  	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
<style>
@import "css/fonttim.css";
#tim-container {
    width: 100%;
    margin: 0;
    padding: 0;
    background-color: #004691
}
.logo-it {
    background-color: #003264;
    border-bottom: 2px solid #82b9e6
}
.menu-it {
    background-color: #004691;
}
#mega-menu-wrap-footer-1 #mega-menu-footer-1 > li.mega-menu-item > a.mega-menu-link,
#mega-menu-wrap-footer-1 .mega-menu-toggle {
    background: #004691 none repeat scroll 0 0;
}
#mega-menu-wrap-footer-1 #mega-menu-footer-1 > li.mega-menu-item > a.mega-menu-link:hover {
    background-color: #00a4e4
}
/*.mega-menu-item li a:hover {background-color:#00a4e4}*/

.menu-fixed-bottom-left {
    left: 0;
    position: relative;
    top: 30px;
}
/*
#modal-home .bg-modal {
  margin-top: -200px;
}
*/

.nav-it {}
/*border-top:1px solid #c00;margin-top:15px} */

#mega-menu-wrap-footer-1,
#mega-menu-wrap-header-1 {
    border-top: 1px solid #00a4e4;
    margin-top: -5px
}
.search2 {
    width: 300px;
    color: #666666;
    height: 43px;
    font-size: 14px;
    padding-bottom: 5px;
    padding-top: 5px;
    position: relative;
}
.search2 input {
    background: #fff none repeat scroll 0 0 !important;
    border: 1px solid #fff;
    border-radius: 4px;
    font-size: 9pt;
    height: 34px;
    width: 100%;
}
.search2 input {
    text-indent: 5px;
}
.search2 .fa-search {
    position: absolute;
    right: 10px;
    top: 42%;
}
.navbar-overtop-tim-en-pt a {
    color: #82b9e6;
}
.navbar-maintop-tim {
    background-color: #004691;
    color: #ffffff;
    font-family: "TIMSansWeb", Fallback, times-new-roman;
    font-size: 12px;
    height: 90px;
    letter-spacing: 0;
    padding: 0;
}
#mega-menu-wrap-footer-1 #mega-menu-footer-1 > li.mega-menu-flyout ul.mega-sub-menu li.mega-menu-item a.mega-menu-link {
    background: #428bca none repeat scroll 0 0;
    color: #fff
}
.box-it li,
.box-it,
.creditos,
.box-sz1 h2,
.box-sz2 h2 {
    font-family: 'TIMSansWeb', Fallback, times-new-roman
}
.box-it li {
    color: #fff;
    padding-top: 15px
}
.box-sz1 h2,
.box-sz2 h2 {
    color: #89c3ff;
    font-size: 11pt
}
@media only screen and (min-width: 360px) {
    #footer-tim {
        width: 100%;
        background-color: #004691;
        margin-top: 200px;
        height: 525px;
        color: #89c3ff
    }
    .home-first-section {
        margin-top: 0px
    }
    .box-sz2 p {
        margin-top: 5px
    }
    .container-2 {
        width: 360px
    }
    .box-it {
        float: none;
        padding: 20px
    }
    .box-sz1 {
        width: 320px
    }
    .nav-f {
        display: block;
        width: 340px;
        z-index: 9999;
        position: relative
    }
    .bar-primary,
    .bar-secundary {
        padding-left: 10px;
        width: 360px
    }
    .menu-fixed-border-left {
        border-color: #004691
    }
    .bar-primary {
        height: 25px;
        padding-top: 5px
    }
    .bar-secundary {
        height: 125px
    }
    .box-sz2 {
        width: 320px;
        text-align: center
    }
    .footer-tim {
        width: 340px;
        margin: 0 auto;
        height: 300px;
        font-size: 10pt;
        padding: 10px;
        background-color: #004691
    }
    .creditos {
        width: 340px;
        height: 50px;
        text-align: center;
        color: #89c3ff;
        font-size: 9pt;
        clear: both;
        margin-top: 170px
    }
    .box-sz2 h2 {
        padding-top: 10px
    }
    .box-it li a {
        color: #fff
    }
    .footerborder-left {} .rede-social {
        display: none
    }
    .nav-e {
        padding-bottom: 10px;
        padding-top: 35px
    }
    .nav-i {
        margin-top: 5px
    }
    .logo2 {
        float: right;
        width: 200px;
        height: 22px;
        margin-top: -20px;
        padding: 0
    }
    .logo2 img {
        width: 160px
    }
    .tfc img {
        width: 71px
    }
    .tfc {
        width: 100px;
        float: left;
        margin-top: 7px
    }
    .search2 {
        margin-left: 15px
    }
}

@media only screen and (min-width: 768px) {
    .nav-f {
        width: 420px;
        float: left;
        padding-left: 70px;
        display: block
    }
    .creditos {
        margin-top: 190px;
        width: 750px
    }
    #footer-tim {
        margin-top: 40px
    }
}

@media only screen and (min-width: 960px) {
    #footer-tim {
        width: 100%;
        background-color: #004691;
        height: 300px;
        color: #89c3ff;
        margin-top: 25px
    }
    .box-it {
        float: left;
        padding: 20px
    }
    .box-sz1 {
        width: 150px
    }
    .box-sz2 {
        width: 310px;
        text-align: center
    }
    .box-sz3 {
        width: 700px
    }
    #menu-menu-1 li {
        display: inline-block
    }
    .fa-search {
        margin-top: 0px
    }
    .logo2 img {
        width: 270px
    }
    .tfc img {
        width: 71px
    }
    .logo2 {
        width: 280px;
        float: left;
        margin-top: -5px;
        padding-right: 20px
    }
    .tfc {
        width: 120px;
        float: left;
        padding-left: 20px;
        padding-top: 29px;
        margin-top: 0
    }
    .footer-tim {
        width: 1000px;
        margin: 0 auto;
        height: 170px;
        font-size: 10pt;
        padding: 30px
    }
    .creditos {
        width: 1000px;
        height: 25px;
        margin: 0 auto;
        padding-top: 50px
    }
    .container-2 {
        width: 1170px;
        margin: 0 auto
    }
    .search {
        padding-left: 0
    }
    .bar-secundary {
        height: 90px
    }
    .nav-f {
        width: 620px;
        float: left;
        padding-left: 70px;
        display: block;
        z-index: 1;
        height: 90px
    }
    .menu-fixed-border-left {
        border-color: #155ea3;
        border-style: solid;
        border-width: 0 2px 0 0;
    }
    .menu-fixed-bottom-left {
        top: 34px;
    }
    .footerborder-left {
        border-image: linear-gradient(to right, rgba(24, 86, 154, 1), rgba(1, 60, 125, 1)) 1 100% 1 100%;
        border-style: solid;
        border-width: 3px 0 3px 3px;
        height: 150px;
    }
    #mega-menu-wrap-footer-1,
    #mega-menu-wrap-footer-1 #mega-menu-footer-1,
    #mega-menu-wrap-footer-1 #mega-menu-footer-1 ul.mega-sub-menu,
    #mega-menu-wrap-footer-1 #mega-menu-footer-1 li.mega-menu-item,
    #mega-menu-wrap-footer-1 #mega-menu-footer-1 a.mega-menu-link {
        background-color: #004691 !important
    }
    .mega-sub-menu li a {
        color: #fff !important
    }
    .main {
        margin-top: 0px
    }
    .footer-links {
        margin-left: -40px
    }
    .footer-links a {
        color: #ffffff;
        padding-top: 5px;
        line-height: 20px;
        text-decoration: none;
    }
    .footer-links a:hover {
        color: #89c3ff
    }
    .footer-links li {
        list-style: none;
        color: #ffffff;
        padding-top: 5px;
        line-height: 0px;
    }
    ul.rede-social {
        list-style: none;
    }
    .rede-social {
        width: 200px;
        float: right;
        display: block
    }
    .rede-social li {
        display: inline-block;
        padding: 5px
    }
    .rede-social li a {
        color: #fff
    }
    .nav-i {
        width: 550px;
        height: 30px
    }
    .nav-e {
        width: 350px;
        float: left;
        padding-bottom: 0;
        padding-top: 0
    }
    .search2 {
        margin-left: 0
    }
}
</style>

</head>
<body <?php $t->content->body_class(); ?>>


<div id="tim-container">

	<div class="logo-it">
		<div class="container-2 bar-primary">
			<a href="http://tim.com.br/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/imagens/logo_header_portal_tim.png" title="Instituto TIM" alt="Instituto TIM" /></a>
		</div>
	</div>

	<div class="menu-it">
		<div class="container-2 bar-secundary">
			<div class="logo2 menu-fixed-bottom-left menu-fixed-border-left">
				<a href="https://institutotim.org.br/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/imagens/logo_header_institutotim.png" alt="" title="" /></a>
			</div>

			<div class="tfc cor" style="height:35px">
				<a href="<?php echo get_option('home'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_awc.png" alt="" title="" /></a>
			</div>

			<div class="nav-f">
                                <div class="nav-i">
                                        <div class="nav-e">
                                                    <div class="search2">
                                                            <form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
                                                                    <input type="search" class="search2" placeholder="O que você procura?" value="" name="s" title="O que você procura?" />
                                                                    <span class="icon"><i class="fa fa-search"></i></span>
                                                            </form>
                                                    </div>
                                        </div>
                                        <div class="rede-social">

                                          </div>
                                </div>
				<div class="nav-it">
					<?php wp_nav_menu( array( 'theme_location' => 'header-1' ) ); ?>
				</div>
			</div>
		</div>
	</div>
</div>


		<?php $template = is_page() ? $t->content->pageTemplate() : false; ?>

		<?php if ($template === "page_home.php"): ?>
			<?php get_template_part("headlines"); ?>
		<?php endif; ?>
