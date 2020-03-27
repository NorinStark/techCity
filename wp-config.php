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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Ic9lr1I,91/GAdbFAW:lS69nP7@Iy{Jg={:PJ~dsQ<807x=mD/*(YWsdfqCt0|Ot' );
define( 'SECURE_AUTH_KEY',  'ySSCHZ2%S5b5{MIA_8CX6a}<K4^j<9&U:}Q?lr.9.MadpBk)t{ c0P5Zj_bO6b!2' );
define( 'LOGGED_IN_KEY',    '8[MfQI<BjsqW`ZA[X4Kii(PT0oXLqXzd<.|.HYnuKy`7}$`C<T0=!F#1hFfAoT;(' );
define( 'NONCE_KEY',        '|E!q_~em,%(6U7(QT)!I$y97m9DcNdeV2MGFQT;2!JJ0M>ky%_Xo2J~Q[R?R@3ax' );
define( 'AUTH_SALT',        'VV}`mDy{@^%2EN1hQ}>m1s$gw2S-P&zNg_Yf%lf{=V2X0%z$27RT%UQ@Cc~>[|;@' );
define( 'SECURE_AUTH_SALT', '37S8]~_i%,znx%6 >(kmN4nAKNRB*)FfBW5<+&teXDYozR%VLY|SOj:N:cDdBl=I' );
define( 'LOGGED_IN_SALT',   'N8~}wgim3j4hAqC!6vf#$m[i xGbTPRE?G&`oAN~a~]+zE9*g)<es9j:3I[Is2?(' );
define( 'NONCE_SALT',       '2joQp-(X!>?Pt$sat+C|8pj6M*lDV=l]4`=w!R2f)Tm74>PR,`s#wJ3JNLRIdo~m' );

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
