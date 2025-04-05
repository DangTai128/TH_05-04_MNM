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
define( 'DB_NAME', 'epunews' );

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
define( 'AUTH_KEY',         '~_xcB?=?FRMBX|/f<M&V{z-G]bL)W4j.i!KJ3/#y#I.m?G^%kq!-g5INMiklOWwR' );
define( 'SECURE_AUTH_KEY',  '`/?1GkRKe9Q}}9.2Uf(Py?%]>pyi,IcagM!4{ol2w?)lh~vQ30zo65I};bKI+P&B' );
define( 'LOGGED_IN_KEY',    '[]//v2f3F[rFe+EJ/0iihZ)WlJvZdpL|c*).jLquU2ghn9L9%x&4,d<V3%|kLq2M' );
define( 'NONCE_KEY',        'MZ`MbM`g>?<0W,kMUTi&8ve.^LAZ.#<</=IuON0T?cDHI 2M91;>HY.x>@a|o( :' );
define( 'AUTH_SALT',        'QvMDBkQ>ZT+~(qx*y qa_f2qH9m8C{c2-@1e9G{1#rU8$,OK5H/{*BGqT=&|w,Ww' );
define( 'SECURE_AUTH_SALT', 'YLcRP((n!}nZq-BCSffk44fNLK/ytk(E]N_ cfiZI}2$NMAIZjL}|?7)-;y9b;$;' );
define( 'LOGGED_IN_SALT',   'VIXYls*Eyd],FMsH+`,M/&`5u=CSsH#GO3h%<6+j%!~%C4zIckD=p)pS@pW~M&U%' );
define( 'NONCE_SALT',       'vpO>5qeoxb(kslA[(kWo4t$otOXi6{ng0dh5l%I349y^C^yd7S!)ATf(5|;YZa2<' );

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
$table_prefix = 'epunews_';

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
