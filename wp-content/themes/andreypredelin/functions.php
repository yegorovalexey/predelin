<?php
add_theme_support( 'post-thumbnails' );
add_theme_support('html5');
add_theme_support('menus');

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
    if( in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

function wptp_add_categories_to_attachments() {
    register_taxonomy_for_object_type( 'category', 'attachment' );
}
add_action( 'init' , 'wptp_add_categories_to_attachments' );
add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );


include(get_template_directory()."/settings.php");


function gen_view_module_title($title_name){
	echo '<div class="title acenter">
                 <span class="g_t">'.$title_name.'</span>
    </div>';
}

function gen_view_circle($title,$text,$link = false,$icon = false,$bg_src = false,$hover = true){
    $id = md5($bg_src.$title.$text);
    $icons_html = "";
    if($icon){
        $icons_html = "<div>".$icon."</div>";
    }
    if(!$bg_src){
        $bg_src =  get_bloginfo('template_url')."/img/bg_service.jpg";
    }
    $title = '<p class="g_t item_title">'.$title.'</p>';
    $hover_ev= ":hover";
    $dop = "";
    if(!$hover){
        $hover_ev= "";
        $dop = "hover";
    }

    $circle =  '<div class="circle '.$dop.'" id="bg_'.$id.'">
		<div class="text_bounds">
			'.$icons_html.'
			'.$title.'
			<div class="g_t text">'.substr( strip_tags($text), 0, 300).' ...</div>
		</div>						
	  </div>
	  <style>
	   #bg_'.$id.$hover_ev.'{
	    background: url('.$bg_src.') repeat scroll 0% 0% / 100% 100% transparent;
	  }
	  </style>
	  ';

    if($link){
        $circle = '<a href="'.$link.'">'.$circle.'</a>';
    }
    return $circle;
}

function gen_view_blog_list_item($item_html,$inline = true,$cols=4){
    $class ='';
    if($inline){
        $class= 'col-xs-'.$cols;
    }
    return '<div class="'.$class.' acenter item">'
		.$item_html.
	'</div>';
}


function gen_view_gallery_item($img_src,$alt,$link){
	 echo '<div class="col-xs-3 np acenter item">
         <a class="fancybox" rel="group" href="'.$link.'"><img  src="'.$img_src.'"></a>
     </div>';
}

function gen_view_gallery($id){

    $gallery = get_post_gallery( $id, false );
    $galleryIDs = explode(',', $gallery['ids']);
    $gallery['captions'] = array();
    echo '<div class="row gallery" id="gallery_'.$id.'">';
    $num = 0;
    foreach( $galleryIDs as $imageID ) {
        $img = get_post($imageID);
        gen_view_gallery_item($gallery['src'][$num],$img->post_excerpt,$gallery['src'][$num]);
        $num++;
    }
    echo '</div>';

}

function gen_view_instafead(){
	 echo '<div class="feed_container" >
			<div id="instafeed" >
		</div>
	</div>';
}

function get_po(WP_Post &$post){
    return $post;
}

function get_the_post_thumbnail_src($img)
{
    return (preg_match('~\bsrc="([^"]++)"~', $img, $matches)) ? $matches[1] : '';
}

function prossed_posts($posts){
    $model = array();

    if ($posts) {
        foreach ($posts as $post) {
            setup_postdata($post);
            $post = get_po($post);
            $post->link = get_permalink($post->ID);
            $post->title = get_the_title();
            $post->preview_img = get_the_post_thumbnail($post->ID, array(32, 32));
            $post->full_img = get_the_post_thumbnail($post->ID, array(500, 500));
            $post->full_img_src = get_the_post_thumbnail_src($post->full_img);
            array_push($model,$post);
        }
    }
    return $model;
}

function get_model_category($category,$sort = 'date',$limit = 3)
{
    $posts = get_posts("category=$category&orderby=$sort&numberposts=$limit");
    $model = array();

    if ($posts) {
        foreach ($posts as $post) {
            setup_postdata($post);
            $post = get_po($post);
            $post->link = get_permalink($post->ID);
            $post->title = get_the_title();
            $post->preview_img = get_the_post_thumbnail($post->ID, array(32, 32));
            $post->full_img = get_the_post_thumbnail($post->ID, array(500, 500));
            $post->full_img_src = get_the_post_thumbnail_src($post->full_img);
            array_push($model,$post);
        }
    }
    return $model;
}

function gen_view_services(){
    echo '<div class="row">';
    $posts = get_model_category(3);
    foreach($posts as $post){
        $post = get_po($post);
        echo gen_view_blog_list_item(gen_view_circle($post->post_title,$post->post_content,$post->link,$post->preview_img));
    }
    echo '</div>';

}

function gen_view_circle_posts($posts,$inline = true){
    echo '<div class="row circles">';
    foreach($posts as $post){
        $post = get_po($post);
        echo gen_view_blog_list_item(gen_view_circle($post->post_title,$post->post_content,$post->link,false,$post->full_img_src,false),$inline);
    }
    echo '</div>';

}
function gen_view_circle_review($posts,$inline = true){
    echo '<div class="row circles np">';
    foreach($posts as $post){
        $post = get_po($post);
        echo '<div class="col-xs-6 np">';
            echo '<div class="row circles review">';
                echo '<div class="col-xs-6">';
                 echo gen_view_blog_list_item(gen_view_circle("","",$post->link,false,$post->full_img_src,false),$inline,6);
                echo '</div>';
                echo '<div class="col-xs-6">';
                echo '<div class="g_t post_content title">'.$post->post_title.'</div>'.'<div class="g_t post_content">'.substr( strip_tags($post->post_content), 0, 300).'</div>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }
    echo '</div>';

}

function gen_view_blog($inline = true){
    echo '<div class="row">';
    $posts = get_model_category(4);

    foreach($posts as $post){
        $post = get_po($post);
        echo gen_view_blog_list_item(gen_view_circle($post->post_title,$post->post_content,$post->link,false,$post->full_img_src,false),$inline);
    }
    echo '</div>';

}




?>