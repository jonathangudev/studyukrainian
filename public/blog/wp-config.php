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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/dh_kisk4x/studyukrainian.com/public/blog/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'studyukrainian_com');

/** MySQL database username */
define('DB_USER', 'studyukrainianco');

/** MySQL database password */
define('DB_PASSWORD', 'jCVGZ2A2');

/** MySQL hostname */
define('DB_HOST', 'mysql.studyukrainian.com');

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
define('AUTH_KEY',         ':O7BKZAk7BARX;k)o61~F0r!8b3&$VC#jp^#qLGsD68y+PrX1~jm:`l~Ue!so:Pl');
define('SECURE_AUTH_KEY',  'sTE844vqveGyA!Sii)7vmG91JDKGV604H|*N3JixNk$b@HX#vaqhb@$qYVP1$UU"');
define('LOGGED_IN_KEY',    'XbX;K7l0HW3JQ$/9^$JWz%FQ&_/O|ZOu_^M1Ea#n%PPl+f_g)iO"G&SyPe0&Z8/F');
define('NONCE_KEY',        'vv_L9?^@rzk_IVL;SK3Ons"jX%!6:Y5R|Avt+O(sL5~MOGpzMbQ;VTtenv#PtOmE');
define('AUTH_SALT',        'S9hwLDFlOj@6;+i81QkwTNY`q5$blpT?CTOYD:^^8@~CTZN:(1n|t^ypzwLqNUF"');
define('SECURE_AUTH_SALT', '4&(@T";g$`I|8/0QSv6$4~n5c`ICIrmYXCuuTt|TsF%n"A:E9UUnj6~@~zq@?b%/');
define('LOGGED_IN_SALT',   'X;QHx9RBikB$aRX^|(F+gyH?Rfs4e33+DcZQH$xJ_1zRv|kTJ1e?9xD_#"lBc9P;');
define('NONCE_SALT',       'tO0R8:ZqFu8n;D?:(+o"cbWaOP#A&$kh)jl*G_qxR|R:6u8A%Vo;FX6_OLQ7tCB^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_kte47e';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

