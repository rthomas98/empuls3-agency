<div class="recent-projects py-5">
    <div class="container section-index">
        <div class="row text-center mb-5">
            <div class="col">
                <p class="lead"><?php the_sub_field( 'section_sub_header' ); ?></p>
                <h2 class="display-4"><?php the_sub_field( 'section_header' ); ?></h2>
                <?php the_sub_field( 'section_content' ); ?>
            </div>
        </div>
        <?php if ( have_rows( 'case_study' ) ) : ?>
        <div class="row d-flex align-items-center">
            <?php while ( have_rows( 'case_study' ) ) : the_row(); ?>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <p class="lead">Featured Project</p>
                    <h3>
                        <?php the_sub_field( 'title' ); ?>
                    </h3>

                    <?php the_sub_field( 'content' ); ?>

                    <div class="row">
                        <div class="col counter">
                            <span><?php the_sub_field( 'roi' ); ?>%</span>
                            <p>
                                ROI increase
                            </p>
                        </div>
                        <div class="col counter">
                            <span><?php the_sub_field( 'visits' ); ?></span>
                            <p>
                                Monthly website visits
                            </p>
                        </div>
                    </div>


                    <?php $button_link = get_sub_field( 'button_link' ); ?>
                    <?php if ( $button_link ) : ?>
                        <a class="btn btn-primary mt-4 btn-lg" href="<?php echo esc_url( $button_link); ?>" target="_blank" role="button"><?php the_sub_field( 'button_label' ); ?></a>
                    <?php endif; ?>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 text-center">
                    <?php $image = get_sub_field( 'image' ); ?>
                    <?php if ( $image ) : ?>
                        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                    <?php endif; ?>
                </div>

            <?php endwhile; ?>
        </div>
        <?php else : ?>
            <?php // No rows found ?>
        <?php endif; ?>
    </div>
</div>




