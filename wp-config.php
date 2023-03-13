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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         '1dY.ElBNKrIn<_E(/V2k:_s+f@1vYqN;VtswPo9Yrk4.i1o/sI^7=Gs1;=;ea9Ct' );
define( 'SECURE_AUTH_KEY',  'c?H%`+M<yvBrc@9JV|{)rFM4OL:~4Bl79ei[Z|m`On&axG,mQp%UZh(dS:Yd:i]k' );
define( 'LOGGED_IN_KEY',    'tH}$C@HTedcI>RW7ui$APL(6$u~N5jj_tRN,Lc/!f.4bYx*_-q<7Biz57|zMp5G=' );
define( 'NONCE_KEY',        '.>wE|I8wN0[f3;DN2~55%viD&4[,9HW7&xO:sM0ys(%x1Pjo>;b}6bjkj^3IhESd' );
define( 'AUTH_SALT',        'YZys|wqtZ% 6IK=5VZ#J=#Yf9.Fh#$k>~1f4${]Pi_7H_-UJGwBO i eC9F=/hMV' );
define( 'SECURE_AUTH_SALT', 'L9R)#R4S8KXoUc(ka=&WiKq8>F1=2> ]}6EF@nU3 6C4[~yqW.Nv4yK6so6<r^dV' );
define( 'LOGGED_IN_SALT',   ',RJO,,FU6U+]h]I@~6!xc(3p{a{)$_?lj$cl~!/4/M;LGOy9(%*50NLujV9fQ[U&' );
define( 'NONCE_SALT',       '3luspZ+xw&??`0I!ULHEidaq%S)p)xjI6HFxTj1<)~sW+lr&(O>)d#Kzjt?BXuBE' );

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
