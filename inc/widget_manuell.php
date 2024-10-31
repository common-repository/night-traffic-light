<?php

class NightTrafficLightWidgetManuell extends WP_Widget 
{
    /*
	* Construct
	*/
    public function __construct() {
		parent::__construct(
			'NightTrafficLightWidgetManuell',
			'Night Traffic Light Manuell',
			array(
				'description' => __( 'Simple traffic light system for WordPress', 'night-traffic-light' )
			)
	    );
	}

	/*
	* Ausgabe
	*/
	public function widget( $args, $instance ) 
    {
        $file = plugins_url().'/night-traffic-light/';
        
        $befor_widget   = $args['before_widget'];
        $after_widget   = $args['after_widget'];
        $befor_tille    = $args['befor_title'];
        $after_title    = $args['after_title'];
        
		$title = apply_filters( 'widget_title', $instance['title'] );
        $status = $instance['status'];
        $width = $instance['width'];
        $text = $instance['text'];
        
        if($status == "red")
        {
            $status_text = '<img src="'.$file.'img/red.png" style="width:'.$width.'px;float:left;padding:5px;" alt="Traffic Light" />';
        }
        if($status == "yellow")
        {
            $status_text = '<img src="'.$file.'img/yellow.png" style="width:'.$width.'px;float:left;padding:5px;" alt="Traffic Light" />';
        }
        if($status == "green")
        {
            $status_text = '<img src="'.$file.'img/green.png" style="width:'.$width.'px;float:left;padding:5px;" alt="Traffic Light" />';
        }
        
        $text = str_replace("%a", $status_text, $text);

		echo $args['before_widget'];
		if ( ! empty( $title ) )
			echo $args['before_title'] . $title . $args['after_title'];
		echo $text;
        echo '<div class="clear"></div>';
		echo $args['after_widget'];
	}

	/*
	* Formular
	*/
	public function form( $instance ) 
    {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
        
		if ( isset( $instance[ 'status' ] ) ) {
			$status = $instance[ 'status' ];
		}
        else 
        {
            $status = "red";
        }
        
        if ( isset( $instance[ 'width' ] ) ) {
			$width = $instance[ 'width' ];
		}
        else
        {
            $width = '50';
        }
        
        if ( isset( $instance[ 'text' ] ) ) {
			$text = $instance[ 'text' ];
		}
        else
        {
            $text = '%a <- die Ampel';
        }
        
		?>
		<p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><strong><?php echo __( 'Title', 'night-traffic-light' ); ?></strong></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
        <p>
            <strong>Status</strong><br/>
                <label><?php echo __( 'Red', 'night-traffic-light' ); ?> <input type="radio" name="<?php echo $this->get_field_name( 'status' ); ?>" value="red" <?php if($status == "red"){echo 'checked="checked"';}?>></label><br />
                <label><?php echo __( 'Yellow', 'night-traffic-light' ); ?> <input type="radio" name="<?php echo $this->get_field_name( 'status' ); ?>" value="yellow" <?php if($status == "yellow"){echo 'checked="checked"';}?>></label><br />
                <label><?php echo __( 'Green', 'night-traffic-light' ); ?> <input type="radio" name="<?php echo $this->get_field_name( 'status' ); ?>" value="green" <?php if($status == "green"){echo 'checked="checked"';}?>></label><br />
        </p>
        <p>
            <label><strong><?php echo __( 'Size', 'night-traffic-light' ); ?></strong></label><br />
            <input id="<?php echo $this->get_field_id( 'width' ); ?>" name="<?php echo $this->get_field_name( 'width' ); ?>" type="text" value="<?php echo esc_attr( $width ); ?>"> px
        </p>
        <p>
            <strong>Text</strong><br />
            <textarea name="<?php echo $this->get_field_name( 'text' ); ?>" style="width:100%;"><?php echo $text; ?></textarea>
        </p>
        <p>
            %a = <?php echo __( 'Code for traffic light', 'night-traffic-light' ); ?>
        </p>
		<?php 
	}

	/*
	* Formular Update
	*/
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['status'] = $new_instance['status'];
        $instance['width'] = $new_instance['width'];
        $instance['text'] = $new_instance['text'];
        
		return $instance;
	}
}
?>