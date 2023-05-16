<section class="container-fluid py-5 home-banner">
<img class="mt-4 grey-shape" src="<?php echo get_stylesheet_directory_uri(); ?>/img/grey-shape.svg" alt="a grey shape">

<div class="circle-sm" data-aos="fade-in" data-aos-duration="4000"></div>
<div class="circle-md" data-aos="fade-in"></div>
<div class="circle-lg" data-aos="fade-in"></div>

    <div class="row d-flex align-items-center">
        <div class="col-sm-12 col-md-12 col-lg-7 p-sm-2 p-md-5 p-lg-5  section-index">
            <h1 class="display-3">
                <?php the_sub_field( 'section_header' ); ?>
            </h1>
            <p class="lead text-muted">
                <?php the_sub_field( 'content' ); ?>
            </p>

            <div class="d-grid gap-4 d-md-block mt-5">
                <a class="btn btn-secondary btn-lg" role="button" href="<?php the_sub_field( 'button_one_link' ); ?>"><?php the_sub_field( 'button_one_label' ); ?></a>
                <a class="btn btn-primary btn-lg" role="button" href="<?php the_sub_field( 'button_two_link' ); ?>"><?php the_sub_field( 'button_two_label' ); ?></a>
            </div>

            
        </div>
        <div class="col-sm-12 col-md-12 col-lg-5 p-5 text-center">
        <?php $image = get_sub_field( 'image' ); ?>
			<?php if ( $image ) : ?>
				<img class="home-img" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
			<?php endif; ?>
        </div>
    </div>

    <div class="row">
        <div class="col text-center">
            <p class="lead">
                <?php the_sub_field( 'tech_ub_header' ); ?>
            </p>
            <h2>
                <?php the_sub_field( 'tech_header' ); ?>
            </h2>
        </div>
    </div>

        <div class="container">
            <?php if ( have_rows( 'tech_icon' ) ) : ?>
                <div class="row py-5 d-flex align-items-center">
                    <?php while ( have_rows( 'tech_icon' ) ) : the_row(); ?>
                        <div class="col text-center">
                            <i class="<?php the_sub_field( 'icon' ); ?>"></i>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php else : ?>
                <?php // No rows found ?>
            <?php endif; ?>
        </div>


</section>