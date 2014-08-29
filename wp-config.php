<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home4/atec/public_html/cd/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager

define('WP_HOME','http://creativedisturbance.texashats.org/');
define('WP_SITEURL','http://creativedisturbance.texashats.org/');


define('MMAFF', 'hostgator' ); //Added by QuickInstall

define('DB_NAME', 'atec_wrdp11');

/** MySQL database username */
define('DB_USER', 'atec_wrdp11');

/** MySQL database password */
define('DB_PASSWORD', 'ZnKRtG4fFs8TU5');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';-oX3NP$UyHf:hHRGw8KFtW!yV_J9PJxX:x^X;Jg/K4jo|De\`SZv-2^|XXP*hG@wYF\`medT4Mau*A');
define('SECURE_AUTH_KEY',  '');
define('LOGGED_IN_KEY',    '/WH6XAwHC/>5RGKoqp1;HO-dU59Ll^dzL=x!bUh8g#Dm5Ouf!AT*sE|vbzR5YIGvk(aXj|M');
define('NONCE_KEY',        'SB8eg0a~gxJ-IO1D7wt;*6a!^O0p?!@^GWW@hc4Z499$JLJmP!Il99pORWwI1');
define('AUTH_SALT',        'q$VmX~|:04_izliI*KMUL7oWmcGhnGsZ)NEfiFL:;LDvH>jsV\`Rtky3EfK2~Uh(a$|@>I2Y');
define('SECURE_AUTH_SALT', 'oi9=J0RLPm\`f?2Cmvqh$bY~Or!gKc2Ne#YG@4PZ32#^f1IHbDE5Un\`_7#P8$=F');
define('LOGGED_IN_SALT',   '0\`#)fLs8\`~i@T_rH#@tbA@hifi-efQ;_8~~T_t/7Orr85D)8JOkQS3Hdb>w*p2;c?ds1#HI33iXiL\`FX');
define('NONCE_SALT',       'ns9Xp-Z=uu8J1s#vt(Bv8MZ:RfiwD>vaRAo:-^rji8ea(tg5Z)mu/Ez^tE:)?xAJg(pE^wZ~y/;tc\`J');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');