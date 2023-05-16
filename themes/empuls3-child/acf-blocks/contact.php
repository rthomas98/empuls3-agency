<div class="contact-form py-5 position-relative">
    <img class="stripe-right" src="<?php echo get_stylesheet_directory_uri(); ?>/img/stripe-right.svg" alt="a red line">
    <div class="circle-lg-x"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 mb-4 mb-sm-4 mb-md-4 mb-lg-0 section-index">
                <p class="lead">
                    <?php the_sub_field( 'sub_header' ); ?>
                </p>
                <h2 class="display-4">
                    <?php the_sub_field( 'header' ); ?>
                </h2>

                <?php the_sub_field( 'content' ); ?>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="form-holder p-5 section-index">
                    <h3 class="mb-4">
                        <?php the_sub_field( 'form_title' ); ?>
                    </h3>
                    <?php the_sub_field( 'form' ); ?>
                </div>
            </div>
        </div>
    </div>
</div>