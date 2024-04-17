<?php
/**
 * WordPress Database Configuration
 */

define('DB_NAME', $_ENV['SQL_DATABASE']);
define('DB_USER', $_ENV['SQL_USERNAME']);
define('DB_PASSWORD', $_ENV['SQL_PASSWORD']);
define('DB_HOST', $_ENV['SQL_HOST']);
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

/**
 * Authentication Unique Keys and Salts
 * Generate these at: https://api.wordpress.org/secret-key/1.1/salt/
 */

define('AUTH_KEY',         'your_unique_key');
define('SECURE_AUTH_KEY',  'your_unique_key');
define('LOGGED_IN_KEY',    'your_unique_key');
define('NONCE_KEY',        'your_unique_key');
define('AUTH_SALT',        'your_unique_key');
define('SECURE_AUTH_SALT', 'your_unique_key');
define('LOGGED_IN_SALT',   'your_unique_key');
define('NONCE_SALT',       'your_unique_key');

/**
 * WordPress Database Table prefix
 */

$table_prefix = 'wp_';

/**
 * WordPress Debugging
 */

define('WP_DEBUG', false);
define('WP_DEBUG_LOG', false);
define('WP_DEBUG_DISPLAY', false);

/**
 * WordPress Content Directory
 */

define('WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content');
define('WP_CONTENT_URL', 'http://your-domain.com/wp-content');

/**
 * Other WordPress Settings
 */

define('AUTOMATIC_UPDATER_DISABLED', true);
define('DISABLE_WP_CRON', true);
define('DISALLOW_FILE_EDIT', true);

/**
 * Load WordPress
 */

if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}
require_once(ABSPATH . 'wp-settings.php');