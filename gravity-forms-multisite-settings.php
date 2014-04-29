<?php
/*
Plugin Name: Gravity Forms Multisite Global Settings
Plugin URI:
Description: Set global Gravity Forms settings for your multisite
Version: 2014.04.29
Author: khromov
Author URI: http://snippets.khromov.se
License: GPL2
*/

/** This is the inverse of the "Output CSS" setting **/
add_filter('pre_option_rg_gforms_disable_css', function($value)
{
	if(defined('GF_DISABLE_CSS'))
		return GF_DISABLE_CSS;
	else
		return $value;
});

/* Output HTML5 setting */
add_filter('pre_option_rg_gforms_enable_html5', function($value)
{
	if(defined('GF_OUTPUT_HTML5'))
		return GF_OUTPUT_HTML5;
	else
		return $value;
});

/* No-Conflict mode */
add_filter('pre_option_gform_enable_noconflict', function($value)
{
	if(defined('GF_NO_CONFLICT_MODE'))
		return GF_NO_CONFLICT_MODE;
	else
		return $value;
});

/** reCAPTCHA Public Key */
add_filter('pre_option_rg_gforms_captcha_public_key', function($value)
{
	if(defined('GF_RECAPTCHA_PUBLIC_KEY'))
		return GF_RECAPTCHA_PUBLIC_KEY;
	else
		return $value;
});

/** reCAPTCHA Private Key */
add_filter('pre_option_rg_gforms_captcha_private_key', function($value)
{
	if(defined('GF_RECAPTCHA_PRIVATE_KEY'))
		return GF_RECAPTCHA_PRIVATE_KEY;
	else
		return $value;
});

/* Support License Key - This isn't really useful, as non-network admins can't update the plugin, and can't even see the key. */
add_filter('pre_option_rg_gforms_key', function($value)
{
	if(defined('GF_LICENSE_KEY'))
		return GF_LICENSE_KEY;
	else
		return $value;
});