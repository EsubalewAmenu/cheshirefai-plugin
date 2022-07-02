<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/EsubalewAmenu
 * @since      1.0.0
 *
 * @package    Ds_contact_us
 * @subpackage Ds_contact_us/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Ds_contact_us
 * @subpackage Ds_contact_us/admin
 * @author     Esubalew Amenu <esubalew.a2009@gmail.com>
 */
class DS_contact_us
{

	public function __construct()
	{
	}

	public function ds_contact_us_title_code()
	{
	include_once ds_cheshirefai_PLAGIN_DIR . '/public/partials/contact_us/title.php';
	}
	public function ds_contact_us_form_code()
	{
	include_once ds_cheshirefai_PLAGIN_DIR . '/public/partials/contact_us/form.php';
	}
	public function ds_contact_us_map_code()
	{
	include_once ds_cheshirefai_PLAGIN_DIR . '/public/partials/contact_us/map.php';
	}

}