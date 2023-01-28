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
define( 'DB_NAME', 'battery1' );

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
define( 'AUTH_KEY',         'vH.2`=>v$vt#Tzu`uVohzH(uMN#p &:yWW-O=2je}ad<|0S8LT1T/;>4)tjsYc5Z' );
define( 'SECURE_AUTH_KEY',  'S,>KIXL!RyK|vv06<07%u`}:_E>!ficI0PiVf!AT%W`_>|g|-;QD5MG{q;]a5gB.' );
define( 'LOGGED_IN_KEY',    'zR/$.zoR0m*@~Adn=JJb;+oQ .SZ]?JPUKfMu1a/pD^:542X>UBxlGhbq$WX~DGw' );
define( 'NONCE_KEY',        '+#%j9As&qG/Hnj;>HMhD_ev}~%p%VP9C+:&3S;_UG&p4Vi(MJL~gh{K/3|uHGJr}' );
define( 'AUTH_SALT',        '<+SoCDfN?=)XF#/jFBbr},`/1KWllD4x<[X2X>GG$RwAQ+;SK7m&A{LkH4avT^}_' );
define( 'SECURE_AUTH_SALT', '1$Lo#4pU{r?=i$z[N;Xh&j?[0:4k ,A-(i^%bKJu9,Y5Ewl$ oG,SYKlumj6)x4x' );
define( 'LOGGED_IN_SALT',   'hm_FF;NxqTbGU~z(~?bAMj-=++G^x)0NHixrVO`XK:myhzaCe+ZD*X^u:AToo!:)' );
define( 'NONCE_SALT',       '=xg}o%8tNwaVHM*fC/c>}a {i4sXRC}#g.&%M6D_y|??s9 f[2|}/vVd.pCPz+R4' );

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
