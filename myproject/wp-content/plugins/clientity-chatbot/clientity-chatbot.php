<?php
/*
Plugin Name: Clientity Chatbot
Plugin URI: https://clientity.com
Description: Chatbot to convert visits into leads
Author: Clientity
Text Domain: clientity-chatbot
Domain Path: /languages
Version: 1.2.0
*/

// Make sure that no info is exposed if file is called directly -- Idea taken from Akismet plugin
if ( !function_exists( 'add_action' ) ){
	echo "This page cannot be called directly.";	exit;
}

if ( ! defined( 'CLIENTITY_PLUGIN_NAME' ) ) define( 'CLIENTITY_PLUGIN_NAME', 'clientity-chatbot' );
if ( ! defined( 'CLIENTITY_PLUGIN_VERSION' ) ) define( 'CLIENTITY_PLUGIN_VERSION', '1.2.0' );


function clientity_load_plugin_textdomain() {
    load_plugin_textdomain( 'clientity-chatbot', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'clientity_load_plugin_textdomain' );


// Add admin menu item
function clientity_add_pages()
{
	// anyone can see the menu for the Blank Plugin
	add_menu_page('Clientity', 'Clientity', 'read', 'clientity_overview', 'clientity_overview', plugins_url("/images/clientity_favicon_16.png", __FILE__));

	// call register settings function
	add_action( 'admin_init', 'clientity_register_settings' );
}
add_action('admin_menu', 'clientity_add_pages');


// Add attributes to script tag
function clientity_loader_tag( $tag, $handle )
{
    if ( $handle == 'clientity-js' )
	{
        return str_replace( '<script', '<script id="clientity-js" data-bot_code="' . esc_attr(get_option('clientity_bot_code')) . '" data-position="' .  esc_attr(get_option('clientity_position')) . '" ', $tag );
    }
    return $tag;    
}
add_filter( 'script_loader_tag', 'clientity_loader_tag', 10, 2 );


// Enqueue the scripts
function clientity_enqueue_scripts()
{
	if ( is_admin() ) return; // Hide in admin area
	
	if( current_user_can('administrator') ) return;  // Hide if user is logged as admin
	 
	$show_widget = false;
	
	$isMobile = clientity_isMobileDevice();
	
	// Only enqueue scripts if status enabled
	if( esc_attr( get_option('clientity_widget_status') ) )
	{
		$show_widget = true;
		
		if( $isMobile &&  esc_attr(get_option('clientity_show_mobile')) )
		{
			$show_widget = true;
		}
		else if( !$isMobile &&  esc_attr(get_option('clientity_show_desktop')) )
		{
			$show_widget = true;
		}
		else
		{
			$show_widget = true;
		}
	}
	else
	{
		$show_widget = false;
	}
		
		
	if( !esc_attr( get_option('clientity_bot_code') ) ||  esc_attr( get_option('clientity_bot_code') ) == "" )
	{
		$show_widget = false;
	}
	
	
	// Check excluded posts (slug/id):
	
	global $post;  // current post
	
    $post_slug = $post->post_name;
	$post_id =  $post->ID;
	
	$excluded_posts =  explode(",", esc_attr( get_option('clientity_excluded_posts') ) );  // slugs and ids comma sepparated
	
	if( in_array($post_slug, $excluded_posts) )
	{
		$show_widget = false;
	}
	if( in_array($post_id, $excluded_posts) )
	{
		$show_widget = false;
	}
	
	
	if( $show_widget )
	{
		// Scripts	
		wp_enqueue_script('clientity-js', '//clientity.com/js/widget.js.php', array('jquery'), false, true); // El true significa in_footer


		// CSS
		wp_enqueue_style( 'clientity_widget_css', '//clientity.com/css/widget.css' );
	} 
}
add_action( 'wp_enqueue_scripts', 'clientity_enqueue_scripts' );


// Add settings link in plugins list
function clientity_plugin_add_settings_link( $links )
{
    $settings_link = '<a href="admin.php?page=' . "clientity_overview" . '">' . __( 'Settings' ) . '</a>';
    array_push( $links, $settings_link );
  	return $links;
}
add_filter( "plugin_action_links_" . plugin_basename( __FILE__ ), 'clientity_plugin_add_settings_link' );



// Register settings 
function clientity_register_settings() {
	//register our settings
	register_setting( 'clientity-settings-group', 'clientity_widget_status' , array('default' => true) );
	register_setting( 'clientity-settings-group', 'clientity_bot_code' , array('default' => "") );
	register_setting( 'clientity-settings-group', 'clientity_show_desktop' , array('default' => true) );
	register_setting( 'clientity-settings-group', 'clientity_show_mobile' , array('default' => true) );
	register_setting( 'clientity-settings-group', 'clientity_position' , array('default' => "right") );
}


// Admin settings page
function clientity_overview()
{
?>
<style>
p.submit {
     text-align: right;
}

div.div-color{
	height: 18px;
	width: 18px;
	border: 1px solid #ccc;
	vertical-align: text-bottom;
	display: inline-block;
}

input[type=text]{
	width: 80%;
}

.text-right{
	text-align: right;
}
.logo:focus{
	box-shadow:none;
}
h3{
	border-bottom: 1px solid #ced5dc;
    padding-bottom: 5px;
}
</style>
<div class="wrap">
	<h2>CLIENTITY Chatbot</h2>

	<form method="post" action="options.php" novalidate="novalidate">
	
<?php settings_fields( 'clientity-settings-group' ); ?>
<?php do_settings_sections( 'clientity-settings-group' ); ?>

	
		<div class="card">
			<br>
			<div class="text-right" ><a href="https://clientity.com" class="logo" target="_blnank"><img src="<?php echo plugins_url("/images/clientity_logo_blue_22.png", __FILE__); ?>"></a></div>
			<br>
<?php
	if( !esc_attr(get_option('clientity_bot_code')) || esc_attr(get_option('clientity_bot_code')) == "" )
	{
?>		
		<div class="notice inline notice-info notice-alt">
			<p>
<?php
				printf(
					/* translators: %s: Name of a city */
					__( 'Sign up <b>FREE</b> at <a href="%s" target="_blank">clientity.com</a> to activate your chatbot', 'clientity-chatbot' ),
					'https://clientity.com'
				);
?>			
			</p>
		</div>
		<br><br>
<?php		
	}
?>			
			<h3 class="title"><?= __( 'Bot settings', 'clientity-chatbot' ) ?></h3>
			<table class="form-table">
				<tbody>
					<tr>
						<th scope="row"><label for="clientity_widget_status"><?= __( 'Bot status', 'clientity-chatbot' ) ?></label></th>
						<td><fieldset><legend class="screen-reader-text"><span><?= __( 'Bot status', 'clientity-chatbot' ) ?></span></legend><label for="users_can_register">
							<input name="clientity_widget_status" type="checkbox" id="clientity_widget_status" <?php if( esc_attr( get_option('clientity_widget_status') ) ) echo "checked"; ?> />
							<?= __( 'Show/hide the chat window', 'clientity-chatbot' ) ?></label>
							</fieldset></td>
					</tr>	
					<tr>
						<th scope="row"><label for="clientity_bot_code"><?= __( 'Bot code', 'clientity-chatbot' ) ?></label></th>
						<td><input name="clientity_bot_code" type="text" id="clientity_bot_code" value="<?php echo esc_attr( get_option('clientity_bot_code') ); ?>" class="regular-text" placeholder="<?= __( 'Something like bt37459a0bc8378326c', 'clientity-chatbot' ) ?>">
						<p class="description" ><?= __( 'Get it FREE at', 'clientity-chatbot' ) ?> <a href="https://clientity.com/signup" target="_blank">clientity.com</a></p></td>
					</tr>
<?php /*					
					<tr>
						<th scope="row"><label for="clientity_show_desktop">Show</label></th>
						<td><fieldset><legend class="screen-reader-text"><span>Show</span></legend>
						<label for="clientity_show_desktop">
							<input name="clientity_show_desktop" type="checkbox" id="clientity_show_desktop" value="desktop" <?php if( esc_attr( get_option('clientity_show_desktop') ) ) echo "checked"; ?> />
							Desktop</label>&nbsp; &nbsp; &nbsp; &nbsp;
							<label for="clientity_show_mobile">
							<input name="clientity_show_mobile" type="checkbox" id="clientity_show_mobile" value="mobile" <?php if( esc_attr( get_option('clientity_show_mobile') ) ) echo "checked"; ?> />
							Mobile</label>
							</fieldset></td>
					</tr>
*/ ?>
				</tbody>
			</table>
			
			<br><br>
			
			<h3 class="title"><?= __( 'Chat window position', 'clientity-chatbot' ) ?></h3>
			<table class="form-table">
				<tbody>
						
					<tr>
						<th scope="row"><label for="clientity_bot_code"><?= __( 'Position', 'clientity-chatbot' ) ?></label></th>
						<td><select  id="clientity_position" name="clientity_position">
								<option value="right" <?php echo( esc_attr( get_option('clientity_position') ) == "right" ? "selected" : "" ); ?> ><?= __( 'Right', 'clientity-chatbot' ) ?></option>
								<option value="left" <?php echo ( esc_attr( get_option('clientity_position') ) == "left" ? "selected" : "" ); ?> ><?= __( 'Left', 'clientity-chatbot' ) ?></option>
						</select></td>
					</tr>
					
				</tbody>
			</table>
			
			<br><br>
			
			<h3 class="title"><?= __( 'Excluded posts', 'clientity-chatbot' ) ?></h3>
			<p><?= __( "Type here the <i>Slugs</i> or <i>IDs</i> of the pages and posts where you don't want to show the chat window", 'clientity-chatbot' ) ?></p>
			<table class="form-table">
				<tbody>
					<tr>
						<th scope="row"><label for="clientity_excluded_posts"><?= __( 'Slugs or IDs', 'clientity-chatbot' ) ?></label></th>
						<td><input name="clientity_excluded_posts" type="text" id="clientity_excluded_posts" value="<?php echo esc_attr( get_option('clientity_excluded_posts') ); ?>" class="regular-text" placeholder="<?= __( 'Slugs and IDs separated by commas', 'clientity-chatbot' ) ?>">
						<p class="description" ><?= __( 'Type the <i>Slugs</i> or <i>IDs</i> of the pages and posts separated by commas', 'clientity-chatbot' ) ?></p></td>
					</tr>

				</tbody>
			</table>
			
			
			<?php submit_button(); ?>

			
			<br><br>
			<div class="notice inline notice-info notice-alt">
			<p><?= __( 'Do you know our <b>PARTNERS</b> program?', 'clientity-chatbot' ) ?> <?= __( 'Earn money selling Clientity', 'clientity-chatbot' ) ?>. <a href="https://clientity.com/partners" target="_blank"><?= __( 'More info', 'clientity-chatbot' ) ?></a></p>
			</div>
			<br><br>
		
		</div>
		<p class="description"><?= __( 'Clientity Chatbot Wordpress Plugin', 'clientity-chatbot' ) ?>. <?= __( 'Version', 'clientity-chatbot' ) ?> <?php echo CLIENTITY_PLUGIN_VERSION; ?>. <a href="https://clientity.com" target="_blank">clientity.com</a></p>
	
	</form>

</div>
<?php

}



function clientity_isMobileDevice(){
    $aMobileUA = array(
        '/iphone/i' => 'iPhone', 
        '/ipod/i' => 'iPod', 
        '/ipad/i' => 'iPad', 
        '/android/i' => 'Android', 
        '/blackberry/i' => 'BlackBerry', 
        '/webos/i' => 'Mobile'
    );

    //Return true if Mobile User Agent is detected
    foreach($aMobileUA as $sMobileKey => $sMobileOS){
        if(preg_match($sMobileKey, $_SERVER['HTTP_USER_AGENT'])){
            return true;
        }
    }
    //Otherwise return false..  
    return false;
}


?>