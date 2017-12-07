<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'medica');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '_mx)WS8 p[TIwsoHB_F|Q.;oaVIL9S. TdiTL2}>].mx*h:hoZ(^r$YT0sPpMx+0');
define('SECURE_AUTH_KEY',  'Shw0o8I3TK2d;-LNO?O8;=a_xG-V$MfciU8gubk?+i wbpSPav(O<.T~HO&TAfcn');
define('LOGGED_IN_KEY',    'VW77]QX$0F_4Ai}DWk?10pp2n_lPq>o 8J+zqP1%mf<8549)4P6Tsn;F@^ES)}0U');
define('NONCE_KEY',        '(X_0D$#100t3-g(eDw%>~jdsB7Qb7^LO-(iaUnlORHXc($ <V?^/i3k,@#vuM[gX');
define('AUTH_SALT',        'zgfq6r&=>Q*}@v]kPpB{*$ E{*;oE9FhKHiob0:t2kUUcQxWawY%]i6Sl%F5Oj]1');
define('SECURE_AUTH_SALT', 'RhfOsH[k9^Z{3vO8w&oiaLqKpY9-RTh/-6|gNk~d8_ OsY0!h`Arrd-*VI.+]T<T');
define('LOGGED_IN_SALT',   'j-nJlqMV0&[tQg,{])K!w`<djR|lOPV=-K2C1Ac>#SZoc+e3@Fc2b(TY2MMN*;jh');
define('NONCE_SALT',       'U[]w):AWy`8PwtM2Z6eoyus,@ WQ^r{4Y6YkiGYX-;ZIRU:$0J<N/yAS6`7Uxs9&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'med_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
