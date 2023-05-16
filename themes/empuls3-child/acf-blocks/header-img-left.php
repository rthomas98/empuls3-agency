<section class="header-img-left pb-5">
    <img class="stripe-right" src="<?php echo get_stylesheet_directory_uri(); ?>/img/stripe-right.svg" alt="a red line">
    <div class="container-fluid section-index">
        <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-6 text-center mb-5 mb-sm-5 mb-md-5 mb-lg-0">
                <?php $image = get_sub_field( 'image' ); ?>
                <?php if ( $image ) : ?>
                    <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" width="600" />
                <?php endif; ?>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 p-4 p-sm-4 p-md-5 p-lg-5">
                <p class="lead">
                    <?php the_sub_field( 'sub_header' ); ?>
                </p>
                <h1 class="display-3">
                    <?php the_sub_field( 'header' ); ?>
                </h1>
                <p>
                    <?php the_sub_field( 'content' ); ?>
                </p>
            </div>
        </div>
    </div>
</section>



