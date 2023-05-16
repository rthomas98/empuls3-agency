<div class="extended-header py-5">
    <img class="stripe-right" src="<?php echo get_stylesheet_directory_uri(); ?>/img/stripe-left.svg" alt="a red line">
    <div class="circle-lg-x"></div>

    <div class="container section-index pt-5">

        <?php if ( have_rows( 'section_one' ) ) : ?>
        <div class="row d-flex align-items-center mb-5">
            <?php while ( have_rows( 'section_one' ) ) : the_row(); ?>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <p class="lead">
                    <?php the_sub_field( 'section_sub_header' ); ?>
                </p>
                <h1 class="display-3">
                    <?php the_sub_field( 'section_header' ); ?>
                </h1>

                <?php the_sub_field( 'section_content' ); ?>

                <a class="btn btn-secondary mt-4 btn-lg" role="button" href="<?php the_sub_field( 'button_link' ); ?>">
                    <?php the_sub_field( 'button_label' ); ?>
                </a>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-6 text-center">
                <?php $section_image = get_sub_field( 'section_image' ); ?>
                <?php if ( $section_image ) : ?>
                    <img src="<?php echo esc_url( $section_image['url'] ); ?>" alt="<?php echo esc_attr( $section_image['alt'] ); ?>" />
                <?php endif; ?>
            </div>

            <?php endwhile; ?>
        </div>
        <?php endif; ?>

        <?php if ( have_rows( 'section_2' ) ) : ?>
        <div class="row d-flex align-items-center">
            <?php while ( have_rows( 'section_2' ) ) : the_row(); ?>
                <div class="col-sm-12 col-md-12 col-lg-6 text-center">
                    <?php $section_image = get_sub_field( 'section_image' ); ?>
                    <?php if ( $section_image ) : ?>
                        <img src="<?php echo esc_url( $section_image['url'] ); ?>" alt="<?php echo esc_attr( $section_image['alt'] ); ?>" />
                    <?php endif; ?>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <p class="lead">
                        <?php the_sub_field( 'section_sub_header' ); ?>
                    </p>
                    <h2 class="display-4">
                        <?php the_sub_field( 'section_header' ); ?>
                    </h2>

                    <?php the_sub_field( 'section_content' ); ?>

                    <a class="btn btn-primary mt-4 btn-lg" role="button" href="<?php the_sub_field( 'button_link' ); ?>">
                        <?php the_sub_field( 'button_label' ); ?>
                    </a>
                </div>

            <?php endwhile; ?>
        </div>
        <?php endif; ?>

    </div>
</div>