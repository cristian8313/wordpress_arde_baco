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
define('DB_NAME', 'arde_baco');

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
define('AUTH_KEY',         'eIV*iH3Jr;Wu.#bJ7e CfVU|w-sS?-F!jd>zSuMPx]|BpYHvhG^IB0R#$SxDhuv3');
define('SECURE_AUTH_KEY',  '|+:$?y9L/$Gl0Ko.#8#QBsgFSSf+*fb*qY#T<}^l@n:< 3)?Q+_mtEaK6T[fM$7W');
define('LOGGED_IN_KEY',    'E[Jw:U~[_O!6B&<Cz3mz|5@*uN9|s,c.A(K>tQM?N^mQqJ}qNcO=A^a(v4W}AX{^');
define('NONCE_KEY',        '7f`P+o^d7eXJ5zD0LAaDe0D2$b7u0(o~Z3{+;3-r;QyM1! J2=tcU-kU-0T]mK>j');
define('AUTH_SALT',        'F+=}I,T5,gniYg335NS:b3hes+wQ0 mrQZ8ck0#NKK=-XT`|JB#UDY}u3t]wR9fo');
define('SECURE_AUTH_SALT', 't[ZJgo_;5nOi}[8R?:z3845F|JY8)Q+mg7-~-j-q3MH,97,FqJ=iZgq]}NZ/I9Vx');
define('LOGGED_IN_SALT',   '8P~c;&6/Sq}L;I 9,nE:bC^*tY*V`*Oy?oM>OJZS)>i/_  J6mkvM_PKAg#j7>8/');
define('NONCE_SALT',       'ar/4&ZBE-D1D[Fy1l7~>ep?RVM@.-Y]VTR.J/;)|J[~[Dkf!u%?.=`p9u&Y#@()R');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
