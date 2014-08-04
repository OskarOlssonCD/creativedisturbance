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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'E4cZ}/QxP4{3%5KjfOn4K{|bSi{$%l@>,~FE+=#pY7=vfZOZ6XChr*K_!#~*%o+O');
define('SECURE_AUTH_KEY',  '8u#1}kwCQoF&KL&4VZ-N:_V-O}QZZJK*4xcj7E{5z`,_(l6X)FBF}!+Jkj|.Q$qC');
define('LOGGED_IN_KEY',    'yUPQaz{$dRn/@6df5QQiKGdU&e3(p,Tu5@xy,<bMyT8UOsGlupM1%`^oZv(-N)32');
define('NONCE_KEY',        ' 8GDd3-%Zm_S4BF^^6,G*<Rf,Z-ScBl}ps|#7EJ$D)L`%nyQqIILC+a(S`TAT6Ow');
define('AUTH_SALT',        '70Xl71Ib4)B{IcK2E+j@QYS{j Y(L]=s=-(|~Dwr4v_Txtk(u,[DcV`PErDN`A_$');
define('SECURE_AUTH_SALT', '$Ar !<;9*_E[Ts%0M|<Z-7.:0lpeny4D[NCgs}X u}yfZ2Sbo@rTqUg9,izzxG:/');
define('LOGGED_IN_SALT',   '[y9<iwK_85i KPKrl+IrR5bETQY+e3n2b6 !dXd[6}XU3J0_RS&O~<E^u(qd|C{,');
define('NONCE_SALT',       'Pp|z:dB/nD7n#)b1X{%p-*R;radBH(9xo}T#/f&DE{,VVf1%cE[I^f3{4iKG<~67');

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
