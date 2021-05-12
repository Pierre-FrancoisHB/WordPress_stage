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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_eval' );

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
define( 'AUTH_KEY',         'e,U|i#6F2ezgKe]P/)KfUkS(|z@]-xY{=p5akh<9kN:xM>CaF.%7k.O9N$ePO=+n' );
define( 'SECURE_AUTH_KEY',  '9}Ab3u97l! xJY!)&P]tKKd+dTpb!z_o{g8J^WYO^*:~29I]{=R%aC1N&.1/mr<$' );
define( 'LOGGED_IN_KEY',    'cv`7r(s|!x%i!Rx:X,}Gfab.VDqU[L_(W2GX|Dbc#Mg[xx6Nn=N6y,N<Jl-JOsE~' );
define( 'NONCE_KEY',        '/[f:TMX4;})@M)n)6T]T,_}]z3(?^x#l$<QeqpFG}#&v!BE= vCn2F1iyTt0i7:Y' );
define( 'AUTH_SALT',        'bk->W#Qxr94NkB4<U(p @{B?2w>1d)XvmP_Lwqu$!LU`mEtwA0kpNr- m-rgjx(#' );
define( 'SECURE_AUTH_SALT', 'O=*=9E8raK*_$3&@^pqjT3d5O^8g5{pe49hL0`F:9$9u~mPel/s/=kbKr=f3,n7%' );
define( 'LOGGED_IN_SALT',   'rVlT9QEan:[q@Z,HDh-Gf_z3rB]CFZI=+AkTJ3!EE_O&hNAXO{Q=4N%0}MRn2rTR' );
define( 'NONCE_SALT',       'wy6}xRh?#WKnZsMI[QSS0Xrukzdh5gvWEufQ;3q`1(ujt*IK4MS`j-&nkc@pAH;>' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'eval_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
