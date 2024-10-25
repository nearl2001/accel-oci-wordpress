<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'SjH d$[42j9FTiSnF3fPU7*}5[xrz+b-Io596(qDG|?SU3BE[g&(SMGCm@N0y{ys' );
define( 'SECURE_AUTH_KEY',   'b)2&,i.)X|Tv+6UAZHnS:L}c6aL[2yRg5Jp<~)TQO6<`Hi]xPNB_RR`/B{/sS@@b' );
define( 'LOGGED_IN_KEY',     'rwl({oFmraty|&83!E99L!W>PHpCCTqcZD R0ow5+mstFHaxqhrKp7@M!Cz!/6v=' );
define( 'NONCE_KEY',         'jCMo|h.jb0&>DoQ>(L<G >i?|0Hf/_t4$~XV]6RY8uE q:ENmX`G[M^4`mAwkW*h' );
define( 'AUTH_SALT',         'I_1xbh{B_uzd@h$5o(26tQ87]npA6dr]/U_JTrSQuXOSn_CH^)*LN%Pfi5;xb|F ' );
define( 'SECURE_AUTH_SALT',  '_ji7:$wtNOT[{]3$+@H3;8R/E?TTAVpQ$a<P4!@I<ZirNGj($iFFYVfk-bmOo{PV' );
define( 'LOGGED_IN_SALT',    'RD&C|OF~=vJJ R_$E>[?>tP-}jUvfER#L]O q2)0^%4,.Tmxnc#s+jk2w,RN5i?G' );
define( 'NONCE_SALT',        '@r)!XE<jsR{0UU>XZ=!M<S(p$R+8Rge !4Ssd3fP{Bs[x>!]18eR+4+u`KW4Ys`e' );
define( 'WP_CACHE_KEY_SALT', 'V`QS!rq8s~8xpk3vrbf%6h[Xs/Eqa8%j^^-BC}5H9Jo%AkD!XiBZh@+iojI[.c`B' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
