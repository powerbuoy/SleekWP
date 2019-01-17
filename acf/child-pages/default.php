<?php
	$parentId = $child_pages_page_id ? $child_pages_page_id : $post->ID;

	$rows = get_pages([
		'parent' => $parentId,
		'sort_column' => 'menu_order',
		'sort_order' => 'ASC'
	]);
?>

<?php if ($rows) : ?>
	<section id="child-pages">

		<?php if ($child_pages_title or $child_pages_description) : ?>
			<header>

				<?php if ($child_pages_title) : ?>
					<h2><?php echo $child_pages_title ?></h2>
				<?php endif ?>

				<?php echo $child_pages_description ?>

			</header>
		<?php endif ?>

		<?php foreach ($rows as $post) : setup_postdata($post) ?>
			<?php $target = get_field('redirect_url') ? 'target="_blank"' : '' ?>
			<article>

				<?php if (has_post_thumbnail()) : ?>
					<figure>
						<a href="<?php the_permalink() ?>" <?php echo $target ?>>
							<?php the_post_thumbnail('medium') ?>
						</a>
					</figure>
				<?php endif ?>

				<h3>
					<a href="<?php the_permalink() ?>" <?php echo $target ?>>
						<?php the_title() ?>
					</a>
				</h3>

				<?php the_excerpt() ?>

				<a href="<?php the_permalink() ?>" <?php echo $target ?>><?php _e('Read more', 'sleek') ?></a>

			</article>
		<?php endforeach; wp_reset_postdata() ?>

	</section>
<?php else : ?>
	<p class="error"><?php _e('This page does not have any child pages. You can remove this module until you add some.', 'sleek') ?></p>
<?php endif ?>
