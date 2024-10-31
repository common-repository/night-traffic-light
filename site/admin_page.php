<?php 

function NightTrafficLightAdminPage()
{
    $file = plugins_url().'/night-traffic-light/';
    
    $tab = $_GET["tab"];
    
    if(!isset($tab) OR $tab == "shortcode")
    {
        echo '
        <h2 class="nav-tab-wrapper">
            <a href="?page=NightTrafficLightAdminPage&tab=shortcode" class="nav-tab nav-tab-active">'. __( 'Shortcode', 'night-traffic-light' ) .'</a>
            <a href="?page=NightTrafficLightAdminPage&tab=info" class="nav-tab">'. __( 'Info', 'night-traffic-light' ) .'</a>
        </h2>
        <div class="postbox-container" style="width:100%;">
			<div id="adminform" class="postbox">
                <div class="inside">
                    <h2>Shortcode</h2>
                        '. __('To insert your traffic light in postings or pages you can use our simple shortcode.<br />If our traffic light system shall be embetted into a widget, you will not need this shortcode function as we built an extra widget function for you.<br><strong>These can be found at:</strong><br />', 'night-traffic-light') .'
                        <br />
                        '. __( '<i>Designs -> Widgets ->  Nights Traffic Light Manuell</i>.', 'night-traffic-light' ) .'
                        <br />
                        <h2>'. __( 'Shortcode variables', 'night-traffic-light' ) .'</h2>

                        <h3>'. __( 'Following code is basis:', 'night-traffic-light' ) .'</h3>
                        <code>[ntl status="y" size="x"]</code>

                        <h4>'. __( 'Variables for y', 'night-traffic-light' ) .'</h4>
                        '. __( 'The letter y in the code means the colour your traffic light will show.<br />Substitute y with one of these colours:', 'night-traffic-light' ) .'
                        <ul>
                         <li><span style="color:#FF0000">red</span> </li>
                         <li><span style="color:#cdd400">yellow</span> </li>
                         <li><span style="color:#009405">green</span> </li>
                        </ul>

                        <h4>'. __( 'Variables for x', 'night-traffic-light' ) .'</h4>
                        '. __( 'The letter x means the size oft the pixels', 'night-traffic-light' ) .' 

                        <h3>'. __( 'Example', 'night-traffic-light' ) .'</h3>

                        <code>[ntl status="red" size="50"]</code> <br />
                        '. __( 'The traffic light shows red and has a size of 50 pixels.', 'night-traffic-light' ) .'
                </div>
            </div>
        </div>
        <div class="clear"></div>
        ';
    }
    
    if($tab == "info")
    {
        echo '
        <h2 class="nav-tab-wrapper">
            <a href="?page=NightTrafficLightAdminPage&tab=shortcode" class="nav-tab">'. __( 'Shortcode', 'night-traffic-light' ) .'</a>
            <a href="?page=NightTrafficLightAdminPage&tab=info" class="nav-tab nav-tab-active">'. __( 'Info', 'night-traffic-light' ) .'</a>
        </h2>
        <div class="postbox-container" style="width:70%;">
			<div id="adminform" class="postbox">
                <div class="inside">
                    <h2>'. __( 'Info', 'night-traffic-light' ) .'</h2>
                        <img src="'.$file.'/img/logo.jpg" width="152" height="128" align="left" vspace="10" hspace="20" alt="Nights Traffic Light"> <h1>'. __( 'Thank you', 'night-traffic-light' ) .'</h1>
                        '. __( 'We thank you very much that you decided to use our plugin nights traffic light.<br /><br />In case you have questions, suggestions, bugs or messages for us you can contact us here<br />', 'night-traffic-light' ) .' <a href="https://www.facebook.com/wpchecker">'. __( 'Facebook', 'night-traffic-light' ) .'</a> | <a href="http://support.tb-webtec.de/">'. __( 'Support Center', 'night-traffic-light' ) .'</a>
                </div>
                <div class="clear"></div>
                <hr />
                <div class="inside">
                    <h2>'. __( 'Many thanks to ...', 'night-traffic-light' ) .'</h2>
                       <ul>
                        <li>'. __( '<a href="http://greyeconsulting.de" target="_blank">Sonja Greye</a> - translation - German-English', 'night-traffic-light' ) .'</li>
                       </ul>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="postbox-container" style="width:30%;">
			<div id="adminform" class="postbox">
                <div class="inside">
                    <h2>'. __( 'Support', 'night-traffic-light' ) .'</h2>
                        <div style="text-align:center;">
                        <a href="http://support.tb-webtec.de/" target="_blank">
                            <img src="'.plugins_url().'/night-traffic-light/img/support-center.png" style="width:100%;" />
                        </a>
                        </div>
                        
                    <h2>'. __( 'Pay for a round of coffee', 'night-traffic-light' ) .'</h2>
                    <div style="text-align:center;">
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="LQYMRKQMGRG3C">
                        <input type="image" src="http://tb-webtec.de/support.png" border="0" name="submit" alt="Jetzt einfach, schnell und sicher online bezahlen – mit PayPal.">
                        <img alt="" border="0" src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1">
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        ';
    }
    
    $plugins_url = plugins_url();
    ?>
    <!-- Footer -->
			<div style="display: block;margin-top: 10px;text-align: -webkit-center;color: #333;background-color: #E8E8E8;padding: 10px 15px;border-top-width:1px;border-top-style:solid;border-top-color:#CCCCCC;margin-top: 35px;font-weight: bold;text-align:center;">
                <a href="http://tb-webtec.de/" target="_blank"><img style="vertical-align: middle;" src="<?php echo $plugins_url; ?>/night-traffic-light/img/tb-webtec-logo.png" alt="TB-WebTec" /></a> 
					Night Traffic Light <?php echo __( 'developed by', 'night-traffic-light' ); ?> <a href="http://tb-webtec.de/" target="_blank">TB-WebTec</a>
                    <?php echo __( 'in cooperation with', 'night-traffic-light' ); ?> <a href="http://wp-checker.de" target="_blank">WP-Checker.de</a><br />
                    Made in Germany
			</div>
		<!-- Footer end -->
<?php
}

?>