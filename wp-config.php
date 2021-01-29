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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         'WxD-4fI(u{%b!v^IU7AC!21El1cNmM./f/[qf pwvfE1|[t8V9jlg8Ph6-s}-bk|' );
define( 'SECURE_AUTH_KEY',  'pw5ATI/Xiz+e_ZC?]<{t)w=nH}5:GksnFfyzpI=O06k`vRV%;h9+vd2E_[N},Oyb' );
define( 'LOGGED_IN_KEY',    'owZ,G9~*d~m=8zo8I=B2a1Q!:Zo3#-+:lLJmX3/7uEuX|{2Ay9hJv.M%qcx!=^< ' );
define( 'NONCE_KEY',        '9s/qo*z3Hs>T!4.^AM_m/p3%W nM+qQ{MtA*Hb0)vj%&_bV.-R6<4Yd0 p$N,)6*' );
define( 'AUTH_SALT',        'eUEhgpV@c(gR!~`/g4vMKB!Z(3O|hC_rml@c@.hRRo};1^)_1)q=O`fTqdo|P<FC' );
define( 'SECURE_AUTH_SALT', '8vf8$dfwLl`dB|-M2X)0wU|oQKmR6b(sIW%wN+ct` @1VH&X(5uCli~-PRjA0F)o' );
define( 'LOGGED_IN_SALT',   '%)}x871&690 daY?`N!%aJ6s0O4C~Zc]}JQWfd~K`t2FLSD_t dpBmr,7?*#jUQ0' );
define( 'NONCE_SALT',       'E$p6kp9n2+CHB@/nWkhz(0up^W}iAAwya RH8nO*?C!UR;GxR%t>7x5^P?T%%!/i' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
