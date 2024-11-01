<?php
/* Set default options values tb */
$tpfl_tb_options = array(
	'top_button' => 'Go Top',
	'bgcolor_tb' => '#ACF8FB',
	'textcolor_tb' => '#B92E10',
	'fontsize_tb' => '16px',
	'border_tb' => '3px solid #97B0AC',
	'borderradius_tb' => '5px',
);

/* Set default options values fb */
$tpfl_fb_options = array(
	'like_box' => 'websolutionfahim',
	'button_color_fb' => '#F80BD3',
	'border_fb' => '5px solid #ACF8FB',
	'borderradius_fb' => '5px',
);

/* Data validation tb */
function tpfl_tb_validate_options($input){
	global $tpfl_tb_options;
	$settings_tb = get_option( 'tpfl_tb_options', $tpfl_tb_options);

	$input['top_button'] = wp_filter_kses($input['top_button']);
	$input['bgcolor_tb'] = wp_filter_kses($input['bgcolor_tb']);
	$input['textcolor_tb'] = wp_filter_kses($input['textcolor_tb']);
	$input['fontsize_tb'] = wp_filter_kses($input['fontsize_tb']);
	$input['border_tb'] = wp_filter_kses($input['border_tb']);
	$input['borderradius_tb'] = wp_filter_kses($input['borderradius_tb']);

	return $input;
}

/* Data validation fb */
function tpfl_fb_validate_options($input){
	global $tpfl_fb_options;
	$settings_fb = get_option( 'tpfl_fb_options', $tpfl_fb_options);

	$input['like_box'] = wp_filter_kses($input['like_box']);
	$input['button_color_fb'] = wp_filter_kses($input['button_color_fb']);
	$input['border_fb'] = wp_filter_kses($input['border_fb']);
	$input['borderradius_fb'] = wp_filter_kses($input['borderradius_fb']);

	return $input;
}

/* Options active tb */
function tpfl_go_top_button(){
	global $tpfl_tb_options; $tpfl_tb_settings = get_option( 'tpfl_tb_options', $tpfl_tb_options);
	if(isset($tpfl_tb_settings['enabletb']) == true){
	echo '<div class="topbutton" id="button_top">' . $tpfl_tb_settings['top_button'] . '</div>';
	}
?>
	<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery(".topbutton").css({
				background: '<?php echo $tpfl_tb_settings['bgcolor_tb']; ?>',
				color: '<?php echo $tpfl_tb_settings['textcolor_tb']; ?>',
				fontSize: '<?php echo $tpfl_tb_settings['fontsize_tb']; ?>',
				border: '<?php echo $tpfl_tb_settings['border_tb']; ?>',
				borderRadius: '<?php echo $tpfl_tb_settings['borderradius_tb']; ?>',
			});
		});
	</script>		
<?php
	}
	add_action( 'wp_footer','tpfl_go_top_button' );

/* Options active fb */
function tpfl_go_fb_likebox(){
	global $tpfl_fb_options; $tpfl_fb_settings = get_option( 'tpfl_fb_options', $tpfl_fb_options);
	if(isset($tpfl_fb_settings['enablefb']) == true){
		echo '<div class="cancelbtn" id="backfacebook">▼</div>' ;
		echo '<div id="facebook_likebox" class="facebookbottom"><iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2F' . $tpfl_fb_settings['like_box'] . '&width=235&height=290&colorscheme=light&show_faces=true&header=true&stream=false&show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:235px; height:237px;" allowTransparency="true"></iframe></div>';
	}
?>
	<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery("#facebook_likebox, #backfacebook").css({
				border: '<?php echo $tpfl_fb_settings['border_fb']; ?>',
				borderRadius: '<?php echo $tpfl_fb_settings['borderradius_fb']; ?>',
				color: '<?php echo $tpfl_fb_settings['button_color_fb']; ?>',
			});
		});
	</script>
<?php	
}
add_action( 'wp_footer','tpfl_go_fb_likebox' );
?>