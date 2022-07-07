<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/EsubalewAmenu
 * @since      1.0.0
 *
 * @package    Mp_gl
 * @subpackage Mp_gl/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Mp_gl
 * @subpackage Mp_gl/admin
 * @author     Esubalew A. <esubalew.amenu@singularitynet.io>
 */
class DS_Admin_base
{

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */

	public function __construct()
	{
	}
	
	// function ds_base_menu_section()
	// {
	// 	$page_title = "MP General";
	// 	$menu_title = "MP General";
	// 	$capability = "manage_options";
	// 	$menu_slug = "mp-gl-menu";
	// 	$functionCallable = array($this, "gl_menupage_on_click");
	// 	$icon_url = "";
	// 	$position = 200;
	// 	add_menu_page($page_title, $menu_title, $capability, $menu_slug, $functionCallable, $icon_url, $position);
	// 	add_submenu_page($menu_slug, "FAQ", "FAQ", $capability, $menu_slug . '_gl_faq', array($this, "gl_faq_OnClick"));
	// }
	// public function gl_menupage_on_click()
	// {
	// 	echo "Please goto submenu";
	// }
	// public function gl_faq_OnClick()
	// {
	// 	include_once mp_gl_PLAGIN_DIR . 'admin/partials/faq/index.php';
	// }

}
