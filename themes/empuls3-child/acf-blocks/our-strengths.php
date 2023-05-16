<section class="our-strengths py-5 position-relative">
    <div class="circle-sm"></div>
    <div class="circle-md"></div>
    <div class="circle-lg"></div>
    <div class="container section-index">
        <div class="row">
            <div class="col">
                <p class="lead">
                    <?php the_sub_field( 'sub_header' ); ?>
                </p>

                <h2 class="display-4">
                    <?php the_sub_field( 'header' ); ?>
                </h2>
            </div>
        </div>
        <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <?php if ( have_rows( 'strengths' ) ) : ?>
                <?php while ( have_rows( 'strengths' ) ) : the_row(); ?>
                    <div class="strength mb-4">
                        <h3><?php the_sub_field( 'title' ); ?></h3>
                        <?php the_sub_field( 'content' ); ?>
                    </div>
                <?php endwhile; ?>
                <?php else : ?>
                <?php // No rows found ?>
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