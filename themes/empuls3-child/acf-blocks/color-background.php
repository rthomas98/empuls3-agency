<section class="color-background py-5" style="background-color: <?php the_sub_field( 'background_color' ); ?>;">
    <div class="container">
        <?php if ( get_sub_field( 'image_on_the_left_side' ) == 1 ) : ?>
            <div class="row d-flex align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-6 tex-center mb-5 mb-sm-5 mb-lg-0">
                    <?php $image = get_sub_field( 'image' ); ?>
                    <?php $size = 'full'; ?>
                    <?php if ( $image ) : ?>
                        <?php echo wp_get_attachment_image( $image, $size ); ?>
                    <?php endif; ?>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <p class="lead" style="color: <?php the_sub_field( 'sub_header_color' ); ?>;">
                        <?php the_sub_field( 'sub_header' ); ?>
                    </p>
                    <h2 class="display-4" style="color: <?php the_sub_field( 'header_color' ); ?>;">
                        <?php the_sub_field( 'header' ); ?>
                    </h2>
                    <p style="color: <?php the_sub_field( 'content_color' ); ?>;">
                        <?php the_sub_field( 'content' ); ?>
                    </p>

                    <?php $button_link = get_sub_field( 'button_link' ); ?>
                    <?php if ( $button_link ) : ?>
                        <a class="btn btn-<?php the_sub_field( 'button_color' ); ?>" href="<?php echo esc_url( $button_link); ?>" role="button"><?php the_sub_field( 'button_label' ); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        <?php else : ?>

            <div class="row d-flex align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <?php if( get_sub_field('sub_header') ): ?>
                        <p class="lead" style="color: <?php the_sub_field( 'sub_header_color' ); ?>;">
                            <?php the_sub_field( 'sub_header' ); ?>
                        </p>
                    <?php endif; ?>

                    <h2 class="display-4" style="color: <?php the_sub_field( 'header_color' ); ?>;">
                        <?php the_sub_field( 'header' ); ?>
                    </h2>
                    <p style="color: <?php the_sub_field( 'content_color' ); ?>;">
                        <?php the_sub_field( 'content' ); ?>
                    </p>
                    <?php $button_link = get_sub_field( 'button_link' ); ?>
                    <?php if ( $button_link ) : ?>
                        <a class="btn btn-<?php the_sub_field( 'button_color' ); ?>" href="<?php echo esc_url( $button_link); ?>" role="button"><?php the_sub_field( 'button_label' ); ?></a>
                    <?php endif; ?>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 tex-center mt-5 mt-sm-5 mt-lg-0">
                    <?php $image = get_sub_field( 'image' ); ?>
                    <?php $size = 'full'; ?>
                    <?php if ( $image ) : ?>
                        <?php echo wp_get_attachment_image( $image, $size ); ?>
                    <?php endif; ?>
                </div>
            </div>

        <?php endif; ?>
    </div>
</section>