<?php
define( 'WP_CACHE', true ); // Added by WP Rocket


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
define( 'DB_NAME', 'u618564158_thekedaar_blog' );

/** Database username */
define( 'DB_USER', 'u618564158_thekedaar_blog' );

/** Database password */
define( 'DB_PASSWORD', 'Thekedaar@#*789456123' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '0UZmq.Y}M}qM%V2J93<c0OXW$EkZ,zVf(fj#>o6;COc[[68x/CTt@MzK]#Lsv>;}' );
define( 'SECURE_AUTH_KEY',   '@qJE:e*$%$5PVG.M.|.G3((9bnHGi|3Rf]u{Zf->3AjX8G5<?nZN68jz_evSyeRc' );
define( 'LOGGED_IN_KEY',     'S,}3SrbB>wj2GY^Mja|n!2S)*?(&&af1hNgaIt;&StZBvMU*X(&|HG1=5@nZY/fy' );
define( 'NONCE_KEY',         '}bK<6U>k{:9zab%<zAh4lZlj41*)lN:9hL&N=o~t-ksL-i3QqRU;2xv27/39ro)r' );
define( 'AUTH_SALT',         'IG/:{^TX+ER$t]%ny#f-5i72h@U]eOjzH^SpnP?U0?TY!hg[I6lpv+w0;S!/zU13' );
define( 'SECURE_AUTH_SALT',  'nm|VhgSptMGOO<j+[tdnVufsoh4 ~l/I)}{CA`&Bt,(% (>Y->^[9lD6@:^P:Gk%' );
define( 'LOGGED_IN_SALT',    '=aB_)w%$=z95HW #E9yJJj%Y_%~]:mr14V}t2I+ ]MqWndO{~NhQEyU`FVnrQWH1' );
define( 'NONCE_SALT',        'zsp1|rvnP3Kkh0l6F&%]p]9v&jg./v -s#qe*j>-GdWSLHk#5Nb8;@:v)^gcW+HT' );
define( 'WP_CACHE_KEY_SALT', 'a7;x&zjNbprL0a}mO3,HTNCNF3!7dPHJj#kk<t*$2=z~ubRH$HRM3+DKXSkTg%[Y' );


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



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
