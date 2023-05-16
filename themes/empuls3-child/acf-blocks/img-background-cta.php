<section class="img-background-cta py-5 d-flex align-items-center" style="background: url(<?php the_sub_field( 'background_image' ); ?>) no-repeat center center; background-size: cover;">
    <div class="container position-relative">
        <div class="row ">
            <div class="col text-center">
                <p class="lead">
                    <?php the_sub_field( 'sub_header' ); ?>
                </p>
                <h2 class="display-4">
                    <?php the_sub_field( 'header' ); ?>
                </h2>

                <?php $button_link = get_sub_field( 'button_link' ); ?>
                <?php if ( $button_link ) : ?>
                    <a class="btn btn-secondary mt-4" href="<?php echo esc_url( $button_link); ?>"><?php the_sub_field( 'button_label' ); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>