<div class="contact-header py-5">
    <img class="stripe-left" src="<?php echo get_stylesheet_directory_uri(); ?>/img/stripe-left.svg" alt="a red line">
    <div class="container section-index pt-5">
        <div class="row mb-5 d-flex align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-6 mb-4 mb-sm-4 mb-md-4 mb-lg-0">
                <p class="lead">
                    <?php the_sub_field( 'sub_header' ); ?>
                </p>
                <h1 class="display-5">
                    <?php the_sub_field( 'header' ); ?>
                </h1>

                <?php the_sub_field( 'content' ); ?>

            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="form-holder p-5">
                    <h2 class="mb-4">
                        <?php the_sub_field( 'form_title' ); ?>
                    </h2>
                    <?php the_sub_field( 'form' ); ?>
                </div>
            </div>
        </div>

        <?php if ( have_rows( 'contact_tabs' ) ) : ?>
        <div class="row">
        <?php while ( have_rows( 'contact_tabs' ) ) : the_row(); ?>
        <div class="col-sm-12 col-md-12 col-lg-4 mb-4 mb-sm-4 mb-md-4 mb-lg-0">
            <div class="contact-tab p-4">
                <div class="row d-flex align-items-center">
                    <div class="col-2">
                        <?php the_sub_field( 'icon' ); ?>
                    </div>
                    <div class="col-10">
                        <h3>
                            <?php the_sub_field( 'title' ); ?>
                        </h3>

                        <?php the_sub_field( 'content' ); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        </div>
        <?php else : ?>
        <?php // No rows found ?>
        <?php endif; ?>
    </div>
</div>

