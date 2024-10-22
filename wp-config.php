<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cricscore' );

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
define( 'AUTH_KEY',         '.z2Fh4z!`30MS*5%/^#Ht1dZsUPGAsNRX_[N4BJ@5>w;fvb<L+uexaqd=}HYEC: ' );
define( 'SECURE_AUTH_KEY',  '!^=`SvAmTN.i$K4n|4sf%=M<aoKB@/-fK:sfzP?^/Xrxy:%=5Ue,$uMnu?sSVG,S' );
define( 'LOGGED_IN_KEY',    'WUiz/W~SfpA~c-wX^.$ Ghl#Kg0<~6a6sn[|(k_8Y1$SUHRwZ]$c1}sL[SA<b^.+' );
define( 'NONCE_KEY',        'rN|FI?; /qRb=9R0vO2I89,@IfG}%nHa&:dwRcM5n4-d/xFF*:an_WR(T63Y{]Bw' );
define( 'AUTH_SALT',        'p&D?tXNYv*k0. R.o$pT,6o17l&d!nf[VCjq.Rh,*8x;HcqJgWH?$bPh&B.an!i)' );
define( 'SECURE_AUTH_SALT', '?<OI#_JiU,Q5vv,jy]di*<q%T)WP-gbY[0zJu8}i#jaD&[[0z7rU]^!WGSy&;,tJ' );
define( 'LOGGED_IN_SALT',   'n#6C_|B>^y:4cd,{5}C7:Loo:-Wb5|7ziN<4x-JhbP:#}3R~lV[Y.h%XArJiMu<.' );
define( 'NONCE_SALT',       '[1UfZdb$9V~PLNci<>5JHo9pY<6%nfcW4Aq;FN%-Ckwl6IqqWz~EtQ[Hh[Uk9h!Z' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
