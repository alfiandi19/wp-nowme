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
define( 'DB_NAME', 'nowf1884_wp859' );

/** MySQL database username */
define( 'DB_USER', 'nowf1884_wp859' );

/** MySQL database password */
define( 'DB_PASSWORD', '5-u3x@p1ES' );

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
define( 'AUTH_KEY',         'kmprf3yzxjxr383lsuncprmhptd7ir5gu7suhewv9l5qi4apydra8qezyjx3az0n' );
define( 'SECURE_AUTH_KEY',  'unzsuwarm1wyel4ksb8nkqmmtnb2k7jnxkvka2iz872xc2nyiqejykvrasgf0hba' );
define( 'LOGGED_IN_KEY',    '5zmjtcesb3n7qdphttffc0f4u9ztmujlfv0lxgpywghekgmkofjm4im3wagv97y1' );
define( 'NONCE_KEY',        'slvmhojpnamwd4jvdo5ydblvqzs393felqup5qeylw8ewkb089qmlxrqgtopt7vq' );
define( 'AUTH_SALT',        '4s4al2owknf8bdz3626kj35pyctjrbhaiy1aoopqx29zwv8t3lcbbnexrdi8gtmx' );
define( 'SECURE_AUTH_SALT', 'jenofy0515m2jzuyx1fhvw2p6bjq0dk0dymtnp9uj72jbor742melgkgwrjupopx' );
define( 'LOGGED_IN_SALT',   'rtjo3paenoviscfbjlatcwjt1wc2cqwqxzvawajkihetjoymzsltrmp3b6rhhxjh' );
define( 'NONCE_SALT',       'wirxeqzk0eemmzztdps7r2dn4xyzprjs38btyugkmszn1ugnuwgrdre4celee4cd' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpwx_';

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
