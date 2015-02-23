<?php

define("NO_VIDEO_IN_HEADER",true);

get_header();

gen_view_module_title(single_cat_title( '', false ));
$posts = prossed_posts($posts);
if (have_posts()) {
    gen_view_circle_review($posts);
}

get_footer(); ?>
