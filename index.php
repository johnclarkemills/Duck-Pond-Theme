<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2 class="post-title">
					<div class="comment-count">
						<?php comments_popup_link('<div class="icon-comments"></div> 0', '<div class="icon-comments"></div> 1', '<div class="icon-comments"></div> %'); ?>
					</div>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
				</h2>
				<time><?php the_time(get_option('date_format')) ?></time>
				
				
				<?php the_content('Read the rest of this entry &raquo;'); ?>
				
		        <?php wp_link_pages('before=<p>&after=</p>&next_or_number=number&pagelink=page %'); ?>
				
				<?php if(function_exists('selfserv_shareaholic')) { selfserv_shareaholic(); } ?>
				<div class="postmetadata">
					<span class="icon-comments"></span>
					<?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('Add a comment', '1 Comment | Add a comment', '% Comments | Add a comment'); ?>
				</div>
				
				<hr class="clearfix" />
			</article>

		<?php endwhile; ?>

			<ul class="prevnext">
				<li><?php next_posts_link('&lt; Older Entries') ?></li>
				<li><?php previous_posts_link('Newer Entries &gt;') ?></li>
			</ul>

	<?php else : ?>

		<article class="noposts">
			<h2>404 - Content Not Found</h2>
			<p>We don't seem to be able to find the content you have requested - why not try a search below?</p>
			<?php get_search_form(); ?>
		</article>

	<?php endif; ?>


<?php get_footer(); ?>
