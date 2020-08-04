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
define( 'DB_NAME', 'testdb' );

/** MySQL database username */
define( 'DB_USER', 'testuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'test_password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8mb4_unicode_ci' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         'VXzxz<P7-7vZ-KhlLECZ,PFPd# |4*9!E6MH*$6MJRAH1^7)z(Ob4D9XM./kS.v]');                         define('SECURE_AUTH_KEY',  '|E1dLF,%eJ/`>4-WuqZ>e#C2;,OJXID5V^-<^sAeo;_*x_RM)(v][p]HEOb(P~Yv');                         define('LOGGED_IN_KEY',    'a^u?mG|*0FFLyqD(^C4YDf/f!B+fY0{+oU[#172y_6!:k!--j*@1z}W:N86gI-v+');                         define('NONCE_KEY',        '@<qn@7Y2<VGigE|Xuq!+1x>GsQ!i -68V461-qAq3mmdC58,GHgaz&Yfq!.xFnXw');                         define('AUTH_SALT',        'u24iO`s*+tX^R11| czm->Vki+!MF=*udj0:vJN{LMX+#z,e,!G0@joMCR 79k6@');                         define('SECURE_AUTH_SALT', '0Z(vb7(%pEGnm|6ra-](ujSR&wN[e-J{R1Wn=#.XwpJ-Lu($&<OGJLTh3vzKgk07');                         define('LOGGED_IN_SALT',   '7HX ^~c|OS$F0N)`%Pv8ZA7LM})YDs,%D 7*;<LKKcsH_Q?@zRX#L5-!gch=<rSx');                         define('NONCE_SALT',       'jPY4 ;@^rXiMYcPH$c4oR![.!{?jDht(AK^JBOz;|Cmq4 Sr%~B~Sg.HrMD`oDSP'); 
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
