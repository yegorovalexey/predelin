<?php
/**
 * User: egorov
 * Date: 13.02.15
 * Time: 11:22
 */

define("NO_VIDEO_IN_HEADER",true);

?>
<?php get_header();?>

<?php
gen_view_module_title("МОИ УСЛУГИ");
gen_view_services();

gen_view_module_title("ГАЛЕРЕЯ");
gen_view_gallery(21);

gen_view_module_title("СВЕЖЕЕ В БЛОГЕ");
gen_view_blog();

gen_view_module_title('<img src="'.get_bloginfo('template_url').'/img/icons/Instagram.png">');
gen_view_instafead();


?>

<?php get_footer();?>