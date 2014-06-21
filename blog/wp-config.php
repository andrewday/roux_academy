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
define('DB_NAME', 'roux_blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'GnBsCkswWYLhKis4tsdFK>X<a|N&`![??h#Jj9ci[icB_`lBW`N8rx2HD-W{mlTj');
define('SECURE_AUTH_KEY',  'fK{aq0K-1Dj_)kD*5+kpx;T)JdNYI,-6Oo{f-`8[Qr-JB7+nQqXdBFht$sUaPkD%');
define('LOGGED_IN_KEY',    ';yGZ+ztCH&X(,=T-KM0%rMFi>Xy.w{417<j7M:1Z*pb5E!F1OdmGK69*LBuI-.hP');
define('NONCE_KEY',        ';+uxYo,[26e+{#HD}a$*R$E|48;7h<D:z_m)8-o4l##WVAwq]+bL01qj|(nk-rE.');
define('AUTH_SALT',        'tpM*SI{ijmV2`H1]gI;hjNY-s&`7,-u:n;Yc:.$,Eq#B4$X=3B+Nss#`~}B~-?0U');
define('SECURE_AUTH_SALT', 'Z|xJ9UL{T1DUD=5RE`owLo|+<]s7pPQ-qSj!I,G{++-|++,ZT-+o6ggW7f?b)}ZD');
define('LOGGED_IN_SALT',   '|Xs?pfDP-n$!MCNCOC*}><zxM}8M$KG_`IK=%%+  mBq9H:=Pnq+yp%`QY4.[jjI');
define('NONCE_SALT',       '~AS|}{A~kgk:& +U)LB(fM1(3-7]}Z3RCz{3/_r0@n&TKr$~r||hEb*@q|RT+X5$');

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
