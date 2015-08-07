
# wp-gate8

* In `composer.json` replace `ACFPROKEY` with your [ACF Pro](http://www.advancedcustomfields.com/my-account/) licence key.
* If you want to change the database prefix do so in `config/wp-application.php`.
* Run `composer install`. (If you don't have Composer installed yet, follow [these instructions](https://getcomposer.org/doc/00-intro.md#downloading-the-composer-executable).

You'll end up with WordPress installed in `public/wp` and your working files in `public/app` along with Advanced Custom Fields Pro and Custom Post Type Class installed.

## wp-config

The wp-config settings have been split into files to set your options and different database connections depending on your environment. These can be found in the `config` folder.

A `config/wp-salts.php` file is generated during `composer install`.

In _nginx_ set `fastcgi_param ENV production;` in the vhost file.

In _Apache_ set `SetEnv ENV "production"` in your `.htaccess` file, preferably below the web root.

### WordPress could not establish a secure connection to WordPress.org

If you get this error in your development environment then `vagrant ssh`, `sudo vi /etc/hosts` and add

```
66.155.40.249 wordpress.org api.wordpress.org
66.155.40.250 wordpress.org api.wordpress.org
66.155.40.203 wordpress.org api.wordpress.org
```

## Plugins That I Like

Stick them in your `composer.json` and reap.

* ["wpackagist-plugin/wpremote": "2.*"](http://wpackagist.org/search?q=wpremote)
* ["wpackagist-plugin/jetpack": "3.*"](http://wpackagist.org/search?q=jetpack)

```
"wpackagist-plugin/wpremote": "2.*",
"wpackagist-plugin/jetpack": "3.*"
```

## Thanks

* This has been heavily influenced by [Roots](https://roots.io/bedrock/) ([github](https://github.com/roots/bedrock)).
* [johnpbloch](https://github.com/johnpbloch) for making [WordPress a Composer package](https://packagist.org/packages/johnpbloch/wordpress)
* [Composer Installers](https://github.com/composer/installers)
* [Advanced Custom Fields Pro](http://www.advancedcustomfields.com/pro/)
* [Custom Post Type Class](https://github.com/jjgrainger/wp-custom-post-type-class)
