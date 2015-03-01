<?php

define("NO_VIDEO_IN_HEADER",true);
get_header();
$posts = prossed_posts($posts);
foreach($posts as $key=>$post_v){
    $attachments = new Attachments('attachments', $post_v->ID);
    if ($attachments->exist()) {
        $attachments->get();
        $posts[$key]->video = $attachments->url();
       // print_r($attachments);
    }
}
if (have_posts()) {

     //gen_view_circle_review($posts);
    $first_port = $posts[0];
    if(isset($_GET['id']) && isset($posts[intval($_GET['id'])])){
        $first_port = $posts[intval($_GET['id'])];
    }
    //print_r($first_port);

?>
<div class="video_cn np np_plus">
<div class="row ">
    <div class="col-xs-12 acenter video video_circle np">
        <video no_autoplay loop id="video_on_video_page" >
            <source src="<?php echo $first_port->video; ?>" type="video/mp4">
        </video>
        <div class="controls">
            <div class="title s_t"><?php echo $first_port->post_title ?></div>
            <div class="text s_t"><?php echo substr( strip_tags($first_port->post_content), 0, 300) ?></div>
            <div class="play_button"></div>
        </div>
    </div>
</div>
</div>
    <style>
        footer {
            margin-top: -1px;
        }
        </style>
    <script>

    </script>
<?php
    echo '<div class="row video_list">';
    $num = 0;
    $uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
    foreach($posts as $key=>$post_v){
        echo '<div class="col-xs-3 item np ">';
        echo '<a href="http://'.$_SERVER['HTTP_HOST'] . $uri_parts[0].'?id='.$num.'"><img src="'.$post_v->full_img_src.'">';
            echo '<div class="video_label">';
                echo '<div class="title">'.$post_v->post_title.'</div>';
                echo '<div class="text">'.substr( strip_tags($post_v->post_content), 0, 300).'</div>';
            echo '</div>';
        echo '</a></div>';
        $num++;
    }
    echo '</div>';
}
get_footer(); ?>
