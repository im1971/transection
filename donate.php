<?php
/**
 * Plugin Name: RZS Donation
 * Description: Use this plugin for donation.
 * Plugin URI:
 * Author: Mohammad Imran
 * Author URI: http://imran71.ga/
 * Version: 1.0.0
 * License: GPL2
 * Text Domain: rzs_donation
 */

if ( !defined('ABSPATH') ) die( 'Sorry! This is not your place!' );


//----------------------------------------------------------------------
// Core constant defination
//----------------------------------------------------------------------
if (!defined('RZS_PLUGIN_VERSION')) define( 'RZS_PLUGIN_VERSION', '1.0.0' );
if (!defined('RZS_PLUGIN_BASENAME')) define( 'RZS_PLUGIN_BASENAME', plugin_basename(__FILE__) );
if (!defined('RZS_MINIMUM_WP_VERSION')) define( 'RZS_MINIMUM_WP_VERSION', '3.5' );
if (!defined('RZS_PLUGIN_DIR')) define( 'RZS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
if (!defined('RZS_PLUGIN_URI')) define( 'RZS_PLUGIN_URI', plugins_url('', __FILE__) );
if (!defined('RZS_PLUGIN_TEXTDOMAIN')) define( 'RZS_PLUGIN_TEXTDOMAIN', 'rzs_donation' );


//----------------------------------------------------------------------
// Including Files
//----------------------------------------------------------------------


//add option page
require_once RZS_PLUGIN_DIR . '/inc/submenu.php';
require_once RZS_PLUGIN_DIR . '/inc/shortcode.php';

//register front end script & style
function rzs_enqueue_styles(){

//register style sheet
    wp_register_style('bootstrap',RZS_PLUGIN_URI .'/css/bootstrap.min.css',true,RZS_PLUGIN_VERSION);
    wp_enqueue_style ('bootstrap');

    //css for frontend
    wp_register_style("rzs-frontEndStyle", RZS_PLUGIN_URI . "/css/frontEndStyle.css",true,RZS_PLUGIN_VERSION);
    wp_enqueue_style("rzs-frontEndStyle");

    //js file for admin

    wp_register_script('rzs-frontEndJs',RZS_PLUGIN_URI .'/js/frontEnd.js',array('jquery'),RZS_PLUGIN_VERSION,true);
    wp_enqueue_script ('rzs-frontEndJs');

    //register script
    wp_register_script('js-bootstrap',RZS_PLUGIN_URI .'/js/bootstrap.min.js',array('jquery'),RZS_PLUGIN_VERSION,true);
    wp_enqueue_script ('js-bootstrap');

}

add_action('wp_enqueue_scripts','rzs_enqueue_styles');




//register admin panel style
function rzs_admin_enque_script(){
    //bootstrap for admin panel
    wp_register_style('bootstrap-admin',RZS_PLUGIN_URI .'/css/bootstrap.min.css',true,RZS_PLUGIN_VERSION);
    wp_enqueue_style ('bootstrap-admin');

    //css for admin panel
    wp_register_style("rzs-backEndStyle", RZS_PLUGIN_URI . "/admin/css/backEndStyle.css",true,RZS_PLUGIN_VERSION);
    wp_enqueue_style("rzs-backEndStyle");

    //js file for admin
    wp_register_script('rzs-backEndJs',RZS_PLUGIN_URI .'/js/backEnd.js',array('jquery'),RZS_PLUGIN_VERSION,true);
    wp_enqueue_script ('rzs-backEndJs');

}

add_action("admin_enqueue_scripts", "rzs_admin_enque_script");
