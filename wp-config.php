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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pmc_akatsuki2' );

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
define( 'AUTH_KEY',         '{ xr-=)eg-gY/l6[LPh>h,JJR+,q7#{a)9&w`E; N,GPeJZ-jT(Isg5g5(FIGiAo' );
define( 'SECURE_AUTH_KEY',  '_,ja?L:TvM+v.1cny&~B:>>B<7%42C7|-%uXRQ2m6bHr:2dxoJZnw7Inbw*Z3;cA' );
define( 'LOGGED_IN_KEY',    'Jo,pr8%-#XLEmzspl*+]Uk=V2o[VWci4,9x|0*rX3_~VUK8pI7%froG9;BM&inlS' );
define( 'NONCE_KEY',        'MGrZi&s^qtsqftzT#lI_!vISbPC<b{C4FGpwe]1.N`>Z4:[AU tQ}6&24 ?_^TW4' );
define( 'AUTH_SALT',        'Unzpdnt45mGo{(zOKC^/:Fc#2tdV}XOosYX=z.z3t 1pW6,a7 ?Ak0la9}qy)*$u' );
define( 'SECURE_AUTH_SALT', '#V1~|t^_SwWN7f0k2~sea!DY-{}Fe}+{`p~%^)$ml#rF!&GtmO@44XxfWd&zAbSa' );
define( 'LOGGED_IN_SALT',   '*AN5.R0+H7$){s|Ju1n/(<Z!xmd-NGx)ajA~Cp-NHcH6vBW*D})lGdkPyW|,y@=W' );
define( 'NONCE_SALT',       'kae.n AEj!J$iJ[{ld{?U,r/:~lDtsI6mLjPBEw(:pc?GaJLx,^}&_!7d86~[|Op' );

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
define( 'WP_HOME', 'http://localhost/Akatsuki' );
define( 'WP_SITEURL', 'http://localhost/Akatsuki' );
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';