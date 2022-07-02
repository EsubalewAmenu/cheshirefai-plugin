<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/EsubalewAmenu
 * @since      1.0.0
 *
 * @package    Ds_blog
 * @subpackage Ds_blog/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Ds_blog
 * @subpackage Ds_blog/admin
 * @author     Esubalew Amenu <esubalew.a2009@gmail.com>
 */
class DS_blog
{

	public function __construct()
	{
	}

	public function ds_blog_title_code()
	{
	include_once ds_cheshirefai_PLAGIN_DIR . '/public/partials/blog/title.php';
	}
	public function ds_blog_blog_code()
	{
	include_once ds_cheshirefai_PLAGIN_DIR . '/public/partials/blog/blog.php';
	}

}