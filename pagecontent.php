<?php $t =& peTheme(); ?>
<?php $content =& $t->content; ?>
<?php $meta =& $content->meta(); ?>
<?php $hasFeatImage = $content->hasFeatImage(); ?>
<?php if ( defined( 'HOME_SLIDER') ) echo '<div class="slider-cover">'; ?>
<section class="content container" id="<?php $content->slug(); ?>">

	<div class="title grid-full">
		<h2><?php $content->title(); ?></h2>
		<span class="border"></span>

		<div class="sub-heading">			
			<?php $content->content(); ?>
		</div>
	</div>
	<div class="clearfix"></div>

	<?php
		if ( $hasFeatImage ) {

			echo '<div class="animated slide" data-appear-bottom-offset="100">';

			$content->img(960,330);

			echo '</div>';

		}
	?>

</section>
<?php if ( defined( 'HOME_SLIDER') ) echo '</div>'; ?>
