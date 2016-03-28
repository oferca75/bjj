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
if (in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))) {
	// code for localhost here

	define('DB_NAME', 'bjj');

	/** MySQL database username */
	define('DB_USER', 'bjj');

	/** MySQL database password */
	define('DB_PASSWORD', '123456');

	/** MySQL hostname */
	define('DB_HOST', 'localhost');
} else {
	define('DB_NAME', 'a3121468_bjj');

	/** MySQL database username */
	define('DB_USER', 'a3121468_bjj');

	/** MySQL database password */
	define('DB_PASSWORD', 'Screwyou123');

	/** MySQL hostname */
	define('DB_HOST', 'mysql8.000webhost.com');
}
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
define('AUTH_KEY',         '(d+-bI|~n#UE)XA$[jLaKt%]]-qb5q_QPzkF5*F,_V?C$hqejMo[+7Qf~-GPP%B8');
define('SECURE_AUTH_KEY',  'JqO|@*2wpa/x@YS:WgU((ccY!Vfyc+%:qH!SNT067R2TTmj&I{s34O+BX%[i29<|');
define('LOGGED_IN_KEY',    '+fTi`dX;#A.[:p<PS$ +d9gqx9dtJ0a;1F2k{eSTnw[da9G4CX4{D|dqF70y~j!B');
define('NONCE_KEY',        'D6Ys>1`IQ*dBLB-aSVL#_:H-FO+Vj`jo/n!]O(M<mA]bw-K%%ww])-9Awg0n8wAq');
define('AUTH_SALT',        '2:MzHco=e:)FabVJbQ%vN-|e3xH7m^<TfNq1{<-jpKa7bmYwf}}#=QK}t`B<dUK*');
define('SECURE_AUTH_SALT', 'J3=z&DrN!WwX}w{d1+|U3M-yYO6Q=xq+zHNO--GKg{G`Y(Z0[+lya[G:h4c.LLgm');
define('LOGGED_IN_SALT',   'g|r*[s,qr.J5wjEa`Kk6=/* je$j{$->;s@W,W$5A dfF0%PxNhef 3&E`!su5Io');
define('NONCE_SALT',       'iE.JA&c+|:15QnCGt&=Mo6YVR&:t!) Eg0v9GQfO7}x!TDO]:]nqOXjWRai:XYup');

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


define('FTP_PUBKEY','/home/wp-user/wp_rsa.pub');
define('FTP_PRIKEY','/home/wp-user/wp_rsa');
define('FTP_USER','wp-user');
define('FTP_PASS','123');
define('FTP_HOST','127.0.0.1:22');

define('FS_METHOD', 'direct');
