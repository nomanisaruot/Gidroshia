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
define( 'DB_NAME', 'gidroshia' );

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
define( 'AUTH_KEY',         '@|<Y|0aPqA-]wQ8ZUB6-z{[W/`XrL>o-M|kH//Ws_f<$tf6]GttXj9<M5ld]8D5z' );
define( 'SECURE_AUTH_KEY',  'Z}NcF#|R]L94jY++G+<+T*+WcfFOP5M0O`8VZNOv4bF-lz^EZ0E{WwA-M6UUBH40' );
define( 'LOGGED_IN_KEY',    'FTii>uCAZK8|+V~/TX6i0x}lT{G_w,;Lk|&!bTXoRll/B)@C+$;t+,s+OrcPIP;2' );
define( 'NONCE_KEY',        'hq9:<9y,]0xdUFSjp2}FN4@j.KeIVRm2jJ66daTz*y#CMV@imi2:pGI-4pAT>j$&' );
define( 'AUTH_SALT',        '=Adi=:2lM-*)pK]iHG.Ow-#m+I[yL7%-bp%*W3nY+COIq8MBU#YQ}_tuU7EjT-}}' );
define( 'SECURE_AUTH_SALT', '8Z5k{J=L^;H$#0+q8E^@l]C(,+m%4.T8PU5SHr9miR:|#i{V68~>AMOAuz*LC+9W' );
define( 'LOGGED_IN_SALT',   '|P?r !Ata%lSpbG;/t%5:Ygd37-VXcGa5g&I:pl09s[4LV[g<sJ4PN1SAp?S02.@' );
define( 'NONCE_SALT',       '/aiUu@Q*dADN}m1}g63F0&:@y`Cd>.fBw{?O)S~A6#/|Iw>8pc6@z4Vd=?jv/JFH' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gd_';

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
