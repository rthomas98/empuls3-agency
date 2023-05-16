<section class="pink-banner py-5 position-relative">
    <img class="stripe-right" src="<?php echo get_stylesheet_directory_uri(); ?>/img/stripe-right.svg" alt="a red line">
    <div class="container section-index pt-5">
        <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-md-12 col-lg text-center mb-5 mb-sm-5 mb-md-5 mb-lg-0">
                <?php $image = get_sub_field( 'image' ); ?>
                <?php $size = 'full'; ?>
                <?php if ( $image ) : ?>
                    <?php echo wp_get_attachment_image( $image, $size ); ?>
                <?php endif; ?>
            </div>
            <div class="col-sm-12 col-md-12 col-lg">
                <h1 class="display-5">
                    <?php the_sub_field( 'header' ); ?>
                </h1>
                <p class="lead">
                    <?php the_sub_field( 'content' ); ?>
                </p>
            </div>
        </div>
    </div>
</section>