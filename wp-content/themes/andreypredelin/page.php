<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
define("NO_VIDEO_IN_HEADER",true);

get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content(); // displays whatever you wrote in the wordpress editor
endwhile; endif; //ends the loop
?>


<?php get_footer(); ?>
