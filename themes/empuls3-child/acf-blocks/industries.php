<section class="industries py-5 position-relative">
    <img class="stripe-right" src="<?php echo get_stylesheet_directory_uri(); ?>/img/stripe-right.svg" alt="a red line"> 
    <div class="container section-index">

        <?php if( get_sub_field('sub_header') ): ?>
        <div class="row mb-5">
            <div class="col text-center">

                <?php if( get_sub_field('sub_header') ): ?>
                    <p class="lead">
                        <?php the_sub_field( 'sub_header' ); ?>
                    </p>
                <?php endif; ?>

                <?php if(get_sub_field('header') ): ?>
                    <h2 class="display-4">
                        <?php the_sub_field( 'header' ); ?>
                    </h2>
                <?php endif; ?>

                <?php if( get_sub_field() ): ?>
                    <p class="text-muted">
                        <?php the_sub_field( 'content' ); ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>
    

        <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-6 section-index">
                <?php if ( have_rows( 'industry' ) ) : ?>
                    <?php while ( have_rows( 'industry' ) ) : the_row(); ?>
                        <div class="industry mb-5 p-3">

                        <h3>
                            <?php the_sub_field( 'title' ); ?>
                        </h3>
                        <p>
                            <?php the_sub_field( 'content' ); ?>
                        </p>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <?php // No rows found ?>
                <?php endif; ?>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 text-center section-index">
                <?php $image = get_sub_field( 'image' ); ?>
                <?php if ( $image ) : ?>
                    <img class="img-fluid" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                <?php endif; ?>
            </div>
        </div>
			
    </div>
</section>