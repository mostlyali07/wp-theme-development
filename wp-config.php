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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'custom_theme' );

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
define( 'AUTH_KEY',         'ef9%==ji7It^5sA2 <ps:)i>p&WB_%<bWKIV3?x-,TdZ3cQUkiluR?=HDPGw(&58' );
define( 'SECURE_AUTH_KEY',  'TyUzM+Nz@(%`dcz3Gzh$:QIs>R#u^XY|u,Hhg((-&-]a:iG}qUCF-Fkdnm~UF/u7' );
define( 'LOGGED_IN_KEY',    'c>@;gL;@pyVG%ZkAz/Og7o]4.<h6,3T}/f[af:Q%LQm,xWMb~@mx)^ze#.4),Hwt' );
define( 'NONCE_KEY',        '|0q&H&x^~Ge|V~aA$]m~3|{}X#nMG#[6(MN!mk%85S6UD2ClI*AA, G+Z_CT>@ a' );
define( 'AUTH_SALT',        's/uD!k,mql{cMz#u!1RE9U=u5_+MP,M:HRV5@Fk*i r XGmhz/EBwlXf1gq3K?}Z' );
define( 'SECURE_AUTH_SALT', '8r7vm$!yeDi;c_`;bm`%07M]d+N-M!=/%Izx<J<WCjiV{p zoB~]H6Q^Hsyt>B_s' );
define( 'LOGGED_IN_SALT',   '74?s!r~.IQp<+PeBL|PS~2ydlby#K(27c _:;MAEUP27{W_&}n885k?+-~F3JC=/' );
define( 'NONCE_SALT',       'iX#6c##F=pMNjq5LCD5PO0%^h{zJm<fx[*[D?kLDUo-{0`+~YV*CWErVm(0hj{f$' );

/**#@-*/

/**
 * WordPress database table prefix.
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
