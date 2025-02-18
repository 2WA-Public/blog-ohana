<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME',getenv('WORDPRESS_DB_NAME')  );

/** Database username */
define( 'DB_USER',  getenv('WORDPRESS_DB_USER') );

/** Database password */
define( 'DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') );

/** Database hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',          '3s+rp]YuGbOZlk$_.J(d|l4;Ki4S,|p6vm=<a-/A]XFR(ZnJ[w W9u4LF,`E89qr' );
define( 'SECURE_AUTH_KEY',   'wFKt1Ip$EyeMrr>ob<IvVGmGc6tt0d*0<YLB*vR&5(a8={1Ab-|+y<?NX&e5y0EI' );
define( 'LOGGED_IN_KEY',     'H++Qo]f.lAiS*Tl>Z#,Bf0]gng 6*PFz{^nKfDaFkPd_b*?1GT#+YZ?7I=ytDJ58' );
define( 'NONCE_KEY',         't5zMQFExp0fg%2mn.L3SEziQ;-&JZe{F*1ZmMD*m*//fkt[c-IFfhqbZtP$`Izm.' );
define( 'AUTH_SALT',         'PnvA~<_N:`lI`}R|<x0G_kbD;7ldTr[dhjeKS6!i@,^L GiLCHD.]fZwOWjJRq49' );
define( 'SECURE_AUTH_SALT',  '?bdSn|ai1!s_h%=PA@`(m(HM|Y)_Y#G(5D/3:oaLr)U;NdQuOidcR{]9vq0=e{P@' );
define( 'LOGGED_IN_SALT',    '[km$9GJ4bD~<5&A-bd&//M7/ #r4ua{Ak3>z+=Pw5yg<.l+zDynpq]H7a]d.C$wM' );
define( 'NONCE_SALT',        'kK9+w;u7#TFnxB;&txeDsg?[]-/#B/w:d5#X<y-*q>O~Lf11A,oF]X6]x_<PJG8m' );
define( 'WP_CACHE_KEY_SALT', 'd[EX+:9=N@lCj|C(lK5LgZpSV!D7yL~jf!q!/TXYY6846AlN9MQk/2u4,KM&TwMS' );


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
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '79d20936718854f79011ff0947e3473e' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
