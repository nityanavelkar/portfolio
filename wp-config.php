<?php
define( 'WP_CACHE', true );


/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         'kq*@}?puy!t@?AM[O$0H*6tRJ$](cJrb|XjG8|I6sOEUT6 u8skXKWEAMEAn.Xif' );
define( 'SECURE_AUTH_KEY',  'LCX/JM]dlRjc)J`!fVn9TK>x&{lLUX+mzk}%}s1QW9_e6r[s!rvaQb[=u>CX/NB5' );
define( 'LOGGED_IN_KEY',    'Qa6f_#:oVw@i.f5D=!QaG^*5 b_Ki;3(>BVK{97&w$|f3dB/H#zM8#qtY=zyBP/<' );
define( 'NONCE_KEY',        'J$HqP;DjP29]/DOFkBt,C#p!}c bO8-:blUb;l5?}YXkgU5to1T?@o|p@I<PKWmb' );
define( 'AUTH_SALT',        '6]7v+jJn@B/AH]/H!_vINTp+eJ_;|if`)mV]8})ITOi`nE#kt9`0)>)6?{qelb;0' );
define( 'SECURE_AUTH_SALT', '%tvyz1!>MUjL*|6&p2p7ZpyiJFGSy1E34r0/Zow#u`4|[elTC]a?6p1L$M9zrVPd' );
define( 'LOGGED_IN_SALT',   'L<7!>I&sVQWHin>e7uO2u%-*rziBy.M:#BPR#},g)m=alyI&{G8_*0x[GR{Rqy&-' );
define( 'NONCE_SALT',       'k?P!Cq{6ngRA7Z5bDn1r-zN=w6W<ca`ZyP%EvhIn1<*}Cf-[9FFqq*C](^FG[pCB' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
