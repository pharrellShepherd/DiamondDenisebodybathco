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
define( 'DB_NAME', 'WP' );

/** MySQL database username */
define( 'DB_USER', 'Relly' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Password123' );

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
define( 'AUTH_KEY',         '83,!z`,D|u=C^?pAiv~vH[@!t&>qj;QIj&r}p&TC NzM>,DgS3g!8&<o>3=rW~HW' );
define( 'SECURE_AUTH_KEY',  'wi?pVc;%a4q7m_y>}>-mo-5c}aRVsSG!~Pq97?qBM9=7FvX!~aZ9+HQ1o0j:6 {k' );
define( 'LOGGED_IN_KEY',    '&46)=4`Io8h+BS_ZQVAJ #iB&wvbND[*qiHVEwMuQ:h^$YCO^l}w!_LK.~U4|)rN' );
define( 'NONCE_KEY',        'jViOtw*JcrT{o=bjh`C5q:wo]SXpJ-~JHxv5a&[a^3d}?=Qqu8-hkCmr|>GJ!(NP' );
define( 'AUTH_SALT',        '9p7k^=SCoQY=TgZaj{}v+~A<Ccoh;XP+=]>>O;)>Bu;itAc``)zPRz83*?F=oU@n' );
define( 'SECURE_AUTH_SALT', 'z3I;}ttUG4c^R/fKE;e{Old!NNW/~;>w[u6v:Xv(3AFQ-ckaPIM<e(FUc)f#[rvl' );
define( 'LOGGED_IN_SALT',   ')WjRl(M!&JQA!b88:Rh6O)Nr4&CPLezn[Gm8Oz#<l::^$73,jfSs] a1lk[OG[Mi' );
define( 'NONCE_SALT',       'zO`L$;`qpOLApZUg&!TCn)wYY[TSza9^hT$z$R;D_(8;+qd{94+>q&TSm/}Fe/_g' );

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
