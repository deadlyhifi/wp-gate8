<?php

// Register the Composer auto loader
require __DIR__.'/../vendor/autoload.php';

// Load the environment variables from .env
(new Dotenv\Dotenv(__DIR__.'/..'))->load();

// Database ////////////////////////////////////////////////////////////////////
define('DB_NAME', getenv('DB_NAME'));
define('DB_USER', getenv('DB_USER'));
define('DB_PASSWORD', getenv('DB_PASSWORD'));
define('DB_HOST', getenv('DB_HOST'));
define('WP_LANG', getenv('WP_LANG') ?: 'en_GB');
define('DB_CHARSET', getenv('DB_CHARSET') ?: 'utf8');
define('DB_COLLATE', getenv('DB_COLLATE') ?: '');
$table_prefix = getenv('TABLE_PREFIX') ?: 'wp_';

// Paths ///////////////////////////////////////////////////////////////////////
define('WP_HOME', getenv('WP_HOME'));
define('WP_SITEURL', WP_HOME . '/wp/');
define('WP_CONTENT_URL', WP_HOME . '/app');
define('WP_CONTENT_DIR', __DIR__ . '/app');

// Settings ////////////////////////////////////////////////////////////////////
define('DISALLOW_FILE_EDIT', getenv('DISALLOW_FILE_EDIT') ?: true);
define('IMAGE_EDIT_OVERWRITE', getenv('IMAGE_EDIT_OVERWRITE') ?: true);
define('AUTOSAVE_INTERVAL', getenv('AUTOSAVE_INTERVAL') ?: 180); // 3 minutes.
define('WP_POST_REVISIONS', getenv('WP_POST_REVISIONS') ?: 3);

// Salts ///////////////////////////////////////////////////////////////////////
define('AUTH_KEY', getenv('AUTH_KEY'));
define('SECURE_AUTH_KEY', getenv('SECURE_AUTH_KEY'));
define('LOGGED_IN_KEY', getenv('LOGGED_IN_KEY'));
define('NONCE_KEY', getenv('NONCE_KEY'));
define('AUTH_SALT', getenv('AUTH_SALT'));
define('SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT'));
define('LOGGED_IN_SALT', getenv('LOGGED_IN_SALT'));
define('NONCE_SALT', getenv('NONCE_SALT'));

// Debugging – http://codex.wordpress.org/Debugging_in_WordPress ///////////////
define('WP_DEBUG', getenv('WP_DEBUG') ?: false);
define('WP_DEBUG_DISPLAY', getenv('WP_DEBUG') ?: false);
define('SCRIPT_DEBUG', getenv('SCRIPT_DEBUG') ?: false);
define('WP_DEBUG_LOG', getenv('WP_DEBUG_LOG') ?: false);
define('SAVEQUERIES', getenv('SAVEQUERIES') ?: false);
define('JETPACK_DEV_DEBUG', getenv('JETPACK_DEV_DEBUG') ?: false);

/* Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__.'/wp');
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH.'wp-settings.php';
