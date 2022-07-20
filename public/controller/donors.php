<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/EsubalewAmenu
 * @since      1.0.0
 *
 * @package    Ds_donors
 * @subpackage Ds_donors/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Ds_donors
 * @subpackage Ds_donors/admin
 * @author     Esubalew Amenu <esubalew.a2009@gmail.com>
 */
class DS_donors
{

	public function __construct()
	{
	}

	public function ds_donors_code()
	{

        $args = array(
            'post_type'      => 'donors',
            'post_status'    => 'publish',
        );


        $donors = get_posts($args);

	include_once ds_cheshirefai_PLAGIN_DIR . '/public/partials/donors/index.php';
	}

	public function ds_recent_causes_code()
	{

        $args = array(
            'post_type'      => 'recent_causes',
            'post_status'    => 'publish',
        );


        $recent_causes = get_posts($args);
		
	include_once ds_cheshirefai_PLAGIN_DIR . '/public/partials/home/recent_causes.php';
	}

}