###Gravity Forms Multisite Global Settings Plugin

This plugin lets you set Gravity Forms settings for an entire multisite.
Once the settings are set, users of individual blogs can't override them.

Install this plugin into the /wp-content/mu-plugins/ directory of your multisite, and then put this in your wp-config.php.


```php
/* Global settings that will be active across the multisite */
define('GF_DISABLE_CSS', 0);
define('GF_OUTPUT_HTML5', 0);
define('GF_NO_CONFLICT_MODE', 0);
define('GF_RECAPTCHA_PUBLIC_KEY', '');
define('GF_RECAPTCHA_PRIVATE_KEY', '');
define('GF_LICENSE_KEY', '');
```

These settings will be set globally on all sites, both sites that are already created and future ones as well.
