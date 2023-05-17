<?php
/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="container py-5">
		<div class="row d-flex align-items-center">
			<div class="col-sm-12 col-md-12 col-lg-6">
				<header class="entry-header">

					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

					<div class="entry-meta">

						<?php understrap_posted_on(); ?>

					</div><!-- .entry-meta -->

				</header><!-- .entry-header -->
			</div>
			<div class="col-sm-12 col-md-12 col-lg-6 text-center">
				<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
			</div>
		</div>
	</div>

	<div class="entry-content mt-4">

		<?php
		the_content();
		understrap_link_pages();
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer my-5">

		<div >
			<?php understrap_entry_footer(); ?>
		</div>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

<div class="container related-posts my-5">
	<div class="row mb-4">
		<div class="col">
			<h2>Related Posts</h2>
		</div>
	</div>

	<div class="row">
		<?php
		$categories = get_the_category($post->ID);
		if ($categories) {
			$category_ids = array();
			foreach($categories as $category) $category_ids[] = $category->term_id;

			$args = array(
				'category__in'   => $category_ids,
				'post__not_in'   => array($post->ID),
				'posts_per_page' => 3,
				'ignore_sticky_posts' => 1
			);
			$related_posts = new WP_Query( $args );

			while ( $related_posts->have_posts() ) : $related_posts->the_post(); ?>
				<div class="col-sm-12 col-md-12 col-lg-4 related-post">
					<?php if ( has_post_thumbnail() ) : ?>
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('medium', array('class' => 'img-fluid rounded mb-3')); ?>
						</a>
					<?php endif; ?>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<p><?php the_excerpt(); ?></p>
				</div>
			<?php endwhile;
			wp_reset_postdata();
		}
		?>
	</div>
</div>

