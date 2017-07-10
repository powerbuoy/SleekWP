<section id="posts">

	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post() ?>
			<article>

				<figure>
					<a href="<?php the_permalink() ?>">
						<?php the_post_thumbnail('medium') ?>
					</a>
				</figure>

				<header>

					<h2>
						<a href="<?php the_permalink() ?>">
							<?php the_title() ?>
						</a>
					</h2>

					<p>
						<time datetime="<?php echo get_the_time('Y-m-j') ?>"><?php echo get_the_time(get_option('date_format')) ?></time>
						<?php if ($terms = sleek_get_post_terms($post->ID, get_post_type(), true)) : ?>
							<span><?php echo implode(', ', $terms) ?></span>
						<?php endif ?>
						<span><?php the_author_posts_link() ?></span>
					</p>

				</header>

				<?php the_excerpt() ?>

				<a href="<?php the_permalink() ?>"><?php _e('Read more', 'sleek') ?></a>

			</article>
		<?php endwhile ?>
	<?php else : ?>
		<p><strong><?php _e('Sorry, nothing was found here.', 'sleek') ?></strong></p>
	<?php endif ?>

</section>

<?php $nav = str_replace('<h2 class="screen-reader-text">REMOVE</h2>', '', get_the_posts_pagination(['screen_reader_text' => 'REMOVE'])) ?>
<nav id="pagination">

	<?php echo $nav ?>

</nav>
