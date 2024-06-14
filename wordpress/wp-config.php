<?php
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'eigosugiyama' );

/** Database password */
define( 'DB_PASSWORD', 'es19860403ks19840307' );

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
define( 'AUTH_KEY',         'a:)1 wkhz~`{.v&b[Nk]5Go+^tIU1#Cxdt0Ps{Wp.]S<_$k.@;;uvo!CF5t?)5uV' );
define( 'SECURE_AUTH_KEY',  'STJWTf=M?Tiq6$wW@0u(F<_A]Q&-lAY(Z[!rUU9U)}oDxbZNgkv2f&Gwy>]@6-{C' );
define( 'LOGGED_IN_KEY',    'uq{fNT6rS&.PYJ>S&ALPbf)N]2U(NqPu|n5bB$e4f@OYOQdvs>4H/Ax@K3X</vFj' );
define( 'NONCE_KEY',        'OJ7xr*)Kbhnt7X%WMkj4h|7a/3e$LD5$$]#MHL&38RF&;/m3uA{10(D $R(LZ5pq' );
define( 'AUTH_SALT',        '#ps5)Dy1?t2p]-G}6^v@v@7C:>~?l}w??S&&_Q^~/;NDPRuwQ4YPFA}kMMPT@SU<' );
define( 'SECURE_AUTH_SALT', 'P,#Aba/p:Z.R0we)u)Be>tqi$ktB%oU=iCsn3c;97QX-v5%mW!CF3q^v4eNI<=:!' );
define( 'LOGGED_IN_SALT',   ' ]=+U TI{1z3$x6d5>nx#W;#H?Au,/g^)$@5NoNCM2(k# :He&Q%}8h}4ynGzWgr' );
define( 'NONCE_SALT',       '$D;%)lU{,vhwgZ)(1s_nv5;XJ>zv?`dAR*iA:b+gHQ-Jc8;!&5g3?p/rI} ]t7Ch' );

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
