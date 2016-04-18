<?php

$dotenv = new Dotenv\Dotenv(dirname(__DIR__));
$dotenv->load();

// Database ////////////////////////////////////////////////////////////////////
define('DB_NAME', getenv('DB_NAME'));
define('DB_USER', getenv('DB_USER'));
define('DB_PASSWORD', getenv('DB_PASSWORD'));
define('DB_HOST', getenv('DB_HOST'));

// Paths ///////////////////////////////////////////////////////////////////////
define('WP_HOME', getenv('WP_HOME'));
define('WP_SITEURL', WP_HOME . '/wp/');
define('WP_CONTENT_URL', WP_HOME . '/app');
define('WP_CONTENT_DIR', dirname(__DIR__) . '/public/app');

// Settings ////////////////////////////////////////////////////////////////////
define('DISALLOW_FILE_EDIT', getenv('DISALLOW_FILE_EDIT') ?: true);
define('WPLANG', getenv('WP_POST_REVISIONS') ?: 'en_GB');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
$table_prefix = getenv('TABLE_PREFIX') ?: 'wp_';

// Autosave, post revisions ////////////////////////////////////////////////////
define('AUTOSAVE_INTERVAL', getenv('AUTOSAVE_INTERVAL') ?: 180); // 3 minutes.
define('WP_POST_REVISIONS', getenv('WP_POST_REVISIONS') ?: 3);

// Debugging – http://codex.wordpress.org/Debugging_in_WordPress ///////////////
define('WP_DEBUG', getenv('WP_DEBUG') ?: false);
define('SCRIPT_DEBUG', getenv('SCRIPT_DEBUG') ?: false);
define('WP_DEBUG_LOG', getenv('WP_DEBUG_LOG') ?: false);
define('SAVEQUERIES', getenv('SAVEQUERIES') ?: false);
define('JETPACK_DEV_DEBUG', getenv('JETPACK_DEV_DEBUG') ?: false);

require_once('wp-salts.php');

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}
