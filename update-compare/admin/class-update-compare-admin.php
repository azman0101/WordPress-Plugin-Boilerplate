<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/azman0101/WordPress-Plugin-Boilerplate
 * @since      1.0.0
 *
 * @package    Update_Compare
 * @subpackage Update_Compare/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Update_Compare
 * @subpackage Update_Compare/admin
 * @author     Your Name <email@example.com>
 */
class Update_Compare_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $update_compare    The ID of this plugin.
	 */
	private $update_compare;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $update_compare       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $update_compare, $version ) {

		$this->update_compare = $update_compare;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Update_Compare_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Update_Compare_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->update_compare, plugin_dir_url( __FILE__ ) . 'css/update-compare-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Update_Compare_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Update_Compare_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->update_compare, plugin_dir_url( __FILE__ ) . 'js/update-compare-admin.js', array( 'jquery' ), $this->version, false );

	}

}
