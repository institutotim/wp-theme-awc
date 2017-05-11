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

            <ul class="pagination">
            		<?php if (function_exists("pagination")) {
			 pagination($additional_loop->max_num_pages);
		} ?>
            </ul>
<style>
.pagination {
  display: inline-block;
  padding-left: 0;
  margin: 20px 0;
  border-radius: 4px;
}
.pagination > a, 
.pagination > span, {
  display: inline;
}
.pagination > a ,
.pagination > span {
  position: relative;
  float: left;
  padding: 6px 12px;
  line-height: 1.42857143;
  text-decoration: none;
  color: #f05236;
  background-color: #ffffff;
  border: 1px solid #dddddd;
  margin-left: -1px;
}
.pagination > a:first-child,
.pagination > span:first-child {
  margin-left: 0;
  border-bottom-left-radius: 4px;
  border-top-left-radius: 4px;
}
.pagination > a:last-child,
.pagination > span:last-child{
  border-bottom-right-radius: 4px;
  border-top-right-radius: 4px;
}
.pagination > a:hover,
.pagination > span:hover,
.pagination > a:focus,
.pagination >  span:focus {
  color: #23547f;
  background-color: #eeeeee;
  border-color: #dddddd;
}
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
  z-index: 2;
  color: #ffffff;
  background-color: #337cbb;
  border-color: #337cbb;
  cursor: default;
}
.pagination > .disabled > span,
.pagination > .disabled > span:hover,
.pagination > .disabled > span:focus,
.pagination > .disabled > a,
.pagination > .disabled > a:hover,
.pagination > .disabled > a:focus {
  color: #777777;
  background-color: #ffffff;
  border-color: #dddddd;
  cursor: not-allowed;
}
.pagination-lg > li > a,
.pagination-lg > li > span {
  padding: 10px 16px;
  font-size: 18px;
}
.pagination-lg > li:first-child > a,
.pagination-lg > li:first-child > span {
  border-bottom-left-radius: 5px;
  border-top-left-radius: 5px;
}
.pagination-lg > li:last-child > a,
.pagination-lg > li:last-child > span {
  border-bottom-right-radius: 5px;
  border-top-right-radius: 5px;
}
.pagination-sm > li > a,
.pagination-sm > li > span {
  padding: 5px 10px;
  font-size: 12px;
}
.pagination-sm > li:first-child > a,
.pagination-sm > li:first-child > span {
  border-bottom-left-radius: 2px;
  border-top-left-radius: 2px;
}
.pagination-sm > li:last-child > a,
.pagination-sm > li:last-child > span {
  border-bottom-right-radius: 2px;
  border-top-right-radius: 2px;
}
</style>
	</div>
	<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>
