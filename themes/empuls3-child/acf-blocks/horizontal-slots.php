<section class="horizontal-slots py-5 position-relative">
    <div class="container section-index">
        <div class="row mb-3 mb-sm-3 mb-md-3 mb-lg-3">
            <div class="col">
                <p class="lead">
                    <?php the_sub_field( 'sub_header' ); ?>
                </p>
                <h2 class="display-4">
                    <?php the_sub_field( 'header' ); ?>
                </h2>
            </div>
        </div>

        <?php if ( have_rows( 'slot' ) ) : ?>
            <div class="row">
            <?php while ( have_rows( 'slot' ) ) : the_row(); ?>
            <div class="col-sm-12 col-md-12 col-lg-6 p-4">
                <div class="slot row d-flex align-items-center p-4">
                    <div class="col-sm-12 col-md-12 col-lg-2 text-center">
                        <div class="icon-bg">
                           <i class="<?php the_sub_field( 'icon' ); ?>"></i>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-10">
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
</section>