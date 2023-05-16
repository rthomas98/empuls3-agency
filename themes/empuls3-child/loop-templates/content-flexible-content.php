<?php

if ( get_field( 'blocks' ) ) :

    while ( has_sub_field( 'blocks', get_the_ID() ) ) :


        if ( get_row_layout() == 'home_banner' ):
            include( get_stylesheet_directory() . '/acf-blocks/home-banner.php' );
        endif;

        if ( get_row_layout() == 'extended_header' ):
            include( get_stylesheet_directory() . '/acf-blocks/extended-header.php' );
        endif;

        if ( get_row_layout() == 'simple_header' ):
            include( get_stylesheet_directory() . '/acf-blocks/simple-header.php' );
        endif;

        if ( get_row_layout() == 'alt_content' ):
            include( get_stylesheet_directory() . '/acf-blocks/alt-content.php' );
        endif;

        if ( get_row_layout() == 'work_gallery' ):
            include( get_stylesheet_directory() . '/acf-blocks/work-gallery.php' );
        endif;

        if ( get_row_layout() == 'simple_banner' ):
            include( get_stylesheet_directory() . '/acf-blocks/simple-banner.php' );
        endif;

        if ( get_row_layout() == 'pink_banner' ):
            include( get_stylesheet_directory() . '/acf-blocks/pink-banner.php' );
        endif;

        if ( get_row_layout() == 'process_tabs' ):
            include( get_stylesheet_directory() . '/acf-blocks/process-tabs.php' );
        endif;

        if ( get_row_layout() == 'content_left_four_slots' ):
            include( get_stylesheet_directory() . '/acf-blocks/content-left-four-slots.php' );
        endif;


        if ( get_row_layout() == 'list_section' ):
            include( get_stylesheet_directory() . '/acf-blocks/list-section.php' );
        endif;

        if ( get_row_layout() == 'three_slot_header' ):
            include( get_stylesheet_directory() . '/acf-blocks/three-slot-header.php' );
        endif;

        if ( get_row_layout() == 'images_slots' ):
            include( get_stylesheet_directory() . '/acf-blocks/img-slots.php' );
        endif;

        if ( get_row_layout() == 'horizontal_slots' ):
            include( get_stylesheet_directory() . '/acf-blocks/horizontal-slots.php' );
        endif;

        if ( get_row_layout() == 'image_background_cta' ):
            include( get_stylesheet_directory() . '/acf-blocks/img-background-cta.php' );
        endif;

        if ( get_row_layout() == 'color_background' ):
            include( get_stylesheet_directory() . '/acf-blocks/color-background.php' );
        endif;

        if ( get_row_layout() == 'purple_banner' ):
            include( get_stylesheet_directory() . '/acf-blocks/purple-banner.php' );
        endif;

        if ( get_row_layout() == 'contact_header' ):
            include( get_stylesheet_directory() . '/acf-blocks/contact-header.php' );
        endif;

        if ( get_row_layout() == 'header_image_left' ):
            include( get_stylesheet_directory() . '/acf-blocks/header-img-left.php' );
        endif;

        if ( get_row_layout() == 'content_image_left' ):
            include( get_stylesheet_directory() . '/acf-blocks/content-img.left.php' );
        endif;

        if ( get_row_layout() == 'full_image_banner' ):
            include( get_stylesheet_directory() . '/acf-blocks/full-img-banner.php' );
        endif;

        if ( get_row_layout() == 'footer_call_to_action' ):
            include( get_stylesheet_directory() . '/acf-blocks/footer-cta.php' );
        endif;

        if ( get_row_layout() == 'content_three_tabs' ):
            include( get_stylesheet_directory() . '/acf-blocks/content-three-tabs.php' );
        endif;

        if ( get_row_layout() == 'double_images' ):
            include( get_stylesheet_directory() . '/acf-blocks/double-imgs.php' );
        endif;

        if ( get_row_layout() == 'services_tiles' ):
            include( get_stylesheet_directory() . '/acf-blocks/services-tiles.php' );
        endif;

        if ( get_row_layout() == 'other_services' ):
            include( get_stylesheet_directory() . '/acf-blocks/other-services.php' );
        endif;

        if ( get_row_layout() == 'industries' ):
            include( get_stylesheet_directory() . '/acf-blocks/industries.php' );
        endif;

        if ( get_row_layout() == 'testimonials' ):
            include( get_stylesheet_directory() . '/acf-blocks/testimonials.php' );
        endif;


        if ( get_row_layout() == 'contact_form' ):
            include( get_stylesheet_directory() . '/acf-blocks/contact.php' );
        endif;

        if ( get_row_layout() == 'our_strengths' ):
            include( get_stylesheet_directory() . '/acf-blocks/our-strengths.php' );
        endif;

        if ( get_row_layout() == 'we_believe_in' ):
            include( get_stylesheet_directory() . '/acf-blocks/we-believe.php' );
        endif;

        if ( get_row_layout() == 'team' ):
            include( get_stylesheet_directory() . '/acf-blocks/team.php' );
        endif;

        if ( get_row_layout() == 'recent_projects' ):
            include( get_stylesheet_directory() . '/acf-blocks/recent-projects.php' );
        endif;

    endwhile;
endif;
?>