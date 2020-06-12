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
if( $_SERVER['HTTP_HOST'] == 'localhost' ) {
	define( 'DB_NAME', 'baltika' );
	define( 'DB_USER', 'zollex' );
	define( 'DB_PASSWORD', 'dimasdimas' );
	define( 'DB_HOST', 'localhost' );
} else {
	define( 'DB_NAME', 'vhost43608s9' );
	define( 'DB_USER', 'vhost43608s9' );
	define( 'DB_PASSWORD', 'rogerpuks' );
	define( 'DB_HOST', 'localhost' );
}

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
define( 'AUTH_KEY',         '!{WtLKgEpw2]oxa5R(Euc7d0(DGB~cqG3SDBrCLrzxb8zd/AS^H@9$a_#xP:$#aX' );
define( 'SECURE_AUTH_KEY',  'D?-StXylSf-xu}J)2ke<`WqabgdpiBp`d=9S-X$Y{dAz}sd.@1czV7AwEoWg[kbz' );
define( 'LOGGED_IN_KEY',    '_SZawdAw`Ea`s%B4=Q27V)x3P@XwS].Dgs,KD;O`HB}jU@kT+D8^-4v97wm4Gp?l' );
define( 'NONCE_KEY',        'Idyud(a6<<lzpIX8=V1<e&Ee~F=:ZBP>./}Y+*`#V]aI~w%2.r*7?w|o:2_@f.U(' );
define( 'AUTH_SALT',        '0;9$<wI74F~L~.;7{sbpq5mr}4S18b#mq8,2i[n1#q)=2B3=6?f.sLk AY=A^nT}' );
define( 'SECURE_AUTH_SALT', 'O-7FYJ1@1mlkOvok#hs+50YjtxI}yM^H!GN^BI6PQs&qM,aZyGA_{|Bt@<trS![r' );
define( 'LOGGED_IN_SALT',   'vnm#up^PN#9HHxGyUE[1TZYftICdSF?tT@[>rHg3&E=(Lp0Z|Zs?/{LL{SY=XHf2' );
define( 'NONCE_SALT',       'PJZpt8i2n:C|b<1A^n4[H6qz*;,y3j`gT63~Ya#`jo$-;BHJ6:tM4}|V]yO:as<%' );

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
