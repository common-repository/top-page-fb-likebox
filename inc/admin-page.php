<?php
/* Adding menu */
function tpfl_options_link_wp_admin(){
add_menu_page('Top Button Options', 'Top Button', 'manage_options', 'tpfl-tb-options', 'tpfl_options_top_button', false, 62 );
    add_submenu_page('tpfl-tb-options', 'FB Likebox Options', 'FB Likebox', 'manage_options', 'tpfl-fb-options', 'tpfl_options_fb_likebox' );
}
add_action( 'admin_menu', 'tpfl_options_link_wp_admin');

/* Create register settings for top button */
function tpfl_tb_register_settings(){
	register_setting( 'tpfl_tb_link_options', 'tpfl_tb_options', 'tpfl_tb_validate_options' );
}
add_action( 'admin_init', 'tpfl_tb_register_settings' );

/* Create register settings for fb likebox */
function tpfl_fb_register_settings(){
	register_setting( 'tpfl_fb_link_options', 'tpfl_fb_options', 'tpfl_fb_validate_options' );
}
add_action( 'admin_init', 'tpfl_fb_register_settings' );

/* Function to generate tb options page */
function tpfl_options_top_button(){
	global $tpfl_tb_options;
?>
	<div class="wrap">
		<h2>Top Button Options</h2>

		<?php if( isset($_GET['settings-updated']) ) { ?>
	    <div class="tpfl_cus_updated">
	        <p><strong><?php _e('Settings saved.') ?></strong></p>
	    </div>
		<?php } ?>

	<form method="POST" action="options.php" class="form_wrapper">
	<?php $settings_tb = get_option( 'tpfl_tb_options', $tpfl_tb_options); ?>
	<?php settings_fields( 'tpfl_tb_link_options' ); ?>
		<table class="form-table">
			
			<tr valign="top" class="enable_wrapper">
				<td>
					<input type="checkbox" name="tpfl_tb_options[enabletb]" id="tpfl_tb_options[enabletb]" value="1" <?php if(isset($settings_tb['enabletb'])) checked( 1, $settings_tb['enabletb'] ); ?>>
					<label class="description" for="tpfl_tb_options[enabletb]"><?php _e('Display Your Top Button', 'tpfl_domain') ?></label>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row"><label for="tpfl_tb_options[top_button]"><?php _e('Top Button Text', 'tpfl_domain') ?></label></th>
				<td>
			<input id="tpfl_tb_options[top_button]" type="text" name="tpfl_tb_options[top_button]" value="<?php echo stripslashes($settings_tb['top_button']); ?>" />
					<p class="description">
						Type your top button text here.
					</p>
				</td>
			</tr>
<a href="https://www.codester.com/items/2040/active-master-ws-plugin-wordpress-plugin" target="_blank"><img src="http://websolutionfahim.com/plugins/wp-content/uploads/2016/06/ad-amws-banner.jpg" alt="Active Master WS Plugin"></a>
			<tr valign="top">
				<th scope="row"><label for="bgcolor_tb"><?php _e('Backgorund Color', 'tpfl_domain') ?></label></th>
				<td>
					<input id="bgcolor_tb" class="color {hash:true}" type="text" name="tpfl_tb_options[bgcolor_tb]" value="<?php echo stripslashes($settings_tb['bgcolor_tb']); ?>" class="my-color-field" />
					<p class="description">
						Select top button background color here. You can also add html HEX color code.
					</p>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row"><label for="textcolor_tb"><?php _e('Text Color', 'tpfl_domain') ?></label></th>
				<td>
					<input id="textcolor_tb" class="color {hash:true}" type="text" name="tpfl_tb_options[textcolor_tb]" value="<?php echo stripslashes($settings_tb['textcolor_tb']); ?>" class="my-color-field" />
					<p class="description">
						Select top button text color here. You can also add html HEX color code.
					</p>
				</td>
			</tr>
			
			<tr valign="top">
				<th scope="row"><label for="fontsize_tb"><?php _e('Font Size', 'tpfl_domain') ?></label></th>
				<td>
					<input id="fontsize_tb" type="text" name="tpfl_tb_options[fontsize_tb]" value="<?php echo stripslashes($settings_tb['fontsize_tb']); ?>" />
					<p class="description">
						Type your top button font size here. Please use px. Example: 16px
					</p>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row"><label for="border_tb"><?php _e('Border', 'tpfl_domain') ?></label></th>
				<td>
					<input id="border_tb" type="text" name="tpfl_tb_options[border_tb]" value="<?php echo stripslashes($settings_tb['border_tb']); ?>" />
					<p class="description">
						Select top button border style here. Example: 3px solid #cc0000
					</p>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row"><label for="borderradius_tb"><?php _e('Border Radius', 'tpfl_domain') ?></label></th>
				<td>
					<input id="borderradius_tb" type="text" name="tpfl_tb_options[borderradius_tb]" value="<?php echo stripslashes($settings_tb['borderradius_tb']); ?>" />
					<p class="description">
						Select top button border radius here. Please use px. Example:5px
					</p>
				</td>
			</tr>


		</table>
	<p class="submit"><input type="submit" class="button-primary" value="Save Options"></p>
	</form>
<p><a href="https://www.codester.com/items/2040/active-master-ws-plugin-wordpress-plugin" target="_blank">Download This Plugin Full Version Here</a></p>
	</div>
<?php	 
}

