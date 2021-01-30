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
define( 'DB_NAME', 'gogo' );

/** MySQL database username */
define( 'DB_USER', 'gogo_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'es98OmHrZOT1WfVE' );

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
define( 'AUTH_KEY',         'rQu]dnhOj*(Gdm..u3.8hixfPpXIotkbE|_Y]v+Zg 6v#(iH/%iz5DH>xsm^$&WW' );
define( 'SECURE_AUTH_KEY',  '7%[uHFw`,AQGZhecZ01}p}3bWH(=9%nD@.mxIGOqspAHl4HHa4?%Wm.AlHCPm%O`' );
define( 'LOGGED_IN_KEY',    'D7si<m:;R9b0EGa@?T@%Z{_CcShTs7okBcHLP@^0rve@.69Raz]nh+RV2yjRQO6n' );
define( 'NONCE_KEY',        'iY]g7;=krFHG~k|#U4 i,dN=wQkBFtc{PZ~y@6BgPt1Ze|Pc(IodTYn*ce?aQ|3Q' );
define( 'AUTH_SALT',        'CVG;vFq 5u0N;gQNtW^trI}.Ughuo&[yFs^w%=`()MsC!%ix(-HBuSD8G!#kwgP*' );
define( 'SECURE_AUTH_SALT', '9V;QHr4WgI;Vax%$zH@U1/l0oB[WkU4lh|13% G@JJJ9T/$;zCx.+8=)`sgj~4=/' );
define( 'LOGGED_IN_SALT',   '^i~9G1:EJ%;^kP1a@^iRXt_8aSi=V&Wmmlj.KG~,C8_(E5x+#{7ZEh/~4,Al/Xb+' );
define( 'NONCE_SALT',       'D~Eab5%<>M<2@4R<_}+E;o4[fVn#~}^}(K*VP]-5W-wy4o8nFQ]zyQE51dvEL<I7' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
