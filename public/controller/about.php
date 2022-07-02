<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/EsubalewAmenu
 * @since      1.0.0
 *
 * @package    Ds_about
 * @subpackage Ds_about/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Ds_about
 * @subpackage Ds_about/admin
 * @author     Esubalew Amenu <esubalew.a2009@gmail.com>
 */
class DS_about
{

	public function __construct()
	{
	}

	public function ds_about_title_code()
	{
	include_once ds_cheshirefai_PLAGIN_DIR . '/public/partials/about/title.php';
	}
	public function ds_about_about_us_code()
	{
	include_once ds_cheshirefai_PLAGIN_DIR . '/public/partials/about/aboutus.php';
	}
	public function ds_about_services_code()
	{
	include_once ds_cheshirefai_PLAGIN_DIR . '/public/partials/about/services.php';
	}

}