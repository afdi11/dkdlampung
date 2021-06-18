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
define( 'DB_NAME', 'dkdlampung' );

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
define( 'AUTH_KEY',         'ou5TTu>oOr.%Q1DcASeRuW4a-:D7dTFotr-4={i8K8LF}h<]?_h)6Y>[]nk{yNVt' );
define( 'SECURE_AUTH_KEY',  'DND|K:TV2|&!}|+P34LqxNMO7j{z`.HI (wD$2Un6x:EaR(/ZbeKHbQu_0m]yvM<' );
define( 'LOGGED_IN_KEY',    'h|T,*We:hTLpD@$;-BOAse^6V%O^Hj=}t.:G73k+dZl^?X:m=Y3{~ls|3goX-UlT' );
define( 'NONCE_KEY',        'GE^t[@=m$vz9z_Ck~POaTo1s|)3[=tX<C0EfdQ:!V4}H,aV?Dt{TP*V/II=vC@Q9' );
define( 'AUTH_SALT',        'H24Z7KxdIO5Y60xBye,))[}gj*YRF3nY`Baae(p^GX?}E(&kym]8}aC61]z+|#c2' );
define( 'SECURE_AUTH_SALT', 'cD<4U,H,OPW1C3UEr1v/Q VQleh%4} l2sO*AuK]LWk8R(]_gt`%vboR*))?j?=$' );
define( 'LOGGED_IN_SALT',   '#iJ50F5Xw_PDu3xcJje(]bS49sh[66E:M@hY~4W?mDm#F8v0o*EQf;IX6,ZPqvuX' );
define( 'NONCE_SALT',       '>U3CBJ?nh|M,8~(!dSjly3Oc2F,sdoka}{;lh0w[E5$~W9|:PAI2Y+kvkEI}]GnY' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
