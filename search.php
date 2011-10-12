<?php get_header(); ?>

	<article id="search-results">

	<?php if (have_posts()) : ?>

		<h1 class="pagetitle">Search Results for &quot;<?php the_search_query(); ?> &quot;</h1>

		<?php while (have_posts()) : the_post(); ?>

			<article <?php post_class() ?>>
				<h2 class="post-title">
					<div class="comment-count">
						<?php comments_popup_link('<div class="icon-comments"></div> 0', '<div class="icon-comments"></div> 1', '<div class="icon-comments"></div> %'); ?>
					</div>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
				</h2>
				<time><?php the_time(get_option('date_format')) ?></time>
                
				<?php the_content('Read the rest of this entry &raquo;'); ?>
				
				<?php if(function_exists('selfserv_shareaholic')) { selfserv_shareaholic(); } ?>
				  <div class="postmetadata">
					  <span class="icon-comments"></span>
					  <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('Add a comment', '1 Comment | Add a comment', '% Comments | Add a comment'); ?>
				  </div>
				  
			</article>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">No posts found. Try a different search?</h2>
		<?php get_search_form(); ?>

	<?php endif; ?>

	</article>

<?php get_footer(); ?>
