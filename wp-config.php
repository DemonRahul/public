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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '!oG+vW8QR|{1xqjbs*tktB(?#&r>}<DaK0$6,KbZ^Y%3qaKx_V)(9H$Q@6xm@7*w' );
define( 'SECURE_AUTH_KEY',   'SneO9a6s8{E@hoM3XNpsGeZ~;QMv0H+_7kbG~)z/kMA@Ub9q>^zd&Ky%C9yO2MKQ' );
define( 'LOGGED_IN_KEY',     'g@/[vxVNy383a^nSn@*Jk/nUJRwxyoN0+R]sgrS&,!$o8QA$5/Jy:1i03*F%[&%S' );
define( 'NONCE_KEY',         'yz2].=hk.t&>dd4vlj(U2w58=v%6N.U_Tx#8I9%8qV{CPm1X MW<)-x<1w(`-O^M' );
define( 'AUTH_SALT',         'Gzgwe}c,}b#S*-C8 VMfA/2W)C908UIhWkreuZ[$~-]4or_,Y[L8v*vPX9%ArAZ2' );
define( 'SECURE_AUTH_SALT',  'xB!# 0J48C=*AAgs=#M,DtMH=YzPC+Hrr1qOJqk:{2oN!Z+orC=NPVbp&U9TOMk~' );
define( 'LOGGED_IN_SALT',    'zY#iQh2}(i/|_?iIk.N[GK6s[Q.|c!y*&`hdseKghXV^OQ |B9l/^$EAkETm]h#t' );
define( 'NONCE_SALT',        ']6Ui:7HaLEfJHA9<)^H}yORw-L25+=ONLshX7<|]T[;zmhxK;_,ltPbIh+ _8y!z' );
define( 'WP_CACHE_KEY_SALT', 'SUXydqmpgF5^M@d>&Nx6x<q`sySB+fY{T0[?F-u,j^:woG!,X u~Mtm?!}!,S9(Y' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
