<?php
# BEGIN WP Cache by 10Web
define( 'WP_CACHE', true );
define( 'TWO_PLUGIN_DIR_CACHE', '/home/redcbltt/public_html/warrior/wp-content/plugins/tenweb-speed-optimizer/' );
# END WP Cache by 10Web
// Added by WP Rocket

 // Added by WP Rocket
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
define( 'DB_NAME', 'redcbltt_wp934' );
/** Database username */
define( 'DB_USER', 'redcbltt_wp934' );
/** Database password */
define( 'DB_PASSWORD', ')0!W.pS42n6E(4Z-' );
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
define( 'AUTH_KEY',         'wiuozolixoojp3oiuiv210h0mz83eiu3qoir3x86mmcszkhwsobzjpyaitdvecel' );
define( 'SECURE_AUTH_KEY',  'irckrzwjso8dewnlyyfomjemmq4psw8rqh36bsvlhmy2jtobf5fsmqor1qwharou' );
define( 'LOGGED_IN_KEY',    'ikrimnguxzb5r2zhs8r4ll6zwj4fotdt4zi2oubytv4ld65bc22c1noc1szef3is' );
define( 'NONCE_KEY',        'bxnakphneljddgfbcobgbdnpxyrn0slncpwfpnfxh6a9rabtjpo8amdcfczvuora' );
define( 'AUTH_SALT',        'd2bnylbb79jijglux0ltmzaut2nnp4wxmmrkmsbnyjkn6v2aqcjyzk9zprbgr4df' );
define( 'SECURE_AUTH_SALT', 'w74aoc34twgzrtzitvltxmpnk41bhrswtzvc2qowvo8emikywkzznojg7yti1d2s' );
define( 'LOGGED_IN_SALT',   '1scm4hswmpbenlwmth4pdpiscyfcpm1i0nza8kue7adyy49qkgdbb5zhegkonjjq' );
define( 'NONCE_SALT',       '8558rqsn1yq5peecxdjoeeqtvieilnpx83aw2njm5ljkiddzwanv9pqjwjsxyuco' );
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpn5_';
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