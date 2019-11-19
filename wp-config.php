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
define( 'DB_NAME', 'belajarwp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'DyuVM-)2*`>~_K53S~_k4!p]N]55&KudPqV@26?:cT}kE&Nf2;[~b:?6 /g$~ygL' );
define( 'SECURE_AUTH_KEY',  '(bx7M(I[;2I49CHa[)=1Vxib&pz=rI.?YeED?tpa|>@V?,!f;4AK&RmBI=Tq^{qF' );
define( 'LOGGED_IN_KEY',    'j2%69xpjdhz<}%aGZrr#zWXlLI[0w*$AIrq+C`qZ_Jp2%lu>IU2eL~8=pqUYc~2%' );
define( 'NONCE_KEY',        'Xbm0PYO[Sbp.[gR~<B0V[nCy,@%C=0>^0.qc/&M!>g_{03la#G:<(/C~%R# =jsf' );
define( 'AUTH_SALT',        'Z;BbUnMlV^wnc>mrvd!2 TN{<BS$dT1L)M]~|4.bH2xw6Q/{Qj}K)5BRr{&/Z+7h' );
define( 'SECURE_AUTH_SALT', 'ickDs@+Soo[tIz3FClftO8-+[wzWv=u|IWB8${Pw( gW$T^g$*r:FCQW^M3@3@+A' );
define( 'LOGGED_IN_SALT',   '$40)^mDXx;P;>T`.E./@_sf@}8d?N/Kd^5i6iXE@hK)/e$(`0-N4UrJ/~a^ H}OH' );
define( 'NONCE_SALT',       'n,~R*FmJ2+{]wmi:zT5 -,$ewm9V-|AaW-;pQpsr;CIG~>8/4x|ro/]_uC=}2=&f' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
