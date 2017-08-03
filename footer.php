</div>
<div id="footer-tim">
    <div class="footer-tim">
        <div class="box-it box-sz1">
            <div class="menu-sobre-container">
				<?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
            </div>
		</div>

		<div class="box-it box-sz1 footerborder-left">
			<a href="http://timfazciencia.com.br/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/imagens/logo_header_institutotim.png" alt="" title="" /></a>
		</div>
	</div>
	<div class="creditos">
		 Copyright TIM Celular 2017 - Todos os direitos reservados.
	</div>
</div>
<div class="container footer-mobile">
    <div class="footer-logo col-sm-5 col-xs-4">
        <a href="<?php echo get_option('home'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/imagens/logo_header_institutotim.png" alt="" title="" /></a>
    </div>
    <div class="footer-creditos col-sm-7 col-xs-8">
        &copy; TIM Celular <?php echo date('Y'); ?> - Todos os direitos reservados.
    </div>
</div>

<?php wp_footer(); ?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>
