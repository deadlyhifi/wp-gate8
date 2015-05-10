<?php
define('DB_NAME', 'database_name_here');
define('DB_USER', 'username_here');
define('DB_PASSWORD', 'password_here');
define('DB_HOST', 'localhost');

define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/app');
define('WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/app');

define('WP_SITEURL', 'http://DEV-URL.app/wp/');
define('WP_HOME', 'http://DEV-URL.app/');

// http://codex.wordpress.org/Debugging_in_WordPress
define('WP_DEBUG', true);
define('SCRIPT_DEBUG', true);
//define('WP_DEBUG_LOG', true);
//define('SAVEQUERIES', true);
define('JETPACK_DEV_DEBUG', true);
