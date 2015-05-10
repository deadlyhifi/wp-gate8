<?php namespace Setup;

use Composer\Script\Event;

class Salty
{
    public static $keys = array(
        'AUTH_KEY',
        'SECURE_AUTH_KEY',
        'LOGGED_IN_KEY',
        'NONCE_KEY',
        'AUTH_SALT',
        'SECURE_AUTH_SALT',
        'LOGGED_IN_SALT',
        'NONCE_SALT'
    );

    /**
     * Make it rain
     * @return void
     */
    public static function run()
    {
        // if it’s already there, breakout.
        Salty::doWeNeedThis();

        $salts = array_map(function ($key) {
            return sprintf("define('%s', '%s');", $key, self::generateSalt());
        }, self::$keys);

        $salts = "<?php\n" . implode("\n", $salts) . "\n";

        $file = 'config/wp-salts.php';
        $handle = fopen($file, 'w') or die('Cannot open file:  ' . $file);
        fwrite($handle, $salts);
    }

    /**
     * Have we already got a wp-salts.php file?
     * @return bool
     */
    public static function doWeNeedThis()
    {
        if (file_exists('config/wp-salts.php')) {
            exit();
        }
    }

    /**
     * Slightly modified/simpler version of wp_generate_password
     * https://github.com/WordPress/WordPress/blob/cd8cedc40d768e9e1d5a5f5a08f1bd677c804cb9/wp-includes/pluggable.php#L1575
     */
    public static function generateSalt($length = 64)
    {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $chars .= '!@#$%^&*()';
        $chars .= '-_ []{}<>~`+=,.;:/?|';
        $salt = '';
        for ($i = 0; $i < $length; $i++) {
            $salt .= substr($chars, rand(0, strlen($chars) - 1), 1);
        }
        return $salt;
    }
}
