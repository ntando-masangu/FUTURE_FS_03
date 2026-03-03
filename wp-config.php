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

/* That's all, stop editing! */
define('DISABLE_WP_CRON', true);

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kicksandtech' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define('DB_HOST', '127.0.0.1:3307');

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
define( 'AUTH_KEY',         'z7qplz]<+Q,pP:bo9}n!NoZcji&$$ Tw5sk9q=]xGDq)Qc/fc~4_x@ymtsH%h.e?' );
define( 'SECURE_AUTH_KEY',  '1.ZxuqN;.OuDajn`b?4#vS3]%SY~EVM9LWdfo3c<Jf/!fC3WI 3]`2BB5d)6cOG?' );
define( 'LOGGED_IN_KEY',    ':=`qLXSQ:JjNt%bS74-G:Z2`RTn4dV8T}Iku3U1Q1n?i4AaS?246vxUhE#HQYwi6' );
define( 'NONCE_KEY',        '){y-FJ9fODTx)X1(q3c]PNqy[yOd4!@607Z_ /qZKJuml2v&K!f7fcf#|7f2Qv.`' );
define( 'AUTH_SALT',        '<V#>u*.8Nzw-bH@ZEu(SGbrBW7l1@L^oN[z c7;x)<oWmg`430,pm|zrEl9+p##x' );
define( 'SECURE_AUTH_SALT', '-A0~CX=wEd[[e3C9l(?hqkgXP~TS9oO+PSb)pO1uTm=/ vuy!(7j5=S8kRp01%)f' );
define( 'LOGGED_IN_SALT',   'oK%qM-*J[KT_iU*e=1K3}59crn6N!HvZ~ljn9UIgXBgdz,3u;fk4Ohlo*2COjlgu' );
define( 'NONCE_SALT',       '+Ku!/>-/#.#J1R-z^j8B,sI2PcS8Mzw0}- kg^Uw)5 H9x;Z_eJ5N!?``.(y^E^[' );

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
define('WP_DEBUG', false);
define('SCRIPT_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
