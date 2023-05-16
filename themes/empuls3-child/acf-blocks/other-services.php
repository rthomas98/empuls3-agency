<section class="other-services py-5 position-relative">

    <div class="container section-index">
        <div class="row mb-5">
            <p class="lead">
                <?php the_sub_field( 'sub_header' ); ?>
            </p>
            <h2 class="display-3">
                <?php the_sub_field( 'header' ); ?>
            </h2>
        </div>
        <?php if ( have_rows( 'service' ) ) : ?>
        <div class="row">
            <?php while ( have_rows( 'service' ) ) : the_row(); ?>
            <div class="col-sm-12 col-md-12 col-lg-6 mb-4">
                <div class="tile p-4">
                    <h3>
                        <?php the_sub_field( 'title' ); ?>
                    </h3>
                    <p>
                        <?php the_sub_field( 'content' ); ?>
                    </p>
                    <a class="btn btn-primary btn-lg" href="<?php the_sub_field( 'button_link' ); ?>" role="button"><?php the_sub_field( 'button_label' ); ?></a>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php else : ?>
            <?php // No rows found ?>
        <?php endif; ?>
    </div>
</section>


