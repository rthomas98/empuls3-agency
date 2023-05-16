<section class="content-img-left py-5">
    <div class="container">

        <div class="row mb-5">
            <div class="col text-center">
                <p class="lead">
                    <?php the_sub_field( 'sub_header' ); ?>
                </p>
                <h2 class="display-4">
                    <?php the_sub_field( 'header' ); ?>
                </h2>
            </div>
        </div>
        <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-6 mb-5 mb-sm-5 mb-md-5 mb-lg-0">
                <?php the_sub_field( 'content' ); ?>

                <?php $button_link = get_sub_field( 'button_link' ); ?>
                <?php if ( $button_link ) : ?>
                    <a class="btn btn-secondary mt-4" href="<?php echo esc_url( $button_link); ?>"><?php the_sub_field( 'button_label' ); ?></a>
                <?php endif; ?>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 text-center">
                <?php $image = get_sub_field( 'image' ); ?>
                <?php if ( $image ) : ?>
                    <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>