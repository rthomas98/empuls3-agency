<section class="alt-content py-5 position-relative">
    <img class="stripe-right" src="<?php echo get_stylesheet_directory_uri(); ?>/img/stripe-right.svg" alt="a red line">
    <div class="container section-index">
        <?php if ( have_rows( 'content_section' ) ) : ?>
            <?php while ( have_rows( 'content_section' ) ) : the_row();

            if( get_row_index() % 2 == 0 ){

            ?>

                <div class="row d-flex align-items-center mb-5">
                    <div class="col-sm-12 col-md-12 col-lg-6 text-center">
                        <?php $image = get_sub_field( 'image' ); ?>
                        <?php $size = 'full'; ?>
                        <?php if ( $image ) : ?>
                            <?php echo wp_get_attachment_image( $image, $size ); ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 p-5">
                        <h3>
                            <?php the_sub_field( 'header' ); ?>
                        </h3>
                        <p>
                            <?php the_sub_field( 'content' ); ?>
                        </p>
                    </div>
                </div>

            <?php } else { ?>

                <div class="row d-flex align-items-center mb-5">
                    <div class="col-sm-12 col-md-12 col-lg-6 p-5">
                        <h3>
                            <?php the_sub_field( 'header' ); ?>
                        </h3>
                        <p>
                            <?php the_sub_field( 'content' ); ?>
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

            <?php } ?>
            <?php endwhile; ?>
        <?php else : ?>
            <?php // No rows found ?>
        <?php endif; ?>
    </div>
</section>