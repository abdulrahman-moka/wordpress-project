<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'u862639946_t8z4d' );

/** Database username */
define( 'DB_USER', 'u862639946_nZ0pi' );

/** Database password */
define( 'DB_PASSWORD', 'X2EHchdRfE' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'KjH9Lv,p*b9Ii-9FNge5OKIO@N<pSD~z$CpU.-UQIeP*o(C^{oA>~;r>0WMat)3}' );
define( 'SECURE_AUTH_KEY',   'Po*/7tV+|pZK(pJ$IRgYM2ivOKI&Uv#U/t>mg1y934?C:zS[k.F,un<qiC{~#0_z' );
define( 'LOGGED_IN_KEY',     'Qub;YU^uA8E#i|N<*p&Ix+Ht7G&dfH]7rZT%Hq3GgZBIc&([MAMu+)cR&_]YsoNg' );
define( 'NONCE_KEY',         'PMQaP]$y<[l0WH-5^&@0#[ 8TWP:6{E- ?$03EOALhAKGR1XsUFO[O)rX)>y4[7D' );
define( 'AUTH_SALT',         '7mk (nW[j;sqr+<9-xc5m-^}NO0~O)_:v9eXs];:Cdv8|C@4.lo$!l.L$)eJ b^A' );
define( 'SECURE_AUTH_SALT',  '/Af(Y/*-uN=1]UcYuiTO/P_ClL&jUoSB*}Ivarz=wA?rO>t+0kD837oVjD,+PFZ&' );
define( 'LOGGED_IN_SALT',    '4q](T)bp%C}vn&2Guwuj[Og}t!XQo}{?r=xV +e_]Ik<M#q%t~t &=YhXW.vV6Y2' );
define( 'NONCE_SALT',        '!MKo|4B1.HP5WNX_9d]cQ/[BwiO@FWfT4/`wS`;1-*CZOd;4kLA0_xdaYTNbfME~' );
define( 'WP_CACHE_KEY_SALT', 'tR;E4P48/C+:XI;W0JN&+/OWTI94;HQuC,4 wZ%JwlT?]/~BrOv<RKR&!^W=e_Dc' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '4a6a918f0a9af853ed812233c6f02814' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
