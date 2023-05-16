<section class="full-img-banner position-relative py-5 d-flex align-items-center mb-0" style="background: url(<?php the_sub_field( 'background_image' ); ?>) no-repeat center center; background-size: cover;">
    <img class="stripe-left" src="<?php echo get_stylesheet_directory_uri(); ?>/img/stripe-left.svg" alt="a red line">
    <div class="container p-2 p-sm-2 p-md-5 p-lg-5 section-index">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-5">
                <p class="lead">
                    <?php the_sub_field( 'sub_header' ); ?>
                </p>
                <h1 class="display-5 mb-4">
                    <?php the_sub_field( 'header' ); ?>
                </h1>
                <p>
                    <?php the_sub_field( 'content' ); ?>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="purple-boxes py-5">
    <div class="container-fluid">
        <?php if ( have_rows( 'block' ) ) : ?>
        <div class="row d-flex align-items-center p-5">
            <?php while ( have_rows( 'block' ) ) : the_row(); ?>
            <div class="col-sm-12 col-md-12 col-lg-4 text-center">
                <div class="icon-bg">
                    <i class="<?php the_sub_field( 'icon' ); ?>"></i>
                </div>
                <h2><?php the_sub_field( 'title' ); ?></h2>
                <p>
                    <?php the_sub_field( 'content' ); ?>
                </p>
            </div>
            <?php endwhile; ?>
        </div>
        <?php else : ?>
            <?php // No rows found ?>
        <?php endif; ?>
    </div>
</section>
