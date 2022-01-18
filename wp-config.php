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
define( 'DB_NAME', 'johnmeta_wp77' );

/** MySQL database username */
define( 'DB_USER', 'johnmeta_wp77' );

/** MySQL database password */
define( 'DB_PASSWORD', ']p6-Z2S846' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'g6d3oxwqwhzbz1bylwjnd7bposcr3es4p7jm0qk6o16rt7lknaz7gbg3jrghaq8c' );
define( 'SECURE_AUTH_KEY',  'cp0buzu9caqnvsq9mtstiojidofhgwhs2risyf3xotgvx0p81c9ouri64eaf7mtz' );
define( 'LOGGED_IN_KEY',    'mw4gy5po0po9apr3v3dmuzmpewu3w3scodqhreswjokrkosuum0l1pefck25gv4u' );
define( 'NONCE_KEY',        'lrkbbg4hj2g12qrj8f7nfkh2xirp8alwpsexyjusuz0hzfzknvakswc5agvgfj63' );
define( 'AUTH_SALT',        'dzatelamptr2mzxijurewynxlkmjpuoqh5yns4ussghhmtwecyyhl0srbqctd5rm' );
define( 'SECURE_AUTH_SALT', 'gxixzsjxdzttvnkikp8mcy31ouv04apqyaqrva836zvfwixubq5e1hw8buejqtu5' );
define( 'LOGGED_IN_SALT',   'l7jtsuufwgd0oxjl2hozjoaipmcpxl7fvdgfxs57rbgbxxgq7oqpewml88nxaqoa' );
define( 'NONCE_SALT',       'tnnviwsvq1gcutuzir340onjym72jhhcepvrbfsztagvkj4soxwj2ojze860yvpw' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wprf_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
