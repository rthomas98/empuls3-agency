<div class="container py-5">
    <?php if ( have_rows( 'gallery item' ) ) : ?>
        <div class="row" data-masonry='{"percentPosition": true }'>
            <?php while ( have_rows( 'gallery item' ) ) : the_row(); ?>
                <div class="col-sm-6 col-lg-4 mb-4">

                    <div class="card" >
                        <?php $image = get_sub_field( 'image' ); ?>
                        <?php $size = 'full'; ?>
                        <?php if ( $image ) : ?>
                            <?php echo wp_get_attachment_image( $image, $size, array('class' => 'card-img-top') ); ?>
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php the_sub_field( 'title' ); ?></h5>
                            <p class="card-text">
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