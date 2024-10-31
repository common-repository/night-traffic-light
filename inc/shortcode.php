<?php

function NightTrafficLightShortcode($atts)
{
    /*
     * Extract funtion
     */
    extract( shortcode_atts( array(
        'status' => 'red',
		'size' => '0',
	), $atts ) );
    
    /*
     * Plugin URL
     */
    $file = plugins_url().'/night-traffic-light/';
    
    /*
     * Größen ausgabe anpassen
     */
    if(empty($size))
    {
        $size_code = '';
    }
 else {
        $size_code = 'width:'.$size.'px;';
    }
    
    /*
     * Bild ausgabe
     */
    if($status == "red")
    {
        $status_text = '<img src="'.$file.'/img/red.png" style="'.$size_code.'float:left;padding:5px;" alt="Ampelsystem" />';
    }
    if($status == "yellow")
    {
        $status_text = '<img src="'.$file.'/img/yellow.png" style="'.$size_code.'float:left;padding:5px;" alt="Ampelsystem" />';
    }
    if($status == "green")
    {
        $status_text = '<img src="'.$file.'/img/green.png" style="'.$size_code.'float:left;padding:5px;" alt="Ampelsystem" />';
    }
    
    /*
     * Ausgabe
     */
    echo $status_text;
}
?>