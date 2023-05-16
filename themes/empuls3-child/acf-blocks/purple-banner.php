<section class="purple-banner py-5 position-relative">
    <img class="stripe-left" src="<?php echo get_stylesheet_directory_uri(); ?>/img/stripe-left.svg" alt="a red line">
    <div class="container section-index pt-5">
        <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-6 mb-5 mb-sm-5 mb-md-5 mb-lg-0">
                <h1 class="display-5">
                    <?php the_sub_field( 'header' ); ?>
                </h1>
                <p class="lead">
                    <?php the_sub_field( 'sub_header' ); ?>
                </p>

            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 text-center">
                <?php $image = get_sub_field( 'image' ); ?>
                <?php $size = 'full'; ?>
                <?php if ( $image ) : ?>
                    <?php echo wp_get_attachment_image( $image, $size ); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>