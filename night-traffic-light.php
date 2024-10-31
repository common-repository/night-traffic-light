<?php
/*
Plugin Name: Night Traffic Light
Description: Einfaches Ampelsystem für WordPress
Version: 1.0
Author: Tobias Bohn
Author URI: https://twitter.com/tobias_bohn
*/
    
class NightTrafficLightLoader 
{
    function __construct()
    {
        // Menü hinzufügen
        add_action( 'admin_menu', array('NightTrafficLightLoader', 'RegisterAdminPage'));
        
        // Widget
        add_action( 'widgets_init', array('NightTrafficLightLoader', 'WidgetManuell'));
        
        // Shortcode
        add_shortcode( 'ntl', array('NightTrafficLightLoader', 'Shortcode'));
        
        // Translate
        add_action( 'plugins_loaded', array('NightTrafficLightLoader', 'Translate'));
    }
    
    // File zum Ordner
    function GetBaseFILE() {
		return dirname(__FILE__);
	}
    
    // Menü Option
    function RegisterAdminPage() {
		if (function_exists('add_options_page')) {
			add_options_page('Night Traffic Light - Option', 'Night Traffic Light', 'manage_options', 'NightTrafficLightAdminPage', array('NightTrafficLightLoader', 'AdminPage'));
		}
	}
    
    // Admin-Page
    function AdminPage()
    {
        require_once( NightTrafficLightLoader::GetBaseFile() . '/site/admin_page.php' );
        
        NightTrafficLightAdminPage();
    }
    
    // Widget
    public function WidgetManuell()
    {
        require_once( NightTrafficLightLoader::GetBaseFile() . '/inc/widget_manuell.php' );

        register_widget( 'NightTrafficLightWidgetManuell' );
    }
    
    // Shortcode
    public function Shortcode($atts)
    {
        require_once( NightTrafficLightLoader::GetBaseFile() . '/inc/shortcode.php' );

        NightTrafficLightShortcode($atts);
    }
    
    // Translate
    function Translate()
    {
        $dir = basename(dirname(__FILE__)) . '/translate/';
        load_plugin_textdomain( 'night-traffic-light', false, $dir);
        #'. __( 'HELLLOOOO', 'night-traffic-light' ).'
    }
}

$NightTrafficLightLoader = new NightTrafficLightLoader();
?>