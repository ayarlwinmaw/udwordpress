<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '+S&7q$P&xC+9q<8XlXG7:wN)8xLBQ{w-l.Sb/{(7YPfPVZuxT;xX^^)/os5Z*}eH' );
define( 'SECURE_AUTH_KEY',   'zSZ%5,-DCk$8l?MZc;f`H0q00OEPK!(ajr3jL~i%Yong;8YT_Xx5[Qiu:&8UxX{y' );
define( 'LOGGED_IN_KEY',     '=Z{}P{N`Hfa4lX~s3~lcm7VfDT`$-S@*%~h&>OK5C69:-TKR_c+X6h~irvXS==/P' );
define( 'NONCE_KEY',         '=(Vp]vz}1Q958m5+di`eTD/n%Q^Lz{fQJ<*bs48iroXpDz-%JcXR+_!hFX}r_k-c' );
define( 'AUTH_SALT',         'OW|mHWi2z~qSpY`vP7t<fd^rdk(dnwMmRdTCRJ4iD{1&aG:ke0#pE!OK<2VpUyPQ' );
define( 'SECURE_AUTH_SALT',  'gl_NoU^B3xE2:wK0vXG#7lf1FwC-f,SHqu(j1RCD~M9<2|g0%@?X~,=a<ruqkfBp' );
define( 'LOGGED_IN_SALT',    'C9-Wcs$ B)+~Z$Jx0dnBs/k ),IsJcyd~.WGGah(ND,vTqM3LKP</:5~m+k9S1y[' );
define( 'NONCE_SALT',        'v[Qa%n&TWP.P(&|xSLr@*. QB;qZ*.BxtBvMPR,&%SA00[WqaKsr)jw? i0X;8/q' );
define( 'WP_CACHE_KEY_SALT', 'X)}TE>w^o.7d]bv5+r8#T9x0B)CYUt[HxU$1+~Cr1}ahgX_ 2frNT6 IIz}E;-$R' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
}
define('WP_DISABLE_FATAL_ERROR_HANDLER', true);

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
