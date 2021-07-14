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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'QRtEHqm1jRw1Gfwf+9hN9cSDQ663l/RNvOYU4RlmfXhuBaD4k/4TBAQ3a3wRUPCpcQ6aTOslf8dGOqFKGtv8Bw==');
define('SECURE_AUTH_KEY',  'pEABnMnPK635fhQOnojxOrbraeBDNL62FB/4nyT9342F8+WGP3BL9B6K4K4t3fM51X2m4TkyyPhvvJD+CdKQzQ==');
define('LOGGED_IN_KEY',    'HyP7MZwTZ06cu/JvbyQkk3clSWl499EvaZUNbtNidZm5+T81u0Zy1Y7L++G/4DBMFQLDOpM4vwUbrZWSROi0JA==');
define('NONCE_KEY',        'GbIQcdZcTOgvsZQRpLOJQbS7vx6hlYSdjZ1baaASYl+r3fH6wNXNQUykWMGXVmVOxRYx/2ZyQyufuta+5c2Q/A==');
define('AUTH_SALT',        'ZANYjIb77Jj92Osym5/v09WMNDmKFu07rEICrLJnpflKa4alOhgotutmiBgUBsC9XZ+cOnOF2mznAw0gcbVPVw==');
define('SECURE_AUTH_SALT', 'KioM0DlCnGIwe1YRcpHr2ZoPGqinv0rAYwI+dWd+6/v0LoCEDyohw2bHjw0T1tiueWChq9OtQQU2jwBs34gD5w==');
define('LOGGED_IN_SALT',   '7K/r7OMQr+3YV9KXlsyrYE0krKtNwa9EHiTnmOB80/Hys0nJJ7ZizmUfceHBa2Xw4y01lqWLNYWOWcAa1LHrEA==');
define('NONCE_SALT',       'oMyaGmNh/NX4MLk9YXsuRKE+obDXIl32Yv7JJwH64VMAoL6FCZCWKz5tt33//j/r+joZ9vsxOC0IXJyLRA0t2Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

/** Absolute path to the WordPress directory. */

if ( !defined('ABSPATH') )

define('ABSPATH', dirname(FILE) . '/');

define('CONCATENATE_SCRIPTS', false);
