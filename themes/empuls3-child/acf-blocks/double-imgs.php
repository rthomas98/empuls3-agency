<section class="double-imgs py-5">
<img class="stripe-right" src="<?php echo get_stylesheet_directory_uri(); ?>/img/stripe-right.svg" alt="a red line"> 
	<div class="container">
		<div class="row d-flex align-items-center">
			<div class="col-sm-6 col-md-6 col-lg-3 section-index">
				<?php $first_image = get_sub_field( 'first_image' ); ?>
				<?php if ( $first_image ) : ?>
					<img class="rounded mb-5 mb-sm-5 mb-md-5 mb-lg-0" src="<?php echo esc_url( $first_image['url'] ); ?>" alt="<?php echo esc_attr( $first_image['alt'] ); ?>" />
				<?php endif; ?>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-3 section-index">
				<?php $second_image = get_sub_field( 'second_image' ); ?>
				<?php if ( $second_image ) : ?>
					<img class="rounded mb-5 mb-sm-5 mb-md-5 mb-lg-0" src="<?php echo esc_url( $second_image['url'] ); ?>" alt="<?php echo esc_attr( $second_image['alt'] ); ?>" />
				<?php endif; ?>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-6 ps-5 section-index">
				<p class="lead">
					<?php the_sub_field( 'sub_header' ); ?>
				</p>
				<h2 class="display-4"><?php the_sub_field( 'header' ); ?></h2>

				<?php the_sub_field( 'content' ); ?>
					
				<a class="btn btn-warning mt-4" role="button" href="<?php the_sub_field( 'button_link' ); ?>">
					<?php the_sub_field( 'button_label' ); ?>
				</a>

			</div>
		</div>
	</div>
</section>