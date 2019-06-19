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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pideuntecnico' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '<!0v-{5{T}!XKG^.!qZv.*UYK)D,,qO|n*#TRls;Fp}K6Q*-]t~vY#Q#5OT}g#,C' );
define( 'SECURE_AUTH_KEY',  '%*`9M?pF!eo|#[;ke@w,a={:|+knoKI&0k[GbbP1]W-YHjn,xThWz{%Gr*GwiI(L' );
define( 'LOGGED_IN_KEY',    'pcP%?7;YzdT${O-5?QJ(gN($]6ygj<k;A3%dGG(35BJU}A1r/*)I$ZLW-^9]!WBq' );
define( 'NONCE_KEY',        '$+4g2bXfS~q?w`b0GX2q)_W$V]kBWrHjWZ-56YY!mM53 sV~cb%XB-h%.G1*VpCz' );
define( 'AUTH_SALT',        'fQuGD]2/Rkh 5!fkIrzby{]fwa?H}7a%FAM``ty59O$:0iWPSVNCldg-67dt)8-Z' );
define( 'SECURE_AUTH_SALT', 'HJv-vBB{9m);,D)tcv.v&z-LKag{[-F1,NbVwCYLQ|gl;iC|(zf#$v6.W.[R49`R' );
define( 'LOGGED_IN_SALT',   '[A>tR@]<aFJ6J_:up}^P<(_2)t8kdspW?ZY>D8;B?]FT`FiU!wgQK L>ql-N1-bD' );
define( 'NONCE_SALT',       'uwSYa0*,UkX60:dXjwFY #-+U5(5!r^C6_>EKF/jp(jL$j]BFMFK)#NmCk;2Q lJ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'put_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
