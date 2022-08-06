<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fancy Lab
 */


add_action( 'after_setup_theme', 'fancy_lab_config', 0 );
add_action( 'woocommerce_before_main_content', 'fancy_lab_open_container_row', 5 );
function fancy_lab_open_container_row(){
	echo '<div class="container shop-content"><div class="row">';
}

add_action( 'woocommerce_after_main_content', 'fancy_lab_close_container_row', 5 );
function fancy_lab_close_container_row(){
	echo '</div></div>';
}

add_action( 'woocommerce_before_main_content', 'fancy_lab_add_sidebar_tags', 6 );
function fancy_lab_add_sidebar_tags(){
	echo '<div class="sidebar-shop col-lg-3 col-md-4 order-2 order-md-1">';
}

remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar' );
add_action( 'woocommerce_before_main_content', 'woocommerce_get_sidebar', 7 );

add_action( 'woocommerce_before_main_content', 'fancy_lab_close_sidebar_tags', 8 );
function fancy_lab_close_sidebar_tags(){
	echo '</div>';
}

add_action( 'woocommerce_before_main_content', 'fancy_lab_add_shop_tags', 9 );
function fancy_lab_add_shop_tags(){
	echo '<div class="col-lg-9 col-md-8 order-1 order-md-2">';
}

add_action( 'woocommerce_after_main_content', 'fancy_lab_close_shop_tags', 4 );
function fancy_lab_close_shop_tags(){
	echo '</div>';
}
add_filter( 'woocommerce_show_page_title', 'fancy_lab_remore_shop_title' );
function fancy_lab_remore_shop_title(){
	$val=false;
	return $val;
}
add_action( 'woocommerce_after_shop_loop_item_title', 'the_excerpt',1 );