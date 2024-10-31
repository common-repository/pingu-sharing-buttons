<?php
/*
Plugin Name: Pingu Sharing Buttons
Plugin URI: http://www.TechPingu.com
Description:  The plugin provides simple share buttons before and after content of home post and page.
Version: 1.0
Author: TechPingu
Author URI: http://www.techpingu.com/
*/
/**
 * Exit if accessed directly
 **/
 if ( ! defined( 'ABSPATH' ) )
{
	exit;
}
require_once(dirname(__FILE__).'/Pingu_Share_Button_fun.php');
/**
 * Add actions for backend menu(settings and submenu)
 **/
add_action('admin_menu', 'Pingu_share_button_fun_page');
?>