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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         '%IivKN;t=QR1qb5l+_#i0,=PRR$i;#?tJrd=!sM)8IB#iQFemf;Z!1M>]tY_kX!k' );
define( 'SECURE_AUTH_KEY',  'xFu`s8QsqVHik%*lxf<5L r*)(mAA,.Gx4+Z/CV7|if*?.oCo!XKC3$-c20hNDF(' );
define( 'LOGGED_IN_KEY',    'M(eCX,wu5E.#Q{4$1q`snAcUI,X Yu_f@[XVWd/IRs;/W3XQ!qY^c;c=,!z_Vz%!' );
define( 'NONCE_KEY',        '.PnNQ(F+ZAE.*S@rIJnYr,wPr:m CJx@K&l!y/`*G<CNPk{E{/{^Qi,SL!/6yE9.' );
define( 'AUTH_SALT',        'T4+Z&OsUn*d^dZ:0.#{_+&u^]0I(*`B/hob0]10C2DFJCVm${;U+3CV1%LnZLWS^' );
define( 'SECURE_AUTH_SALT', 'k^j~HT^{#g<$z`n1_3Da3*W9* *Z]FtcNErB4AY*ks2fqUO_EdX/b7$^l%~W7`23' );
define( 'LOGGED_IN_SALT',   'Zp]f5&YYOT{vtBSP]/>5wQs9q0wI%4)r7oj-q[j%m+m&JBlbc%S?CrmZcV9ZN60+' );
define( 'NONCE_SALT',       ')CwQ1r5dw>d=.j,y_V+`RX]dyJd9$!T+>xyoJ! ?{]<oZv?RONgRrOP3QOte,E*F' );

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
