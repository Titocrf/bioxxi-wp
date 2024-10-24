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
define( 'AUTH_KEY',          'SNGTJY-7lJMz^tf=nlvNm8`EKkmN&!DTxQST1r1v(sDT@T7;<}cfTdqILZ47Bm 5' );
define( 'SECURE_AUTH_KEY',   'Ai=s<C_bXnyVGg}HB3Pw% }PDTvR)`=#!)ljC|#2>Tq?) Ih4cZd[%WK[K9hVVQ%' );
define( 'LOGGED_IN_KEY',     '-%_@:Z hQ=vj+F;,7p8t?B<SeP(0co^vlm<d1tC6|{kN< 9^e6AMJK%HLl-+w1]-' );
define( 'NONCE_KEY',         ':9`6=~[+:1aXx=ctY^wx^q$U?Tjj,?gf;SjK3QBw;VyIFRUtU{LYr&AZQ332Rpdv' );
define( 'AUTH_SALT',         'JQ(DwCv>34Gh/4ZD`k>]W}hf1ROChIU?5W7cMZ.LY4$J#y}kuiZP?T$dM9ZY;)cV' );
define( 'SECURE_AUTH_SALT',  '!l&3:qtd$ 6OrbgEJJxIz&atH|H_)02ij`{W,uBZAi4Ca&dLhRrxn||n$h:A0o]:' );
define( 'LOGGED_IN_SALT',    '-[9X)y`M7S4jnIf6*-9L#=zvB]|``||l7L:Ri)m=p0=dey1 xO#0[6AlHHqp^~W3' );
define( 'NONCE_SALT',        '}TJU:MlK}QN?x6e*Lnz(/EmqoE:*L&_~x`=RWmWlG|L9>O0&1W%~&*L[!YXPw+:v' );
define( 'WP_CACHE_KEY_SALT', 'BGWGjIS+jM.)I$0us3&*3cfrdAZnX<cq)j5i-Sy*y28I_gVAq]AU)w$`47P~nqTP' );


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