/* Function to generate fb options page */
function tpfl_options_fb_likebox(){
	global $tpfl_fb_options;
?>
	<div class="wrap">
		<h2>FB Likebox Options</h2>

		<?php if( isset($_GET['settings-updated']) ) { ?>
	    <div class="tpfl_cus_updated">
	        <p><strong><?php _e('Settings saved.') ?></strong></p>
	    </div>
		<?php } ?>

	<form method="POST" action="options.php" class="form_wrapper">
	<?php $settings_fb = get_option( 'tpfl_fb_options', $tpfl_fb_options); ?>
	<?php settings_fields( 'tpfl_fb_link_options' ); ?>
		<table class="form-table">

			<tr valign="top" class="enable_wrapper">
				<td>
					<input type="checkbox" name="tpfl_fb_options[enablefb]" id="tpfl_fb_options[enablefb]" value="1" <?php if(isset($settings_fb['enablefb'])) checked( 1, $settings_fb['enablefb'] ); ?>>
					<label class="description" for="tpfl_fb_options[enablefb]"><?php _e('Display Your FB Likebox', 'tpfl_domain') ?></label>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row"><label for="like_box"><?php _e('Facebook Page Name', 'tpfl_domain') ?></label></th>
				<td>
					<input id="like_box" type="text" name="tpfl_fb_options[like_box]" value="<?php echo stripslashes($settings_fb['like_box']); ?>" />
					<p class="description">
						<strong style="color:red">Important:</strong> Type your facebook fan page name. The fan page URL will be https://www.facebook.com/<span style="color:green">websolutionfahim</span>. Just type your page name. Example: <span style="color:green">websolutionfahim</span> 
					</p>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row"><label for="button_color_fb"><?php _e('Button Color', 'tpfl_domain') ?></label></th>
				<td>
					<input id="button_color_fb" class="color {hash:true}" type="text" name="tpfl_fb_options[button_color_fb]" value="<?php echo stripslashes($settings_fb['button_color_fb']); ?>" class="my-color-field" />
					<p class="description">
						Select FB likebox button color here. You can also add html HEX color code.
					</p>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row"><label for="border_fb"><?php _e('Border', 'tpfl_domain') ?></label></th>
				<td>
					<input id="border_fb" type="text" name="tpfl_fb_options[border_fb]" value="<?php echo stripslashes($settings_fb['border_fb']); ?>" />
					<p class="description">
						Select FB likebox border style here. Example: 5px solid #ddd
					</p>
				</td>
			</tr>
<a href="https://www.codester.com/items/2040/active-master-ws-plugin-wordpress-plugin" target="_blank"><img src="http://websolutionfahim.com/plugins/wp-content/uploads/2016/06/ad-amws-banner.jpg" alt="Active Master WS Plugin"></a>
			<tr valign="top">
				<th scope="row"><label for="borderradius_fb"><?php _e('Border Radius', 'tpfl_domain') ?></label></th>
				<td>
					<input id="borderradius_fb" type="text" name="tpfl_fb_options[borderradius_fb]" value="<?php echo stripslashes($settings_fb['borderradius_fb']); ?>" />
					<p class="description">
						Select FB likebox border radius here. Please use px. Example:5px
					</p>
				</td>
			</tr>

		</table>
	<p class="submit"><input type="submit" class="button-primary" value="Save Options"></p>
	</form>
<p><a href="https://www.codester.com/items/2040/active-master-ws-plugin-wordpress-plugin" target="_blank">Download This Plugin Full Version Here</a></p>
	</div>
<?php	 
}
?>