# wp-gate8

* Duplicate `.env.example` and rename to `.env`
* Add the required and optional parameters in `.env`
* Run `composer install`. (If you don't have Composer installed yet, follow [these instructions](https://getcomposer.org/doc/00-intro.md#downloading-the-composer-executable).

You'll end up with WordPress installed in `public/wp` and your working files in `public/app` along with various plugins  installed.

## Included Resources

* [Custom Post Type Class](https://github.com/jjgrainger/wp-custom-post-type-class)
* [wp-password-bcrypt](https://github.com/roots/wp-password-bcrypt)
* [jetpack](https://jetpack.com/)

## WordPress could not establish a secure connection to WordPress.org

If you get this error in your development environment then `vagrant ssh`, `sudo vi /etc/hosts` and add

```
66.155.40.249 wordpress.org api.wordpress.org
66.155.40.250 wordpress.org api.wordpress.org
66.155.40.203 wordpress.org api.wordpress.org
```

## ACF Pro

If you want to use [Advanced Custom Fields Pro](http://www.advancedcustomfields.com/pro/), add the following to your `composer.json` file. Being sure to replace `ACFPROKEY` with your key, and update the version number to the latest.

```
{
    "type": "package",
    "package": {
        "name": "advanced-custom-fields/advanced-custom-fields-pro",
        "version": "5.3.7",
        "type": "wordpress-plugin",
        "dist": {
          "type": "zip",
            "url": "http://connect.advancedcustomfields.com/index.php?p=pro&a=download&k=ACFPROKEY"
        }
    }
},
"require": {
    "advanced-custom-fields/advanced-custom-fields-pro": "*"
}
```

## Thanks

* This has been heavily influenced by [Roots](https://roots.io/bedrock/) ([github](https://github.com/roots/bedrock)).
* [johnpbloch](https://github.com/johnpbloch) for making [WordPress a Composer package](https://packagist.org/packages/johnpbloch/wordpress)
* Seriously in all seriousness, I'm far more into [WordPlate](https://wordplate.github.io/) which is like this but far nicer - [github.com/wordplate/wordplate](https://github.com/wordplate/wordplate).
