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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '-#=Gf,iVhXszF,}X|_h_st:%9z-+)P<b`(Iu;g2T^! :A!,(`1SEvRqmw+65T(dg');
define('SECURE_AUTH_KEY',  'Z6m4$jeL][<*Dx?@[##s|d*TuUu yP5/E%b+uL?z b=TxZCQ}2jn|Z0s;D8~b8Q~');
define('LOGGED_IN_KEY',    'QYz-84pPGQ<$Q/Qvv+%c1N]-cpS%%dckf,mi1E6!vg*!29c?|8@N<h75f(iPW7}4');
define('NONCE_KEY',        '3|+fv*4~?}=~L}0cxhO>Itd#EKL(e90/RSGSGd2Pju{j[M_=77VZ?)LDVld<ud:a');
define('AUTH_SALT',        ',f:&j.Gs}`Nr%qKfYA.cyifxgs07/NQ!60R 0o*-J^V*$v&pMBALGt/xwrmAKTi~');
define('SECURE_AUTH_SALT', '1@$Py]m`5%w0Gu`(>~DkeSf}{i<[dcfC-UZqQ,3n?@N##!?p)7Krh+A;fni 61_j');
define('LOGGED_IN_SALT',   'V^ Tkd`zW?4O8Ga/!*H`lH-:Jk 1$W@vR9Y4{sMTGF_,)2gLy`17xk[.mwo,bF>@');
define('NONCE_SALT',       '7:4v(Z~fQVn-lY]RHuOK^cPstO%LT[Rx(mzVhDQ[+?x< s%eZ/0aWqt-K[U8hHRQ');

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
