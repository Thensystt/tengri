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
define( 'DB_NAME', 'p-339975_wp_ohabr' );

/** Database username */
define( 'DB_USER', 'p-339_wp_mautz' );

/** Database password */
define( 'DB_PASSWORD', 'kLet4t?_0FqfHfz7' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 'Wm@o;s0G(5|0~2N55oqD[x-QR1rcu~x5L[EL+3&Y1eW~#;&cxycQE[6V;jG|QlO2');
define('SECURE_AUTH_KEY', ';bP5911O25-A%+kf7T&4B*Vj4+P48:-+%Mb4D|!%W-k9Y7(/#-m5);5IxH-06Qzy');
define('LOGGED_IN_KEY', '940a@RMbFc+q#dG)OuE&Z6UL3Ki4D#5(L6)4qg*3K[z4G5r7V+2604Y7:~1;0I2I');
define('NONCE_KEY', 'Q73x0_*/A/@@on4IIv25xz;D)2mY0LO8GPZY+8;o2cBTYR0(Ie8yrQ7NvptOw2c1');
define('AUTH_SALT', 'L_t%&5;97|3&_I5[)GHS8I!Crrw-5XL~2G]v)679;yHiC3m&NT757@r~fM!Odx:#');
define('SECURE_AUTH_SALT', 'i+z&:2/fc*7!u;7|5E;1W3w8K0&15(xXDi]0r)/!jx5%]865/3N56!M25!z0pSY_');
define('LOGGED_IN_SALT', 'y1D-yWn3/%A1Vo&[NCiI~HCjCb3jC99Fq%5C[Q7e8W2L(iovZ)Uw2%24C8ZnF170');
define('NONCE_SALT', '_@_JSs3i[lKjkTtRB91X7Wr8(zbnq;#(69j[g0_2;;B54N-Z]1/1he8#%24A+:#V');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'aG0YF_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
