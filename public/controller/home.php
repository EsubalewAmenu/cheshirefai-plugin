<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/EsubalewAmenu
 * @since      1.0.0
 *
 * @package    Ds_home
 * @subpackage Ds_home/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Ds_home
 * @subpackage Ds_home/admin
 * @author     Esubalew Amenu <esubalew.a2009@gmail.com>
 */
class DS_home
{

	public function __construct()
	{
	}

	public function ds_home_causes_code()
	{
	include_once ds_cheshirefai_PLAGIN_DIR . '/public/partials/causes/donate.php';
	}
	public function ds_home_events_code()
	{
	include_once ds_cheshirefai_PLAGIN_DIR . '/public/partials/home/events.php';
	}
	public function ds_home_our_blog_code()
	{
		$args = array(
            'order'          => 'DESC', //'RAND', //ASC,DESC
            'orderby'        => "ID",
            'post_type'      => 'post',
            'post_status'    => 'publish',
            'posts_per_page' => 2,
        );


        $posts = get_posts($args);

	include_once ds_cheshirefai_PLAGIN_DIR . '/public/partials/home/our_blog.php';
	}
	public function ds_home_recent_causes_code()
	{
	include_once ds_cheshirefai_PLAGIN_DIR . '/public/partials/home/recent_causes.php';
	}
	public function ds_home_slider_code()
	{
	include_once ds_cheshirefai_PLAGIN_DIR . '/public/partials/home/slider.php';
	}
	public function ds_home_we_make_code()
	{
	include_once ds_cheshirefai_PLAGIN_DIR . '/public/partials/home/we_make.php';
	}

}