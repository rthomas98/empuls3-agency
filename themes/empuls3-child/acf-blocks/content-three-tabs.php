<section class="content-three-tabs py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col">
                <p class="lead">
                    <?php the_sub_field( 'sub_title' ); ?>
                </p>

                <h2 class="display-4">
                    <?php the_sub_field( 'title' ); ?>
                </h2>
            </div>
        </div>

            <?php if ( have_rows( 'tabs' ) ) : ?>
        <div class="row row mb-5 d-flex align-items-center">
                <?php while ( have_rows( 'tabs' ) ) : the_row(); ?>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="tile text-center p-4 d-flex align-items-center">
                    <div>
                        <div class="icon-bg">
                            <i class="<?php the_sub_field( 'icon' ); ?>"></i>
                        </div>
                        <h3><?php the_sub_field( 'title' ); ?></h3>
                        <p>
                            <?php the_sub_field( 'content' ); ?>
                        </p>
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
</section>