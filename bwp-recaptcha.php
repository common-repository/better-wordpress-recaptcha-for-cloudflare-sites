<?php
/*
Plugin Name: Better WordPress reCAPTCHA for CloudFlare sites
Plugin URI: -
Description: Original plugin by Better WordPress reCAPTCHA by OddOneOut but this plugin is optimized to work with CloudFlare powered sites
Version: 1.0.0
Text Domain: better-wordpress-recaptcha-for-cloudflare-sites
Domain Path: /languages/
Author: Daniel (Original: Khang Minh)
Author URI: -
License: GPLv3
*/

// Backend
add_action('admin_menu', 'bwp_recaptcha_init_admin', 1);

// Frontend
add_action('init', 'bwp_recaptcha_init');

function bwp_recaptcha_init()
{
	global $bwp_capt;

	require_once('includes/class-bwp-recaptcha.php');
	$bwp_capt = new BWP_RECAPTCHA();
}

function bwp_recaptcha_init_admin()
{
	global $bwp_capt;
	
	$bwp_capt->init_admin();
}
?>