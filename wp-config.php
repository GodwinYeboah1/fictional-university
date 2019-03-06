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
define( 'DB_NAME', 'ege_sample' );

/** MySQL database username */
define( 'DB_USER', 'ege_db' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'QYoT%cC[SHd;]r]2FNpl7A9Gm2APntpVH@-b^iBXv. dx>%k.QBOy568-Yp=[*Q/' );
define( 'SECURE_AUTH_KEY',  'L9Ju-RY&*9VLG&-@Oc#OeK?[+bNCaY#,vQ}r&[o0V+( Z#GPgr]G!R`j4`D/Wk D' );
define( 'LOGGED_IN_KEY',    'y}X]d$)y=cbGATPm^V!F=JlnrQPi~nn-W.Tux#U4$ DOlSxYDjf:[ov]W2zq#v:T' );
define( 'NONCE_KEY',        '-:t9}(y=m`&>_bdlZhcQ+<^.(9(gT}YE]B+??h3S]USWD>aM?;9fzuJ{s%K`}>PI' );
define( 'AUTH_SALT',        '#ikvRqY1K;yB_G?;f97M}R2MT!=la{8bzjO@MZftat$CjAU -jlJYX*&Z5`lAb^K' );
define( 'SECURE_AUTH_SALT', 'h?5;Cn;e/ wrpE={23=SZBbrwMb+X0^+W7A)thuB*GjqQ3;9U.8(e/)5VDr5)dzO' );
define( 'LOGGED_IN_SALT',   'UT<as<B{sv6o@`~QeO@4zscyXr3[Bg{$YADHopM_WD!Ax2ja4W+5Kn[2hyBqZ~Nf' );
define( 'NONCE_SALT',       'I!>(CG%CEbi}m7T+d9*V++sWD7Y=`zOS9uDMpm#zh D%eLr)Z..6Ko%]R.JJhD}*' );

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
