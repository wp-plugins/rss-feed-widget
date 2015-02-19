<?php


function rc_init() {
	register_widget( 'rc_widget' );
}

class rc_widget extends WP_Widget {

	public function __construct() {
		$widget_ops = array( 'classname' => 'the_retailer_connect', 'description' => __('A widget that displays customized social icons ', 'theretailer') );
		
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'the_retailer_connect' );
		
		$this->WP_Widget( 'the_retailer_connect', __('The Retailer Connect', 'theretailer'), $widget_ops, $control_ops );
		
		
	}
	
	public function widget( $args, $instance ) {
		extract( $args );

		//Our variables from the widget settings.
		$title = apply_filters('widget_title', $instance['title'] );
		$facebook = $instance['facebook'];
		$pinterest = $instance['pinterest'];
		$linkedin = $instance['linkedin'];
		$twitter = $instance['twitter'];
		$googleplus = $instance['googleplus'];
		$rss = $instance['rss'];
		$tumblr = $instance['tumblr'];
		$instagram = $instance['instagram'];
		$youtube = $instance['youtube'];
		$vimeo = $instance['vimeo'];
		
		echo $before_widget;

		// Display the widget title 
		if ( $title ) echo $before_title . $title . $after_title;

		//Display icons
		if ( $facebook ) echo('<a href="' . $facebook . '" target="_blank" class="widget_connect_facebook">Facebook</a>' );
		if ( $pinterest ) echo('<a href="' . $pinterest . '" target="_blank" class="widget_connect_pinterest">Pinterest</a>' );
		if ( $linkedin ) echo('<a href="' . $linkedin . '" target="_blank" class="widget_connect_linkedin">Linkedin</a>' );
		if ( $twitter ) echo('<a href="' . $twitter . '" target="_blank" class="widget_connect_twitter">Twitter</a>' );
		if ( $googleplus ) echo('<a href="' . $googleplus . '" target="_blank" class="widget_connect_googleplus">Google+</a>' );
		if ( $rss ) echo('<a href="' . $rss . '" target="_blank" class="widget_connect_rss">RSS</a>' );
		if ( $tumblr ) echo('<a href="' . $tumblr . '" target="_blank" class="widget_connect_tumblr">Tumblr</a>' );
		if ( $instagram ) echo('<a href="' . $instagram . '" target="_blank" class="widget_connect_instagram">Instagram</a>' );
		if ( $youtube ) echo('<a href="' . $youtube . '" target="_blank" class="widget_connect_youtube">Youtube</a>' );
		if ( $vimeo ) echo('<a href="' . $vimeo . '" target="_blank" class="widget_connect_vimeo">Vimeo</a>' );
		
		echo $after_widget;
	}

	//Update the widget 
	 
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['facebook'] = strip_tags( $new_instance['facebook'] );
		$instance['pinterest'] = strip_tags( $new_instance['pinterest'] );
		$instance['linkedin'] = strip_tags( $new_instance['linkedin'] );
		$instance['twitter'] = strip_tags( $new_instance['twitter'] );
		$instance['googleplus'] = strip_tags( $new_instance['googleplus'] );
		$instance['rss'] = strip_tags( $new_instance['rss'] );
		$instance['tumblr'] = strip_tags( $new_instance['tumblr'] );
		$instance['instagram'] = strip_tags( $new_instance['instagram'] );
		$instance['youtube'] = strip_tags( $new_instance['youtube'] );
		$instance['vimeo'] = strip_tags( $new_instance['vimeo'] );

		return $instance;
	}

	
	function form( $instance ) {

		//Set up some default widget settings.
		$defaults = array( 
			'title' => __('The Retailer Connect', 'theretailer'),
			'facebook' => '',
			'pinterest' => '',
			'linkedin' => '',
			'twitter' => '',
			'googleplus' => '',
			'rss' => '',
			'tumblr' => '',
			'instagram' => '',
			'youtube' => '',
			'vimeo' => ''
		);
		
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Widget title:', 'theretailer'); ?></label>
			<input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" class="widefat" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'facebook' ); ?>"><?php _e('Facebook URL', 'theretailer'); ?></label>
			<input type="text" id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" value="<?php echo $instance['facebook']; ?>" class="widefat" />
		</p>
        
        <p>
			<label for="<?php echo $this->get_field_id( 'pinterest' ); ?>"><?php _e('Pinterest URL', 'theretailer'); ?></label>
			<input type="text" id="<?php echo $this->get_field_id( 'pinterest' ); ?>" name="<?php echo $this->get_field_name( 'pinterest' ); ?>" value="<?php echo $instance['pinterest']; ?>" class="widefat" />
		</p>
        
        <p>
			<label for="<?php echo $this->get_field_id( 'linkedin' ); ?>"><?php _e('LinkedIn URL', 'theretailer'); ?></label>
			<input type="text" id="<?php echo $this->get_field_id( 'linkedin' ); ?>" name="<?php echo $this->get_field_name( 'linkedin' ); ?>" value="<?php echo $instance['linkedin']; ?>" class="widefat" />
		</p>
        
        <p>
			<label for="<?php echo $this->get_field_id( 'twitter' ); ?>"><?php _e('Twitter URL', 'theretailer'); ?></label>
			<input type="text" id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" value="<?php echo $instance['twitter']; ?>" class="widefat" />
		</p>
        
        <p>
			<label for="<?php echo $this->get_field_id( 'googleplus' ); ?>"><?php _e('Google+ URL', 'theretailer'); ?></label>
			<input type="text" id="<?php echo $this->get_field_id( 'googleplus' ); ?>" name="<?php echo $this->get_field_name( 'googleplus' ); ?>" value="<?php echo $instance['googleplus']; ?>" class="widefat" />
		</p>
        
        <p>
			<label for="<?php echo $this->get_field_id( 'rss' ); ?>"><?php _e('RSS URL', 'theretailer'); ?></label>
			<input type="text" id="<?php echo $this->get_field_id( 'rss' ); ?>" name="<?php echo $this->get_field_name( 'rss' ); ?>" value="<?php echo $instance['rss']; ?>" class="widefat" />
		</p>
        
        <p>
			<label for="<?php echo $this->get_field_id( 'tumblr' ); ?>"><?php _e('Tumblr URL', 'theretailer'); ?></label>
			<input type="text" id="<?php echo $this->get_field_id( 'tumblr' ); ?>" name="<?php echo $this->get_field_name( 'tumblr' ); ?>" value="<?php echo $instance['tumblr']; ?>" class="widefat" />
		</p>
        
        <p>
			<label for="<?php echo $this->get_field_id( 'instagram' ); ?>"><?php _e('Instagram URL', 'theretailer'); ?></label>
			<input type="text" id="<?php echo $this->get_field_id( 'instagram' ); ?>" name="<?php echo $this->get_field_name( 'instagram' ); ?>" value="<?php echo $instance['instagram']; ?>" class="widefat" />
		</p>
        
        <p>
			<label for="<?php echo $this->get_field_id( 'youtube' ); ?>"><?php _e('Youtube URL', 'theretailer'); ?></label>
			<input type="text" id="<?php echo $this->get_field_id( 'youtube' ); ?>" name="<?php echo $this->get_field_name( 'youtube' ); ?>" value="<?php echo $instance['youtube']; ?>" class="widefat" />
		</p>
        
        <p>
			<label for="<?php echo $this->get_field_id( 'vimeo' ); ?>"><?php _e('Vimeo URL', 'theretailer'); ?></label>
			<input type="text" id="<?php echo $this->get_field_id( 'vimeo' ); ?>" name="<?php echo $this->get_field_name( 'vimeo' ); ?>" value="<?php echo $instance['vimeo']; ?>" class="widefat" />
		</p>

	<?php
	}
}



?>

