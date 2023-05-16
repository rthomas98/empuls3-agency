<section class="pt-5 footer-cta position-relative" style="background: linear-gradient(180deg, <?php the_sub_field( 'background_color' ); ?> 80%, #ffffff 20%);">
    <div class="container">
        <div class="row text-center">
                <p class="lead">
                    <?php the_sub_field( 'sub_header' ); ?>
                </p>
                <h2 class="mb-5">
                    <?php the_sub_field( 'header' ); ?>
                </h2>
                <p class="footer-btn">
                    <a href="<?php the_sub_field('button_link'); ?>" class="btn <?php the_sub_field( 'button_background_color' ); ?> btn-lg">
                        <?php the_sub_field( 'button_label' ); ?>
                    </a>
                </p>

                <img class="mt-4 guy" src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer-guy.png" alt="a guy on a laptop" width="400">
        </div>
    </div>

    <img class="mt-4 stripe-right" src="<?php echo get_stylesheet_directory_uri(); ?>/img/stripe-right.svg" alt="a red line"> 

    <div class="circle-sm" style="background: <?php the_sub_field( 'circle_color' ); ?>;"></div>
    <div class="circle-md" style="background: <?php the_sub_field( 'circle_color' ); ?>;"></div>
    <div class="circle-lg" style="background: <?php the_sub_field( 'circle_color' ); ?>;"></div>
    <div class="circle-lg-x" style="background: <?php the_sub_field( 'circle_color' ); ?>;"></div>

</section>
