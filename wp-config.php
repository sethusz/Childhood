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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'childhood' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '8%s?j]x!#$ix]M-uG5KR~lXGr.t``EMtf,=S`15aTZro|I@FmJ1:d8puPqs>A(H2' );
define( 'SECURE_AUTH_KEY',  'uO)N[/Zaf8Mg6`yX|F)Y{@ao8{zt9wsaJ^ zO?(Ddh$66_Z0XUAAxqU~G6cST@am' );
define( 'LOGGED_IN_KEY',    '}yV.j~b LD-T}EeL8^,)f.k6S&!$KVQ5j%*>x.xE);Cv92y3w~jGH@bsQI8t@K6w' );
define( 'NONCE_KEY',        'xI(8K;uiT6tB;|zYb0/(&<quDAwCFo0A^5DnXI+0:p7j&d@:,v:>D?kFlx`V!/:~' );
define( 'AUTH_SALT',        'Zh9g$U+z%#g`mBi&eRE(yGMyTv8}{/:fBsl<J9K`fW|]<BnY@U62J4;fE}ksV5`_' );
define( 'SECURE_AUTH_SALT', '5I8z-Cz(:=fK`C+C6}Ovo3M;=u/i#2p71.#(i=IcJ)PwqI<~w;kn1[f(~nT8G+lh' );
define( 'LOGGED_IN_SALT',   'moxi<R >az3F2O=1x35$rFk@<]&4XSK4,NaQj)i}:dZ,dm7fh)vrrAaAvTb>uzl3' );
define( 'NONCE_SALT',       '>5)~t@qq=I#tlr2/VVZH}=@+o#Ub{-JsFn#,R5RZ8IK[`(|~FqI?C(q4@_2nb~fR' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
