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
// בדיקה האם אנחנו רצים ב-Wasmer או בלוקאל
// if ( isset($_ENV['DB_NAME']) ) {
    /** הגדרות עבור Wasmer Edge **/
 define( 'DB_NAME',     getenv('DB_NAME') );
define( 'DB_USER',     getenv('DB_USERNAME') ); // השם המדויק מהתמונה שלך
define( 'DB_PASSWORD', getenv('DB_PASSWORD') );
define( 'DB_HOST',     getenv('DB_HOST') );
// } else {
    /** הגדרות עבור Local Sites המקומי **/
    // define( 'DB_NAME', 'local' );
    // define( 'DB_USER', 'root' );
    // define( 'DB_PASSWORD', 'root' );
    // define( 'DB_HOST', 'localhost' );
// }

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
define( 'AUTH_KEY',          'TEYzjsA l6*;eytL*fOT=K6 (Dlt,_cf/Oq~6Yq#XQ}4n8bU`drX{;Z8>7Tm>CF+' );
define( 'SECURE_AUTH_KEY',   '6c^ppn#QcKfc<8~x5I[(U{6Yws+n{u={{s7m!6H vo,.c~Na<}c9XbdE%#UEME(V' );
define( 'LOGGED_IN_KEY',     '#GngKx(q!,P(G~Xu[G<%l2Cq<JO+zg9z&BR*p%U+3^[/XicC`UaP(zI~bZ-$G_sR' );
define( 'NONCE_KEY',         'iM&*_Rf@:#;b&|4H42U<aaCdr`oMG-6A[u&nj<AcA+a]a{,R|PRi^^0%WFE{GD,]' );
define( 'AUTH_SALT',         '!Y0^EdDZX!i.4q2pzo`&U!O2%~1a+g4z_qG&S0`OlV>4{!r-j);R*GB%53F0GmeY' );
define( 'SECURE_AUTH_SALT',  ',ir4fr:/J49}g*2Ql^~)hBSi/.3+P5kH{Uez|xONKx_G?,@sMzmw!;uXr]vyY+I{' );
define( 'LOGGED_IN_SALT',    'v/@!D6 =:5J4~kRSWeM#*r,;pN4T`2IGhRO$*k0OUhmSzU_%0eJ`1XDV-*>#0`d[' );
define( 'NONCE_SALT',        'vKq8b#4L37d=)`f#W{_,tyIBQ5|}W%&+5;?X>4 5z==k&[geOEk ,FN+(0CXml>7' );
define( 'WP_CACHE_KEY_SALT', '>V@eN>-(e*rJybYg!6TMkVMGw-u_o8Ck{gBr(iG=WRcy.~I]ApJh~|;3h5rShaIk' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
