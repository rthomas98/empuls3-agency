<div class="simple-header py-5 d-flex align-items-center">
    <img class="stripe-right" src="<?php echo get_stylesheet_directory_uri(); ?>/img/stripe-right.svg" alt="a red line">
    <div class="container section-index">
        <div class="row text-center">
            <h1 class="display-5 mb-3">
                <?php the_sub_field( 'header' ); ?>
            </h1>
            <p class="lead">
                <?php the_sub_field( 'sub_header' ); ?>
            </p>
        </div>
    </div>
</div>