<div class="three-slot-header py-5 position-relative">
    <img class="mt-4 white-shape" src="<?php echo get_stylesheet_directory_uri(); ?>/img/white-shape.svg" alt="a white shape">
    <img class="stripe-right" src="<?php echo get_stylesheet_directory_uri(); ?>/img/stripe-right.svg" alt="a red line">

    <div class="container-fluid p-5 section-index">
        <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <p class="lead">
                    <?php the_sub_field( 'sub_header' ); ?>
                </p>
                <h1 class="display-3">
                    <?php the_sub_field( 'header' ); ?>
                </h1>
                <?php the_sub_field( 'content' ); ?>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="row text-center">
                    <div class="col col-sm-4 col-md-4 col-lg-4">
                        <?php $image_one = get_sub_field( 'image_one' ); ?>
                        <?php if ( $image_one ) : ?>
                            <img class="img-fluid" src="<?php echo esc_url( $image_one['url'] ); ?>" alt="<?php echo esc_attr( $image_one['alt'] ); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="col col-sm-4 col-md-4 col-lg-4">
                        <?php $image_two = get_sub_field( 'image_two' ); ?>
                        <?php if ( $image_two ) : ?>
                            <img class="img-fluid" src="<?php echo esc_url( $image_two['url'] ); ?>" alt="<?php echo esc_attr( $image_two['alt'] ); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="col col-sm-4 col-md-4 col-lg-4">
                        <?php $image_three = get_sub_field( 'image_three' ); ?>
                        <?php if ( $image_three ) : ?>
                            <img class="img-fluid" src="<?php echo esc_url( $image_three['url'] ); ?>" alt="<?php echo esc_attr( $image_three['alt'] ); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


