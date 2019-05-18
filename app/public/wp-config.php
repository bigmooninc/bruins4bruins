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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'MJIJAunfSfUwkbr28x0mwobGV0uLFtm7nMIw/j4zqCbCJftBbXAJ1QLDLCFY1gZHmqsSG2xbBSK+0W/B+qFsOg==');
define('SECURE_AUTH_KEY',  'n5MBROlhavbKgNcFoy5bRYEBmFQHIjz1EMnCzAaaJHIT3fGfy2bD9J2EeZCf8oR5A8v+t0h7Tp0sM26JcVgyCg==');
define('LOGGED_IN_KEY',    '/Qd0vUKmF7oxAEcpca3MCbEYiN0yypP9/ESJVT/mCbqleVqq+RSTceTciWU3AZS/N6PUhXwt5mhWFwsMq1stUw==');
define('NONCE_KEY',        'gTrm5sldm2wtasidVL0n5WeDyhHQ9ZERMpmX+YTGxTQlemoD4E3pHPCKGfNhz7aQpmuERYvu2umFCvnvzmV3pw==');
define('AUTH_SALT',        '0G3Ql9WwTqrb2wdc2n1GcSU2qTSsM8pYUzNrKQf3ZqFMSaMyd1HHfqstELYbX7DkHMVhY4unmCUI9oo6PebMcw==');
define('SECURE_AUTH_SALT', 'MmWtM4qLS92L2s0CvqjlEy8JPhPgfnO2iPWBI/78Xzeioc/7ro3w/H2tOnFFnVfNInIjIIyP/Fz7AunIJKtuQQ==');
define('LOGGED_IN_SALT',   'Oyj7FUfk9Mt7hY9euVSiGZvV5ygoE0EGZ2u+CIY4KP0UXk+iDf1D7Ehl0y07D5WLGUFqm3iGWn7tAvSrvBLvkg==');
define('NONCE_SALT',       'qBco3p6y22lEWo32jpzG8IYnYSLT/Vjeg1EkjgUV4Wc3+v1nV19lHQNgztTfa3p9KLqE3YZ0S6HCgkBqEbGFug==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
