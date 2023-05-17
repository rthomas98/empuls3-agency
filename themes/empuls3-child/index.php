<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<section class="py-5 blog-banner d-flex align-items-center position-relative">
    <img class="stripe-right" src="<?php echo get_stylesheet_directory_uri(); ?>/img/stripe-right.svg" alt="a red line">
    <div class="container section-index mt-5">
        <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                <h1 class="display-6">Weekly Expert Insights: Navigating the landscape of WordPress, Shopify, HubSpot, Frontend and Mobile Development.</h1>

            </div>
12        </div>
    </div>
</section>

    <!-- Featured blog post section -->
    <section class="featured-post py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <p class="lead">
                        Join us as we dive into the world of digital development each week, exploring everything from WordPress to Shopify, HubSpot to frontend coding, and even mobile app creation with React Native. Think of it as a friendly chat with fellow developers, where we share insights, discuss new trends, and help each other navigate the ever-evolving tech landscape. All expertise levels are welcome. So, grab a coffee and let's talk code!
                    </p>
                    <h2 class="display-4">Featured Post</h2>
                </div>
            </div>
            <?php
            $args = array(
                'meta_key' => 'featured_post',
                'meta_value' => '1',
                'posts_per_page' => 1
            );
            $featured_query = new WP_Query( $args );
            while ( $featured_query->have_posts() ) : $featured_query->the_post(); ?>
            <div class="row d-flex align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="featured-post-image">
                        <?php the_post_thumbnail('large', array( 'class' => 'img-fluid rounded' )); ?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <div class="featured-post-date">
                        <p><?php the_date(); ?></p>
                    </div>
                    <h3 class="display-6"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                    <div class="featured-post-excerpt mt-3">
                        <?php the_excerpt(); ?>
                    </div>
                </div>

            </div>
            <?php endwhile; wp_reset_postdata(); ?>

            <hr class="mt-5">
        </div>
    </section>

    <div class="container py-5">
    <div class="row mb-4">
        <div class="col">
            <h2 class="display-4">Most Recent post</h2>
        </div>
    </div>
    <div class="row">
<?php
// The Query
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
    'posts_per_page' => 24,
    'paged'          => $paged,
);
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
        ?>
        <div class="entry2 col-sm-12 col-md-12 col-lg-4 mb-4 mb-sm-4 mb-md-4 mb-lg-5">

        <?php
        if ( has_post_thumbnail() ) {
            $featured_img_url = get_the_post_thumbnail_url();
            ?>
            <a href="<?php echo get_the_permalink(); ?>">
                <img src="<?php echo $featured_img_url; ?>" alt="<?php echo get_the_title(); ?>" class="rounded featured-post-image" width="416" height="416">
            </a>
            <?php
        } else {
            ?>
        <a href="<?php echo get_the_permalink(); ?>">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder.png" alt="<?php echo get_the_title(); ?>" class="img-fluid rounded featured-post-image" width="416" height="416">
        </a>
            <?php
        }
        ?>

            <div class="excerpt">
                <span class="post-category text-white bg-primary mb-2">Politics</span>
                <h2><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>

                <p class="content">
                    <?php
                    $excerpt = get_the_excerpt();
                    echo wp_trim_words( $excerpt, 20 );
                    ?>
                </p>
                <p><a href="<?php echo get_the_permalink(); ?>" class="read-more">Read More</a></p>
            </div>
        </div>
        <?php
    }

    $big = 999999999; // an unlikely integer

    $links = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $the_query->max_num_pages,
        'type' => 'array',
        'prev_next' => true,
        'prev_text' => __('Previous'),
        'next_text' => __('Next'),
    ) );

    if ( $links ) {
        echo '<nav aria-label="Page navigation example"><ul class="pagination">';

        foreach ( $links as $link ) {
            if ( strpos( $link, 'current' ) !== false ) {
                echo '<li class="page-item active">' . str_replace( 'page-numbers', 'page-link', $link ) . '</li>';
            } else {
                echo '<li class="page-item">' . str_replace( 'page-numbers', 'page-link', $link ) . '</li>';
            }
        }

        echo '</ul></nav>';
    }

    wp_reset_postdata();
} else {
    // no posts found
}
?>
    </div>

    </div>




<?php
get_footer();
