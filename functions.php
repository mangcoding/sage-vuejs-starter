<?php
use function Roots\asset;
/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (! file_exists($composer = __DIR__ . '/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Run The Theme
|--------------------------------------------------------------------------
|
| Once we have the theme booted, we can handle the incoming request using
| the application's HTTP kernel. Then, we will send the response back
| to this client's browser, allowing them to enjoy our application.
|
*/

require_once __DIR__ . '/bootstrap/app.php';


function mapping_posts($post) {
    $image = get_the_post_thumbnail_url($post->ID) ? get_the_post_thumbnail_url($post->ID, 'original') : null;
    $thumbnail = get_the_post_thumbnail_url($post->ID) ? get_the_post_thumbnail_url($post->ID, 'thumbnail') : asset("images/logo.png")->uri();
    $data = [
        "post_id"   => $post->ID,
        "link"      => get_permalink($post->ID),
        "thumbnail" => $thumbnail,
        "image"     => $image,
        "title"     => $post->post_title,
        "slug"      => $post->post_name,
        "date"      => get_the_date(null, $post->ID),
        "content"   => get_the_content("",false,$post->ID),
        "excerpt"   => substr(strip_tags($post->post_content), 0, 60)
    ];
    return $data;
}

function get_blog($request) {
    $params = $request->get_params();
    $paged = $params["page"] ?? 1;
    $perpage = $params["perpage"] ?? 9;
    $keywords = $params["keywords"] ?? null;
    $categories = $params["categories"] ?? null;
    $sorting = $params["sorting"] ?? "desc";
   
    $args = array(
        'type'           => array("post"),
        'paged'          => $paged,
        'order'          => $sorting,
        'posts_per_page' => $perpage,
    );

    $query = new \WP_Query($args);
    $max_num_pages = $query->max_num_pages;
    $datas = array_map("mapping_posts", $query->posts);
    return [
        "posts"     => $datas, 
        "reload"    => $params["redraw"] ?? false, 
        "nextPage"  => $max_num_pages > $paged, 
        "totalpage" => $max_num_pages
    ];
}

add_action('rest_api_init', function () {
    register_rest_route('homepage', 'blog', array(
        'methods'             => 'POST',
        'callback'            => 'get_blog',
        'permission_callback' => '__return_true'
    ));
});