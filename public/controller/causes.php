<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/EsubalewAmenu
 * @since      1.0.0
 *
 * @package    Ds_causes
 * @subpackage Ds_causes/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Ds_causes
 * @subpackage Ds_causes/admin
 * @author     Esubalew Amenu <esubalew.a2009@gmail.com>
 */
class DS_causes
{

	public function __construct()
	{
	}

	public function ds_causes_title_code()
	{
	include_once ds_cheshirefai_PLAGIN_DIR . '/public/partials/causes/title.php';
	}
	public function ds_causes_donate_code()
	{
	include_once ds_cheshirefai_PLAGIN_DIR . '/public/partials/causes/donate.php';
	}

}