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
define('DB_NAME', 'bjj');

/** MySQL database username */
define('DB_USER', 'jobboard');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         '+MCP;XYcGvWJ}Lo[RPN}Hd_b2}mi9k;Wx|.BBWx,|(8cm/raF`n/S?QtPyR{##NN');
define('SECURE_AUTH_KEY',  'Ok&U;4Mi#mC3Ac{^e*ma,dfsac{sS4=.mJ[m$q;$=Xgj@I,Fw/!ytO_{:26[Yj:|');
define('LOGGED_IN_KEY',    'd<vPVvWZ4H&:Gy(1VBws(v/`bJ$vZn3`),h]}=||]zS~~X)=|7*Zl`i-i$J0)Zat');
define('NONCE_KEY',        '%%d02{IduQG(G>c|T+$N(A%x ;QiH7iiYu`^D.wYd~6N*Xm;IF[4yzaYf(84d:W(');
define('AUTH_SALT',        '~dQel!R^ThoJ{,gt 6Zh!r~$J,D*@*agTzi8Hr+@5JgRk4J3rpfPzSR5](GQ?ut_');
define('SECURE_AUTH_SALT', '#mob0Q,7/]e(F~!]$KuMQd T=5@H0?f$B@^_*50@{KkP-?-wf^u,;bSRfR}jU&Nv');
define('LOGGED_IN_SALT',   'h0e+|ixD` jQ*eQ>q8tg^4Thl7pq!%iB5RH^lE{MIO26J[oszC<_+k,p:h~ik6st');
define('NONCE_SALT',       't4_lvZ{v>{WYM4?|e7d[&G<JDXYj3XA^ !.dk:r!f:<x986vSX4q1~Mzrn9 I|kd');

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
