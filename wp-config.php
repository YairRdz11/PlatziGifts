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
define( 'DB_NAME', 'platzigift' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '0%y7&In-`4UR:XU`4aQ.^B##8DG2[Y`f{~Ln6rBIE/~aSghsC;{C?N@5#)F6~50T');
define('SECURE_AUTH_KEY',  '(>vZ]12%xQ|!&qmC7B_:z]_QTb.#-(Iy%b-H$DjMm6(n-++%=5B@<-m=-R:=#,UQ');
define('LOGGED_IN_KEY',    'S!WSui%<vOG[CUk12$wB@F//E%a 8LNK][LE^|a)J13-yf8znT=|^swXTmZttx}O');
define('NONCE_KEY',        'L$LsOKvx]^T}}lC^~Xx!jWWL59>-|-vDYqg[IB95Zt05Q]I)%8hh [3xT)9z3<}{');
define('AUTH_SALT',        'Xv/3Gl!&$~l7b)o4U2FvYG#k4Qm ^y=6|H|5Drv>plL(]UPC_a%_XoH;xK*g4Xit');
define('SECURE_AUTH_SALT', '-{gTj)qH9_;|A}a(X59z[CJQNpPd) jDMq]5.~Dq+e]*9q0%?UQ|ZjI8!9Nh 2uQ');
define('LOGGED_IN_SALT',   '>?~R{[w5`hi3Ti9I!(X$c4RB--8lHuDsLC,=,=$M;`+Q*oPYT1nDdD^r%PzjI-fU');
define('NONCE_SALT',       'wj`ao<%v/{tD&M7SD2+@W9m0TF9-9t[O kXJ-.G`ycI3In4?}1v6#O-0/yO5MvbL');

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
