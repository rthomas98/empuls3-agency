<div class="team py-5 position-relative">
    <img class="stripe-left" src="<?php echo get_stylesheet_directory_uri(); ?>/img/stripe-left.svg" alt="a red line">
    <div class="container section-index">
        <div class="row mb-4">
            <div class="col-6">
                <p class="lead">
                    <?php the_sub_field( 'sub_header' ); ?>
                </p>
                <h2 class="display-4">
                    <?php the_sub_field( 'header' ); ?>
                </h2>

                <?php the_sub_field( 'content' ); ?>
            </div>
        </div>
        <?php if ( have_rows( 'member' ) ) : ?>
        <div class="row">
            <?php while ( have_rows( 'member' ) ) : the_row(); ?>
                <div class="col-sm-12 col-md-12 col-lg-3 member text-center mb-5">
                <?php
                $image = get_sub_field( 'image' );

                if ( $image ) :
                    // output the image
                    ?>
                    <img class="mb-3" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                <?php else :
                    // output some alternative content
                    ?>
                    <p>No image was found.</p>
                <?php endif; ?>
                <h4>
                    <?php the_sub_field( 'name' ); ?>
                </h4>
                <p>
                    <?php the_sub_field( 'position' ); ?>
                </p>
                </div>
            <?php endwhile; ?>
        </div>
        <?php else : ?>
            <?php // No rows found ?>
        <?php endif; ?>
    </div>
</div>
