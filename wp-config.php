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
define( 'DB_NAME', 'wordpress6' );

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
define( 'AUTH_KEY',         'V9wWF6-,}C$ZHJ>0 N&F!nY3yg%MRF}OczA]p>QBHChXqdHc4LOR$Pt0a`+Z 71&' );
define( 'SECURE_AUTH_KEY',  'R#qdC%6tJ4;J?kDj)G. [v%XO_SqIJ<XtA/[ws-oRpnKfX2p_Q%B9T(UB?!F;c)J' );
define( 'LOGGED_IN_KEY',    'H*>1$s{mLr3ONY0fdQ;R=j]-FfD6szNk*F$y9*5yTzrBR5DU#:N*vgStUu/D#&II' );
define( 'NONCE_KEY',        'o?m$0[WM3X|d`q)2uzuW/yE4%GpH63^++a.0A*XI%KV;Tj EwKj5i(`N~]mg84us' );
define( 'AUTH_SALT',        '~w|uCku_FD<EVMD|BPbHW<RuVcD>n-Sj<`j[`.&NBVDcIFbc?ZG:t)fqqE*i2M7Z' );
define( 'SECURE_AUTH_SALT', 'V&%Jl?6?@,|)gX:HE+R)Xvfhss3.qNrP|MVVV;~wh%,5WsE0|?q8bP}~2ZTgUQ@f' );
define( 'LOGGED_IN_SALT',   'oqI~4}-S IFFEPfpaLoe~iVLR]&Fl^Fh^k9wX=(P[=.D{4Q4f+DH__1erno3?nul' );
define( 'NONCE_SALT',       'z9Rw[w8I8DnBFUF_*?JAm3y$kT2AAUa4#Vw97M`MDgj1R@hZQ3^,)#a9gqP[s=,r' );

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
