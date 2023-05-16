<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>


<footer class="footer py-5 position-relative">

<img class="mt-4 grey-shape" src="<?php echo get_stylesheet_directory_uri(); ?>/img/grey-shape.svg" alt="a grey shape">

<div class="container">

    <?php if ( have_rows( 'social_section', 'option' ) ) : ?>
        <div class="row mb-5">
            <?php while ( have_rows( 'social_section', 'option' ) ) : the_row(); ?>
                <div class="col">
                    <h2 class="text-center"><?php the_sub_field( 'section_header' ); ?></h2>
                    <?php if ( have_rows( 'social_icons' ) ) : ?>
                        <ul class="nav justify-content-center footer-social">
                            <?php while ( have_rows( 'social_icons' ) ) : the_row(); ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php the_sub_field( 'icon_link' ); ?>">
                                        <i class="fa-brands <?php the_sub_field( 'font' ); ?>"></i>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php else : ?>
                        <?php // No rows found ?>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

    <div class="row mb-4">
        <div class="col-sm-12 col-md-12 col-lg-6 pe-sm-0 pe-md-0 pe-lg-4 mb-sm-5 mb-md-5 mb-lg-0 footer-index">
            <h3>
                <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-icon.svg" alt="the empuls3 logo">
                Empuls3
            </h3>
            <p>
                Empuls3 is a Dallas, TX/Baton Rouge, LA based Web and App Development Digital Agency. Our goal is to create pain-free marketing solutions that will help to grow your business.
            </p>

            <p>
                <strong>Call: </strong>
                <a href="tel:972-798-8914">972.798.8914</a>
            </p>
            <p>
                <strong>Email: </strong>
                <a href="mailto:info@empuls3.com">info@empuls3.com</a>
            </p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 ps-sm-0 ps-md-0 ps-lg-4 mb-sm-5 mb-md-5 mb-lg-0">
            <h4>Services</h4>

            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'footer menu-1',
                    'container'      => 'ul',
                    'menu_class'     => 'nav flex-column',
                    'add_li_class'   => 'nav-item',
                    'a_class'     => 'nav-link',
                )
            );
            ?>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 mb-sm-5 mb-md-5 mb-lg-0">
            <h4>Resources</h4>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'footer menu-2',
                    'menu_class'     => 'nav flex-column',
                    'container'      => 'ul',
                    'add_li_class'   => 'nav-item',
                    'link_class'     => 'nav-link',
                )
            );
            ?>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-2 mb-sm-5 mb-md-0 mb-lg-0">
            <h4>Support</h4>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'footer menu-3',
                    'menu_class'     => 'nav flex-column',
                    'container'      => 'ul',
                    'add_li_class'   => 'nav-item',
                    'link_class'     => 'nav-link',
                )
            );
            ?>
        </div>
    </div>

    <div class="row py-3 copyright">
        <div class="col text-center">
            <p>
                <small>
                    &copy;  <?php echo date( 'Y' ); ?> Empuls3 | All Rights Reserved
                </small>
            </p>
        </div>
    </div>

</div>
</footer>


<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<?php wp_footer(); ?>


</body>

</html>

