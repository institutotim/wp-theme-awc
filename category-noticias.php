<?php $t =& peTheme(); ?>
<?php $content =& $t->content; ?>
<?php get_header(); ?>

<section class="content padded container blog" id="blog-category">
	<div class="title grid-full">
		<h1 class="news-page-title"><?php printf(__("%s",'Pixelentity Theme/Plugin'),single_cat_title("",false)); ?></h1>
		<span class="border"></span>
	</div>
	<div class="grid-4">			
		<?php if(have_posts()) : while(have_posts()) :  the_post(); ?>
			<div class="news-post-block">
				<h2 class="news-post-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p class="news-post-meta"><?php echo get_the_date(); ?></p>
				<?php if(has_post_thumbnail()) { ?>
					<div class="news-thumb"><?php echo get_the_post_thumbnail(); ?></div>
				<?php } ?>
				<div class="news-excerpt"><?php the_excerpt() ?></div>
			</div>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>
