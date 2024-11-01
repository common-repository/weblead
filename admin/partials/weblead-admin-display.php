<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://webleadapp.com/wp/
 * @since      1.0.0
 *
 * @package    Weblead
 * @subpackage Weblead/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
	<div class="wrap">
	    <h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
		<div>
			You need a <a href="https://webleadapp.com/account/getcode" target="_blank">Weblead</a> account in order to use this plugin. This plugin insert neccessary code into your Wordpress site, so that you don't need to modify your theme source files. You need to enter your subdomain, if you don't know it, you can find it out on your <a href="https://webleadapp.com/account/settings" target="_blank">account settings page.</a>
		</div>
		<form action="options.php" method="post">
	        <?php
	            settings_fields( $this->plugin_name );
	            do_settings_sections( $this->plugin_name );
	            submit_button();
	        ?>
	    </form>
		
	</div>