<?php 
/*



Plugin Name: Retailer Connect



Plugin URI: http://www.websitedesignwebsitedevelopment.com/wordpress/widgets/retailer-connect



Description: Retailer Connect Widget.



Version: 1.0



Author: Fahad Mahmood 



Author URI: http://www.androidbubbles.com



License: GPL3



*/ 


        
	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        

	include('functions.php');
    


    function register_rc_scripts() {
            
			
			
			
			wp_enqueue_script(
				'rc-script',
				plugins_url('functions.js', __FILE__),
				array( 'jquery' )
			);
			

            wp_register_style('rc-style', plugins_url('style.css', __FILE__));
	
	
			wp_enqueue_style( 'rc-style' );
			
 
        }
	
        
	add_action( 'wp_enqueue_scripts', 'register_rc_scripts' );

	add_action( 'widgets_init', 'rc_init');

	