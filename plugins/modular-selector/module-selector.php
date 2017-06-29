<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
/*
    Plugin Name: Modular WP Module Selector
    Plugin URI: http://www.netgainseo.com
    Description: A plugin to select which modules you would like to use.
    Version: 1.0
    Author: Net Gain SEO Web Development Team
    Author URI: http://www.netgainseo.com
*/

function register_modularSelectionSetting() {
	register_setting('modular-modules','modular_modules');
}
add_action('admin-init','register_modularSelectionSetting');

function modular_wp_module_selector_menu() {
	add_menu_page( 'Modular WP Module Selector', 'Modular WP Module Selector', 'manage_options', 'modular-wp-module-selector', 'modular_wp_module_selector' );
}
add_action( 'admin_menu', 'modular_wp_module_selector_menu' );

function modular_wp_module_selector() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}

	if(isset($_POST['submit'])) {
		if(!isset($_POST['module_options'])) {
			update_option('modular_modules','');
			echo '<div class="notice notice-success is-dismissible"><p>Modules successfully updated!</p></div>';
		}
		else {
			update_option('modular_modules',$_POST['module_options']);
			echo '<div class="notice notice-success is-dismissible"><p>Modules successfully updated!</p></div>';
		}
	}


	$folders = scandir(plugin_dir_path(__FILE__).'/modules');
	$folders = array_diff($folders, array('..', '.'));

	?>


	<h1>Modular WP Module Selector</h1>

<?php

	$modules = get_option('modular_modules');

	echo '<form method="POST" action="'.$_SERVER['PHP_SELF'].'?page=modular-wp-module-selector&action=save">';
		echo '<table class="widefat fixed" cellspacing="0">';
		$count = 0;
		foreach($folders as $folder) {
			$count++;
			$dir = plugin_dir_path(__FILE__).'/modules/'.$folder;

			echo '<tr '.(($count % 2 == 0) ? 'class="alternate"':'').'>';
				echo '<td class="column-columnname"><label><input type="checkbox" name="module_options[]" value="'.$folder.'" '.((is_array($modules) && in_array($folder,$modules)) ? 'checked':'').'/> '.$folder.'</label></td>';
			echo '</tr>';

		}

		echo '</table>';

		echo '<input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes" style="margin-top: 10px;">';
	echo '</form>';
}

function modular_modules_load() {
	$modules = get_option('modular_modules');
	if(is_array($modules)) {
		foreach($modules as $m) {
			include_once(plugin_dir_path(__FILE__).'/modules/'.$m.'/index.php');
		}
	}
	//include_once(plugin_dir_path(__FILE__).'/control-panel/index.php');
	//include_once(plugin_dir_path(__FILE__).'/color_composer/index.php');
}
add_action('after_setup_theme', 'modular_modules_load');