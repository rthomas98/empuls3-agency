<section class="content-left-four-slots py-5 position-relative">
    <img class="stripe-left" src="<?php echo get_stylesheet_directory_uri(); ?>/img/stripe-left.svg" alt="a red line">
    <div class="container section-index">
        <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-6 mb-5 mb-sm-5 mb-lg-0">
                <p class="lead">
                    <?php the_sub_field( 'sub_header' ); ?>
                </p>
                <h2 class="display-4">
                    <?php the_sub_field( 'header' ); ?>
                </h2>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <?php if ( have_rows( 'slots' ) ) : ?>
                <div class="row">
                    <?php while ( have_rows( 'slots' ) ) : the_row(); ?>
                    <div class="col-sm-12 col-md-12 col-lg-6 mb-5 mb-sm-5 mb-lg-4 ">
                        <div class="slot p-4">
                            <h3><?php the_sub_field( 'title' ); ?></h3>
                            <?php the_sub_field( 'content' ); ?>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php else : ?>
                    <?php // No rows found ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>