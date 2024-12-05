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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '`GX]]I1;3lqmM Tkkfe@=?WM!/HC7Rp(I,l,{fp]fZ<~J/?.A&Cu<<3x_MGCH7:]' );
define( 'SECURE_AUTH_KEY',   '+S> 6suCTC~6a~{U:NUUs&v!*xNye89OD}xqL1K*2EDuW`f {Ez%Ui:W!)Ft{obO' );
define( 'LOGGED_IN_KEY',     'wpO@~H#mot5Lf4VM6f`2.#51CFe^!g7p<|QR`WS3k>l3iYP5z!YD<8kceX~tMJhG' );
define( 'NONCE_KEY',         'H04r>_gexH$BCTy-UO5/zv;=GO#*6,T!48~@h(*1!mrp*EGMk&EyHcVl{b}Z2[AL' );
define( 'AUTH_SALT',         'n9gtGo U4HUFcX{Dtsl/g?gd1^0z]VD~AWyScRwA>><Iu++[(!qV>H,P_y;&8+ks' );
define( 'SECURE_AUTH_SALT',  ',,Rw7f~?fx3@s~1cG05`^U:/;uP]f*kfZ1mM~Kv$a6.tq6Qy|=,4Io<b1FscJIk^' );
define( 'LOGGED_IN_SALT',    'F#RL%cRnTS0VG#R@R(epfWIJvoq2nN;vm97bdy~5Ca0BUdGhQlT~1]45d0E)F)Kf' );
define( 'NONCE_SALT',        'L2LPdWTpswf+U%0X_r;mx%&Lv[2s0uN&K|(;^iVj`Lo+@z[,iQ$k: bXd@,@il.e' );
define( 'WP_CACHE_KEY_SALT', '8bN7_{ON:9P:r2~T-Q$KT=9}:JNE/Y(=}[WEJex;X.499}Vt14_Bjx[U`6sfhPC#' );


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
