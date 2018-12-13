<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */
function ad_bootstrap_enqueue() {
    wp_enqueue_script( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), NULL, true );
    wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', false, NULL, 'all' );
}
add_action( 'wp_enqueue_scripts', 'ad_bootstrap_enqueue' );

add_action( 'storefront_before_content', 'storefront_bodyfront2', 10 );
add_action( 'storefront_ab_footer', 'storefront_abovefooter', 10 );
add_action( 'storefront_ab_footer3', 'storefront_abovefooter3', 10 );
add_action( 'storefront_contact', 'storefront_form_contact', 10 );

if( !defined(THEME_IMG_PATH)){
   define( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/assets' );
}

/* remove 32px */
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

//download dos plugins sem ftp
define('FS_METHOD', 'direct');

add_action( 'widgets_init', 'register_new_sidebars' );

function register_new_sidebars() {

  register_sidebar(array(
    'id' => 'bodyfront-1',
    'name' => __( 'Body Front', 'storefront' ),
    'description' => __( 'Body Front.', 'storefront' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="Body Front">',
    'after_title' => '</h4>',
  ));

  register_sidebar(array(
    'id' => 'bodyfront-2',
    'name' => __( 'Body Front 2', 'storefront' ),
    'description' => __( 'Widgets added second part home.', 'storefront' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="Body Front 2">',
    'after_title' => '</h4>',
  ));

   register_sidebar(array(
    'id' => 'abovefooter',
    'name' => __( 'Above Footer', 'storefront' ),
    'description' => __( 'Widgets added above footer.', 'storefront' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="Above Footer">',
    'after_title' => '</h4>',
  ));

   register_sidebar(array(
    'id' => 'abovefooter3',
    'name' => __( 'Above Footer', 'storefront' ),
    'description' => __( 'Widgets added above footer.', 'storefront' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="Above Footer">',
    'after_title' => '</h4>',
  ));

   register_sidebar(array(
    'id' => 'contactform',
    'name' => __( 'Contact Form', 'storefront' ),
    'description' => __( 'Widgets added contact form.', 'storefront' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="Contact Form">',
    'after_title' => '</h4>',
  ));

}


if ( ! function_exists( 'storefront_site_branding' ) ) {
  /**
   * Site branding wrapper and display
   *
   * @since  1.0.0
   * @return void
   */
  function storefront_site_branding() {
    ?>
    <div class="site-branding bb">
      <?php storefront_site_title_or_logo(); ?>
    </div>
    <?php
  }
}


//add fera
if ( ! function_exists( 'storefront_abovefooter' ) ) {
    /**
     * Site branding wrapper and display
     *
     * @since  1.0.0
     * @return void
     */
    function storefront_abovefooter() {
        ?>
            <div class="col-side bg">
                <?php dynamic_sidebar( 'abovefooter' ); ?>
            </div>
        <?php
    }
}

//add fera
if ( ! function_exists( 'storefront_abovefooter3' ) ) {
    /**
     * Site branding wrapper and display
     *
     * @since  1.0.0
     * @return void
     */
    function storefront_abovefooter3() {
        ?>
            <div class="col-side bg">
                <?php dynamic_sidebar( 'abovefooter3' ); ?>
            </div>
        <?php
    }
}

if ( ! function_exists( 'storefront_bodyfront2' ) ) {
  /**
   * Before Content
   * Wraps all WooCommerce content in wrappers which match the theme markup
   *
   * @since   1.0.0
   * @return  void
   */
  function storefront_bodyfront2() {
    ?>
      <div class="col-full bd-front">
                <?php dynamic_sidebar( 'bodyfront-1' ); ?>
            </div>
    <?php
  }
}


//add fera
if ( ! function_exists( 'storefront_form_contact' ) ) {
    /**
     * Site branding wrapper and display
     *
     * @since  1.0.0
     * @return void
     */
    function storefront_form_contact() {
        ?>
            <div class="col-side bg">
                <?php dynamic_sidebar( 'contactform' ); ?>
            </div>
        <?php
    }
}
