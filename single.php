<?php get_header() ?>

<main>

	<?php get_template_part('modules/post') ?>
	<?php get_template_part('modules/social-media-buttons') ?>
	<?php comments_template('/modules/comments.php') ?>
	<?php get_template_part('modules/post-comment') ?>

</main>

<?php get_sidebar() ?>
<?php get_footer() ?>
