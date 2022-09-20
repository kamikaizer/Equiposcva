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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cva' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'rljh->aD5G^_E&Db/Y~p1*_DQ)neb.4jel9mk.`0NeIa6b+~9f|g}V;xzoIe(E1x' );
define( 'SECURE_AUTH_KEY',  'OCkI3Kzt3fsp{&z%n@~SY~yN(}*8Z1=.Kk{K;R8{S^alW!qGS$n]Z)n|t-/oS|Dl' );
define( 'LOGGED_IN_KEY',    '8  )s+y([*5nOHD#<}u/Y0rzgn4bpLKAy[D%4drPT!,K2IIq|;`1W04NHZ>RNo;H' );
define( 'NONCE_KEY',        '!f&>ekkp)}Gt;Y1Ur8Y8TI<oFBPHZ?!KwP2k72S]_Og1L6[MfZZpXuPkbgQ#T m9' );
define( 'AUTH_SALT',        '|Bgah>Aa^$3m.+L7|,y}(.uPT4j&. ,[lpS>2KM<cNZ0A,SSED}9ZP8ZxGPcTRHm' );
define( 'SECURE_AUTH_SALT', 'qlm]u#aH.Rveg*khhq_&;KFTW`OGD&CbC/;i}598:mh[>=&`D$z2olFlxGLW Gdj' );
define( 'LOGGED_IN_SALT',   'zBW~mO$sHz/xleV_#xDGu%oyh)C4cq56xi3{b7k?B%f2]?<bGgs NIKBn*{?nL@[' );
define( 'NONCE_SALT',       'rq<9rdkjdm>~]Qo-KB8,!8EB5~t+J;7OmG2ALDZ?mt6T7!zeMBpB3$ ?-vkRO9F)' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
