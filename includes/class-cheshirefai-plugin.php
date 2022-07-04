<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       https://github.com/EsubalewAmenu/
 * @since      1.0.0
 *
 * @package    Cheshirefai_Plugin
 * @subpackage Cheshirefai_Plugin/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Cheshirefai_Plugin
 * @subpackage Cheshirefai_Plugin/includes
 * @author     Esubalew Amenu <esubalew.a2009@gmail.com>
 */
class Cheshirefai_Plugin {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Cheshirefai_Plugin_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {
		if ( defined( 'CHESHIREFAI_PLUGIN_VERSION' ) ) {
			$this->version = CHESHIREFAI_PLUGIN_VERSION;
		} else {
			$this->version = '1.0.0';
		}
		$this->plugin_name = 'cheshirefai-plugin';

		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_public_hooks();

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Cheshirefai_Plugin_Loader. Orchestrates the hooks of the plugin.
	 * - Cheshirefai_Plugin_i18n. Defines internationalization functionality.
	 * - Cheshirefai_Plugin_Admin. Defines all hooks for the admin area.
	 * - Cheshirefai_Plugin_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-cheshirefai-plugin-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-cheshirefai-plugin-i18n.php';

		/**
		 * The class responsible for defining all actions that occur in the admin area.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-cheshirefai-plugin-admin.php';

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-cheshirefai-plugin-public.php';

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/controller/home.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/controller/donors.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/controller/about.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/controller/blog.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/controller/contact_us.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/controller/causes.php';

		$this->loader = new Cheshirefai_Plugin_Loader();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Cheshirefai_Plugin_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new Cheshirefai_Plugin_i18n();

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_admin_hooks() {

		$plugin_admin = new Cheshirefai_Plugin_Admin( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );

	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_public_hooks() {

		$plugin_public = new Cheshirefai_Plugin_Public( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );

		$DS_causes = new DS_causes();
		$this->loader->add_shortcode( 'ds_causes_title_code', $DS_causes, 'ds_causes_title_code' );
		$this->loader->add_shortcode( 'ds_causes_donate_code', $DS_causes, 'ds_causes_donate_code' );

		$DS_donors = new DS_donors();
		$this->loader->add_shortcode( 'ds_donors_code', $DS_donors, 'ds_donors_code' );

		$DS_about = new DS_about();
		$this->loader->add_shortcode( 'ds_about_title_code', $DS_about, 'ds_about_title_code' );
		$this->loader->add_shortcode( 'ds_about_about_us_code', $DS_about, 'ds_about_about_us_code' );
		$this->loader->add_shortcode( 'ds_about_services_code', $DS_about, 'ds_about_services_code' );

		$DS_home = new DS_home();
		$this->loader->add_shortcode( 'ds_home_causes_code', $DS_home, 'ds_home_causes_code' );
		$this->loader->add_shortcode( 'ds_home_events_code', $DS_home, 'ds_home_events_code' );
		$this->loader->add_shortcode( 'ds_home_our_blog_code', $DS_home, 'ds_home_our_blog_code' );
		$this->loader->add_shortcode( 'ds_home_recent_causes_code', $DS_home, 'ds_home_recent_causes_code' );
		$this->loader->add_shortcode( 'ds_home_slider_code', $DS_home, 'ds_home_slider_code' );
		$this->loader->add_shortcode( 'ds_home_we_make_code', $DS_home, 'ds_home_we_make_code' );


		$DS_contact_us = new DS_contact_us();
		$this->loader->add_shortcode( 'ds_contact_us_title_code', $DS_contact_us, 'ds_contact_us_title_code' );
		$this->loader->add_shortcode( 'ds_contact_us_form_code', $DS_contact_us, 'ds_contact_us_form_code' );
		$this->loader->add_shortcode( 'ds_contact_us_map_code', $DS_contact_us, 'ds_contact_us_map_code' );
	

		$DS_blog = new DS_blog();
		$this->loader->add_shortcode( 'ds_blog_title_code', $DS_blog, 'ds_blog_title_code' );
		$this->loader->add_shortcode( 'ds_blog_blog_code', $DS_blog, 'ds_blog_blog_code' );
	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    Cheshirefai_Plugin_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}

}
