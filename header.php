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
                 <link href='//fonts.googleapis.com/css?family=Open+Sans:400italic,300,400,600,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>



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

		<?php get_template_part("menu"); ?>

		<?php $template = is_page() ? $t->content->pageTemplate() : false; ?>

		<?php if ($template === "page_home.php"): ?>
			<?php get_template_part("headlines"); ?>
		<?php endif; ?>
