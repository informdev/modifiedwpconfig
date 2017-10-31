<?php

/**
 * A modified configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file has several custom configurations along with
 * the default stuff. Do not use this at face value. Instead
 * use it to draw upon your own configuration.
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

##########################################################
// InformDev's Pimped Out Configuration
// Use only for Development
// https://gist.github.com/informdev/
##########################################################

/*
##########################################################
 My Standard Dev Plugins (install using wp-cli)
##########################################################
# Install Standard Plugins
wp plugin install wordpress-seo --activate
wp plugin install testimonials-by-woothemes
wp plugin install jetpack
wp plugin install google-analytics-for-wordpress
 
# Install Dev Plugins (Activated)
wp plugin install developer --activate
wp plugin install debug-bar --activate
wp plugin install debug-bar-extender --activate
wp plugin install debug-bar-cron --activate
wp plugin install debug-bar-transients --activate
wp plugin install debug-bar-actions-and-filters-addon --activate
wp plugin install debug-bar-console --activate
wp plugin install debug-bar-constants --activate
wp plugin install user-switching --activate
wp plugin install log-deprecated-notices --activate
wp plugin install log-viewer --activate
wp plugin install rewrite-rules-inspector --activate
wp plugin install monster-widget --activate
wp plugin install regenerate-thumbnails --activate
wp plugin install helpful-information --activate
wp plugin install deprecation-checker --activate
wp plugin install wordpress-importer --activate
wp plugin install simply-show-ids --activate
 
# Install Dev Plugins (Deactivated)
wp plugin install rtl-tester
wp plugin install piglatin
wp plugin install theme-check
wp plugin install theme-mentor
*/

##########################################################
// Database
##########################################################
/* MySQL Quick Reference */

// DB External Hostname:
// PHP MyAdmin URL: https://url-to-phpmyadmin/

define('DB_NAME', 'yourdbname');
define('DB_USER', 'yourdbusername');
define('DB_PASSWORD', 'yourdbpassword');

define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

/* MySQL database table prefix. */
$table_prefix  = 'wp_';

/* DB Repair - /wp-admin/maint/repair.php */
define('WP_ALLOW_REPAIR', false);

##########################################################
// Security
##########################################################

/* Authentication Unique Keys and Salts. */
/* https://api.wordpress.org/secret-key/1.1/salt/ */
define('AUTH_KEY',         'YOURSECRETKEY');
define('SECURE_AUTH_KEY',  'YOURSECRETKEY');
define('LOGGED_IN_KEY',    'YOURSECRETKEY');
define('NONCE_KEY',        'YOURSECRETKEY');
define('AUTH_SALT',        'YOURSECRETKEY');
define('SECURE_AUTH_SALT', 'YOURSECRETKEY');
define('LOGGED_IN_SALT',   'YOURSECRETKEY');
define('NONCE_SALT',       'YOURSECRETKEY');

/* Disallow unfiltered_html for all users, even admins and super admins */
// define( 'DISALLOW_UNFILTERED_HTML', false );

// define('FORCE_SSL_LOGIN',true); // Force SSL for WordPress Login Page
// define('FORCE_SSL_ADMIN',true); // Force SSL for WordPress Admin
// define( 'JETPACK_CLIENT__HTTPS', 'NEVER' ); // Force Jetpack to not use HTTPS
// define('WP_HTTP_BLOCK_EXTERNAL', true); // Block External Connections
// define (‘WP_ACCESSIBLE_HOSTS’, ‘api.wordpress.org, akismet.com, etc’); // Whitelist for External Connections
// define( 'ALLOW_UNFILTERED_UPLOADS', true );

/* Disable Plugin & Editor Access */
define('DISALLOW_FILE_EDIT', true);

/* Disable Plugin & Theme Update/Install */
define('DISALLOW_FILE_MODS', true);

##########################################################
// General Settings
##########################################################

/* Custom WordPress URLS. */
define('SP_REQUEST_URL', ($_SERVER['HTTPS'] ? 'https://' : 'http://') . $_SERVER['HTTP_HOST']);
define('WP_SITEURL', SP_REQUEST_URL);
define('WP_HOME', SP_REQUEST_URL);
// define( 'WP_HOME',        'http://domain.com' ); 
// define( 'WP_SITEURL',     'http://domain.com' );
// define( 'WP_CONTENT_URL', 'http://domain.com/wp-content' );
// define( 'UPLOADS',        'http://domain.com/wp-contents/uploads' );
// define( 'WP_PLUGIN_URL',  'http://domain.com/wp-content/plugins' );
// define( 'COOKIE_DOMAIN',  'http://domain.com' );
// define('DOMAIN_CURRENT_SITE', 'blog.domain.com' );
// define( 'WP_DEFAULT_THEME', 'default-theme-folder-name' );

/* WordPress Localized Language. */
define( 'WPLANG', '' );

/* Specify maximum number of Revisions. */
define( 'WP_POST_REVISIONS', '3' );

/* Media Trash. */
define( 'MEDIA_TRASH', true );

/* Trash Days. */
define( 'EMPTY_TRASH_DAYS', '7' );

/* CRON */
define( 'DISABLE_WP_CRON',      'true' );
define( 'ALTERNATE_WP_CRON',    'false' );
// define('WP_CRON_LOCK_TIMEOUT',60);

/* WordPress debug mode for developers. */
define( 'WP_DEBUG',          false );
define( 'WP_DEBUG_LOG',      false );
define( 'WP_DEBUG_DISPLAY',  false );
define( 'SCRIPT_DEBUG',      false );
define( 'SAVEQUERIES',       false );
define( 'JETPACK_DEV_DEBUG', false);
// define('RELOCATE',true); // Used to Update Site URLS

##########################################################
// Plugin Settings
##########################################################

/* Gravity Forms License Key */
// define("GF_LICENSE_KEY", "YOUR-LICENSE-KEY-HERE"); 

/* Local SEO License Key */
// define("WPSEO_LOCAL_LICENSE", "YOUR-LICENSE-KEY-HERE");

/* Video SEO License Key */
// define("WPSEO_VIDEO_LICENSE", "YOUR-LICENSE-KEY-HERE");

/* Jetpack - WordPress Connect */
// define( 'WPCOM_API_KEY', 'YOUR-API-KEY-HERE' );
// define( 'WPCC_MATCH_BY_EMAIL', false );
// define( 'WPCC_NEW_USER_OVERRIDE', true );

##########################################################
// Performance & Updates
##########################################################

/* PHP Memory */
define( 'WP_MEMORY_LIMIT', '256' );
// define( 'WP_MAX_MEMORY_LIMIT', '256' );

/* WordPress Cache + WP Super Cache */
define( 'WP_CACHE', true );
define( 'WPCACHEHOME', '/path/to/your/supercache/folder' ); //Added by WP-Cache Manager

/* Compression */
define( 'COMPRESS_CSS',        true );
define( 'COMPRESS_SCRIPTS',    true );
define( 'CONCATENATE_SCRIPTS', true );
define( 'ENFORCE_GZIP',        true );

/* Updates */
define( 'WP_AUTO_UPDATE_CORE', true );
// define( 'AUTOMATIC_UPDATER_DISABLED', true );
// add_filter( 'auto_update_plugin', '__return_true' );
// add_filter( 'auto_update_theme', '__return_true' );
// define('FS_METHOD', 'direct'); // Force Direct Install

##########################################################
// DO NOT EDIT
##########################################################

/* Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/* Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
