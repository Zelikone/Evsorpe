<?php
/*disable admin bar*/
show_admin_bar(false);
// DISABLE STUFF
//Disable RSS Feeds functions
add_action('do_feed', array( 'remove_stuff', 'disabler_kill_rss' ), 1);
add_action('do_feed_rdf', array( 'remove_stuff', 'disabler_kill_rss' ), 1);
add_action('do_feed_rss', array( 'remove_stuff', 'disabler_kill_rss' ), 1);
add_action('do_feed_rss2', array( 'remove_stuff', 'disabler_kill_rss' ), 1);
add_action('do_feed_atom', array( 'remove_stuff', 'disabler_kill_rss' ), 1);
class remove_stuff {
	function disabler_kill_rss(){
		wp_die( _e("No feeds available.", 'ippy_dis') );
	}
}

//Remove feed link from header
remove_action( 'wp_head', 'feed_links_extra', 3 ); //Extra feeds such as category feeds
remove_action( 'wp_head', 'feed_links', 2 ); // General feeds: Post and Comment Feed
// Clean up header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
function disable_wp_emojicons() {
  // all actions related to emojis
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
}
add_action( 'init', 'disable_wp_emojicons' );
// Remove generator tag
remove_action('wp_head', 'wp_generator');

if ( ! function_exists( 'ascardo_theme_setup' ) ) :
	function ascardo_theme_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'custom-logo' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Main menu', 'ascardo_theme' ),
		)
	);

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		add_filter( 'document_title_separator', function(){ return ' | '; } );

	}
endif;
add_action( 'after_setup_theme', 'ascardo_theme_setup' );

add_action( 'wp_enqueue_scripts', 'ascardo_scripts' );

function ascardo_scripts() {
	wp_enqueue_style( 'main', get_stylesheet_uri() );	
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.min.js', array(), get_bloginfo('version'), true );

	wp_enqueue_style('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.css', array());
    wp_enqueue_script('swiper','https://unpkg.com/swiper/swiper-bundle.min.js', array());
}

// enable full tinyMCE
function enable_more_buttons($buttons) {
	$buttons[] = 'fontselect';
	$buttons[] = 'fontsizeselect';
	$buttons[] = 'styleselect';
	$buttons[] = 'backcolor';
	$buttons[] = 'newdocument';
	$buttons[] = 'cut';
	$buttons[] = 'copy';
	$buttons[] = 'charmap';
	$buttons[] = 'hr';
	$buttons[] = 'visualaid';

	return $buttons;
}
add_filter("mce_buttons_3", "enable_more_buttons");

function myformatTinyMCE( $in ) {
	$in['wordpress_adv_hidden'] = FALSE;
	return $in;
}
add_filter( 'tiny_mce_before_init', 'myformatTinyMCE' );

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> '?????????????????? ????????',
		'menu_title'	=> '?????????????????? ????????',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'icon_url'    => 'dashicons-admin-settings'
	));

}

add_action('init', 'product_items_register');

function product_items_register() {

	$labels = array(
		'name' => '????????????',
		'singular_name' => '????????????',
		'add_new' => '???????????????? ??????????',
		'add_new_item' => '???????????????? ??????????',
		'edit_item' => '?????????????????????????? ??????????',
		'new_item' => '?????????? ??????????',
		'view_item' => '???????????????????? ??????????',
		'search_items' => '???????????????????? ????????????',
		'not_found' => '???????????? ???? ??????????????',
		'not_found_in_trash' => '???????????? ???? ?????????????? ?? ??????????????',
		'parent_item_colon' => ''
	);

	$rewrite = array(
		'slug'                       => 'shop',
		'with_front'                 => true,
		'hierarchical'               => true,
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'exclude_from_search' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'menu_icon' => 'dashicons-cart',
		'rewrite' => $rewrite,
		'capability_type' => 'post',
		'hierarchical' => true,
		'supports' => array('title'),
		'has_archive' => true
	);

	register_post_type( 'product' , $args );
}

add_action('wp_ajax_load_more_products', 'load_more_products');
add_action('wp_ajax_nopriv_load_more_products', 'load_more_products');




// register_post_type('reviews', array(
// 	'labels'             => array(
// 	  'name'               => '????????????', // ???????????????? ???????????????? ???????? ????????????
// 	  'singular_name'      => '????????????', // ?????????????????? ???????????????? ???????????? ???????? Book
// 	  'add_new'            => '???????????????? ??????????',
// 	  'add_new_item'       => '???????????????? ?????????? ??????????',
// 	  'edit_item'          => '?????????????????????????? ??????????',
// 	  'new_item'           => '?????????? ??????????',
// 	  'view_item'          => '???????????????????? ??????????',
// 	  'search_items'       => '?????????? ??????????',
// 	  'not_found'          => '???? ??????????????',
// 	  'not_found_in_trash' => '?? ?????????????? ???????????? ???? ??????????????',
// 	  'parent_item_colon'  => '',
// 	  'menu_name'          => '????????????'
// 	  ),
// 	'public'             => true,
// 	'publicly_queryable' => true,
// 	'show_ui'            => true,
// 	'show_in_menu'       => true,
// 	'query_var'          => true,
// 	'rewrite'            => true,
// 	'capability_type'    => 'post',
// 	'has_archive'        => false,
// 	'hierarchical'       => false,
// 	'menu_position'      => null,
// 	'supports'            => array( 'title', 'comments'  )  // 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',
//   ));



function load_more_products() {

	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1;
	$args['post_status'] = 'publish';
	$args['post_type'] = 'product';
	query_posts( $args );
	if( have_posts() ) :
		while( have_posts() ): the_post(); ?>

					<div class="catalog-item">
						<a id="product-<?php the_ID(); ?>" class="product-item" href="<?php the_permalink(); ?>">
						<div class="product-inner">
							<div class="product-item-image" data-index="<?php echo $index;?>">
								<?php $images = get_field('product_images'); $first_row = $images[0]; $image = $first_row['image']; ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
							</div>
							
							<div class="product-item-content">
							<div class="product-item-content-text">
									<p class="product-item-subtitle"><?php the_field('product_subtitle'); ?></p>
									<h3 class="product-item-title"><?php the_title(); ?></h3>
								</div>
								<div class="product-item-price">
									<p class="product-item-price_value"><?php the_field('product_price'); ?>??.</p>
									<p class="product-old-price" ><?php the_field('product_oldprice'); ?>??.</p>
								</div>
								<div class="product-item-button">
								<button href="#" class="btn product-buy btn-product">???????????? ????????????</button>
							</div>
								
							</div>
							
							</div>
							</a>
					</div>

		<?php endwhile;
	endif;
	die();
}