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
define( 'DB_NAME', 'dblx' );

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
define( 'AUTH_KEY',         'fGrT?=+$lsymMt[?MJ.cSErd$B$@w]Hjd*)g$B_yDRjyWj^&EocmDa2W?Z}~J3!r' );
define( 'SECURE_AUTH_KEY',  '/?vyB$DZJd2nweqRUQ23]U@e0[T(Ew#`KyS!>f1j82~<_aCgoIV]G1uSB- ez]*$' );
define( 'LOGGED_IN_KEY',    '#SCe?xK<3s*.8QkM.Ibk.-yp]wa)ydy+Pm^jN153e.F]0}$J4)4y9eylP=GWtXV(' );
define( 'NONCE_KEY',        '_boJ{>#a:}xtwMEuRkw,i4OlQH8=jGK.^,2j*,hHQX=7-wFQd{Vt)g#Ki+U9P1&R' );
define( 'AUTH_SALT',        'yEJ*(Q~NZQE%K(&/^y@*ZXCt*[CC;w3H[h@fx@TPdTU#]9Ire.*ah90GB(@JrE/F' );
define( 'SECURE_AUTH_SALT', 'w@[$eRy1xj{Le:):Ho8.l7R!eJ!4OGT$O2s-TsrTaeV0kgebG!w.Q!r(^(_VW2^b' );
define( 'LOGGED_IN_SALT',   'z}BU]y4zy9e!I{(T4yS!p!hbo?w=2]_4yfauU)/pN32ngEIkA$J;bSJsV]0mkC(C' );
define( 'NONCE_SALT',       '5MBAT-Wm0EU)G4#bzC[$W,:7!X/HU$d+tRH)=MLJuYx<vS@6)%|TS)d7HZ&v@p3g' );

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
