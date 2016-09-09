<?php
/**
 * The main template file.
 */

get_header();

get_template_part( 'components/header' );
get_template_part( 'components/hero' );
get_template_part( 'components/posts' );
// get_template_part( 'components/testimonial' );
get_template_part( 'components/logos' );

get_footer();
