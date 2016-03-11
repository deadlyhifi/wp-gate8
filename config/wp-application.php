<?php
/** define environment **/
define('ENV', getenv('ENV')?: 'development');

// ===================================================
// Load database info and  parameters
// ===================================================
require_once(ENV.'.php');

define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
$table_prefix  = 'wp_';

/** autosave post revisions **/
//define('AUTOSAVE_INTERVAL', 180); // 3 minutes.
//define('WP_POST_REVISIONS', 3);

define('WPLANG', 'en_GB');

require_once('wp-salts.php');

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}
