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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'activity_wordpress_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root1234' );

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
define( 'AUTH_KEY',         'dYDJ!GH8d}WMNiH`XbY$$WflpBA2Q`D}IzqVNW6E@D@K!3VgQ3ycP>JYr7y;:0Ip' );
define( 'SECURE_AUTH_KEY',  'XoX4cA= ,K[a[a&*{%1/ncaJR$c^Gjd6mYZS|AN3BU^SGp:]ETFg?*a8]Hekk.bp' );
define( 'LOGGED_IN_KEY',    'bDej&-hax6$]Vy94@-zG(H]RTl~-+#Dgo]LaRTF&gss&J,c8S*>ifV`uq3?ObK#<' );
define( 'NONCE_KEY',        '*0]yu:l H#&6DO^ZxTQ}m]r>6;kAn2Q.y~}/@I*K!n`3OtK^ds{F~c[ GtKZ7T!^' );
define( 'AUTH_SALT',        ':ct$SmqHT-_;NdLsp_74hJTxPM}(*-W&eQdQgQXQ*yv`$+S2E^[=I5mKVVh{dW*z' );
define( 'SECURE_AUTH_SALT', 'P/~{ h*B+HiLS!6R^j*K.d.3<( (*ksr`uTR GQ};*Au3x{inCUbJ:v!>f5.T*pC' );
define( 'LOGGED_IN_SALT',   ':2_Xlv/$(+JTl_}V_78C@y.7Ka%D!Af!lv>u_$=Q[DR1%mr<tUV]OA5X4g%D*!:L' );
define( 'NONCE_SALT',       '9?}-X?G(:O/GZ:1YtSMBae91vxOUnV`,+zq-iUWO^j]SrY!|+BD5RBJ`qwM~JIVT' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
