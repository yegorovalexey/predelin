<?php
/**
 * User: egorov
 * Date: 13.02.15
 * Time: 9:50
 */

define("NO_VIDEO_IN_HEADER",true);
?>


<?php get_header();?>
<div class="row">
    <div class="col-xs-8">

        <div class="title acenter">
            <h1 class="g_t"><?php single_post_title(); ?></h1>
        </div>
        <div class="post_content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content(); // displays whatever you wrote in the wordpress editor
endwhile; endif; //ends the loop
?>
            </div>
</div>
    <div class="col-xs-4">
        <?php
        gen_view_module_title("СВЕЖЕЕ В БЛОГЕ");
        gen_view_blog(false);
        ?>
    </div>
</div>
<?php get_footer();?>

