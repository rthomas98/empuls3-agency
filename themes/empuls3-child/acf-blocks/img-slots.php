<section class="img-slots py-5">
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
        <div class="row mb-5 d-flex align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-6 text-center">
                <?php $image_one = get_sub_field( 'image_one' ); ?>
                <?php if ( $image_one ) : ?>
                    <img src="<?php echo esc_url( $image_one['url'] ); ?>" alt="<?php echo esc_attr( $image_one['alt'] ); ?>" />
                <?php endif; ?>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 text-center">
                <?php $image_two = get_sub_field( 'image_two' ); ?>
                <?php if ( $image_two ) : ?>
                    <img src="<?php echo esc_url( $image_two['url'] ); ?>" alt="<?php echo esc_attr( $image_two['alt'] ); ?>" />
                <?php endif; ?>
            </div>
        </div>

        <div class="row">
            <?php if ( have_rows( 'slots' ) ) : ?>

                <?php while ( have_rows( 'slots' ) ) : the_row(); ?>
                    <div class="col-sm-12 col-md-12 col-lg-6 mb-4">
                        <div class="slots p-5">
                            <h3>
                                <?php the_sub_field( 'title' ); ?>
                            </h3>

                            <p>
                                <?php the_sub_field( 'content' ); ?>
                            </p>

                            <a href="<?php echo esc_url( home_url( '/request-proposal' ) ); ?>" class="btn btn-primary" role="button">I want to know more</a>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php else : ?>
                <?php // No rows found ?>
            <?php endif; ?>
        </div>
    </div>
</section>