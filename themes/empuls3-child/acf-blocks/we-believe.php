
<div class="we-believe py-5 position-relative">
    <img class="stripe-right" src="<?php echo get_stylesheet_directory_uri(); ?>/img/stripe-right.svg" alt="a red line">
    <div class="circle-lg-x"></div>
    <img class="mt-4 grey-shape" src="<?php echo get_stylesheet_directory_uri(); ?>/img/grey-shape.svg" alt="a grey shape">

    <div class="circle-sm"></div>
    <div class="circle-md"></div>

    <div class="container section-index">
        <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <p class="lead">
                    <?php the_sub_field( 'sub_header' ); ?>
                </p>
                <h2 class="display-4">
                    <?php the_sub_field( 'header' ); ?>
                </h2>
                <p>
                    <?php the_sub_field( 'content' ); ?>
                </p>

                <a class="btn btn-primary mt-4 btn-lg mb-4 mb-sm-4 mb-md-4 mb-lg-0" role="button" href="<?php the_sub_field( 'button_link' ); ?>">
                    <?php the_sub_field( 'button_label' ); ?>
                </a>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">

                <?php if ( have_rows( 'belief' ) ) : ?>
                    <?php while ( have_rows( 'belief' ) ) : the_row(); ?>
                        <div class="belief mb-4 p-5">
                            <h3>
                                <?php the_sub_field( 'title' ); ?>
                            </h3>
                            <?php the_sub_field( 'content' ); ?>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <?php // No rows found ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>

