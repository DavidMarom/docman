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
define('AUTH_KEY',         'IQs+Ip1ms07h3wMQoblg4FuIOG5X4jnAx2zUubdbQ7qWQ1U9BMQZpmf/XzbKHvqsWG7Fpq7ZmL1HI0ZslqFsNw==');
define('SECURE_AUTH_KEY',  'ltWhRvuwmYmsPs/Nr3KNJxo7ql7TiTPKD2sLPlSJboak+mi2OIGfifh7mo5eoxWQgTfcMWxDtiES8RClIjT9SA==');
define('LOGGED_IN_KEY',    '12zNLudcuwg17y0p8YLgA/2Xwm4/pIpgnmu0nD5RJVKj9mu1vlCknOi6MVpAnk9w2KLmOm9DEURdlpt4pK+w6A==');
define('NONCE_KEY',        'C+gGc/TGjUjhYYzp8wSt64wqL4KKO2bjXFKG2/Y4AewyUDneNuV3jH8JVd6FVPx/ASNX+GLdStGFOLqE4UQ3cA==');
define('AUTH_SALT',        'MHldAusAz2LA7qmZGm1ilMBPVnq9s6sb0bDgX0NtnTHMRwPWHcxokfOXkJkWQX2+0xhWSzHhov7lOOd0qTvYZQ==');
define('SECURE_AUTH_SALT', 'SMbHMhNQkRAABu1lAOjx5gTcPIgVLMd1l76i2yZcNiSaB5cQclzGs3x7UTMcKsN+HtB1EWOljYl7pHZqXXDxCQ==');
define('LOGGED_IN_SALT',   'wVCl2g9rDyOq3gLVKe4SPTjHHbH4S9P1UK7BIcoNYwATVFaD1ux9A2a+2nSt0WxEjVj6g1SIduMs66yriIAhoA==');
define('NONCE_SALT',       'WxWHNG+4TujHBel7fuDAPM87WhHNuE23XBTRYznOYhgdpFvz3Q/dNwYR2rFbKQct2u/n/C+K5/uozcg1GYwKyQ==');

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
