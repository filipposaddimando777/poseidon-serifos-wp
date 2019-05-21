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
define( 'DB_NAME', 'wp_sandbox' );

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
define( 'AUTH_KEY',         'Z+lCmdrn:?6AHVLKBJ4afQ#)CrY:~lC*By@wv&,^V;r0U{L#,}F}l0oP1_dpYU@.' );
define( 'SECURE_AUTH_KEY',  '78~LE)IYB.e;^H%1 R@=tIP38L5E?ancg}^_{o$5XIRz8J-h6sSH)h,Eo#LS`gK,' );
define( 'LOGGED_IN_KEY',    'Dfe+n{mR(5^.MuQj}b<Z; /LGe5{xEYX^g+&H9M1uO*S*Q;_/C`1cXF,j0V)s8~n' );
define( 'NONCE_KEY',        '2+8+PA4h1bv<ul|%9_OO].k:n+@DcNj-X/LjEAsI1T4NY:maY$f@X 1n|,s#8at4' );
define( 'AUTH_SALT',        '6#D=`,R:8Zg8b{NRfth{HT:*ke_.EVf`E}0ne&TbLA[@)}RzaW@rYW:(Qha(4Mdi' );
define( 'SECURE_AUTH_SALT', 'gooJ-_~n!gw:!I]ly4[x,:YsLQ4+5s#Z~;D`b[#bk&z+KB3DH|:EO>*ef4t=K|%,' );
define( 'LOGGED_IN_SALT',   '{Aj:OBu5<ZTId?q}S5:n]PrLr.3Fh$+,fs@UKeX5xE~f+q),S3NumZ#P2Wl7=.9~' );
define( 'NONCE_SALT',       '6GH!aCb.Sws8<U ?_Od4@h7,yVjC$;kcaa@9eW9](wZf-lYHGoYx*9fSM+Id~Cd3' );

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
