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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '%5F8eztu.k9o)vh@Bff*n;+>-Bg`!]>+6nxK)&47&f6A$6gcqDVGhYHdyBZByGp|' );
define( 'SECURE_AUTH_KEY',  'vlFN,`O(4Udj]DSdF5BkTS#ddat>3QCGrB?j55,_BZ/%;!.2y{.[w]kU~?URS_Y)' );
define( 'LOGGED_IN_KEY',    '~ZC6>QND6_SMBVzTSB.C&QcW J!C{7V:ulr)n 6I@ 7N%ce(@jbLT3Q<+q?AeO)a' );
define( 'NONCE_KEY',        '.<RYu)OIW>.9+#Z#1=]Ozvrr7i!&)+V5t}LGjhX#X6=+KiS?,[[s@lC>V_KzcP+b' );
define( 'AUTH_SALT',        'iE9Wn; @tgI2ajPkJ7Yd0.FAl%1~^{_Q0Hm!5(J~GZ`nK_Pe~e%=iRNOTd13?fx(' );
define( 'SECURE_AUTH_SALT', '^nDtr{Q)H.^<<H]r%Iy}op1urhi98IVc<},{TS?0$h7xE-SmrRUr<E1B=-[`9#bU' );
define( 'LOGGED_IN_SALT',   'HP#<deWm.pKO _%PGJV2&.sVI{#[DT=x^k`xID+Mbk|*1[8#q8KH6c,G$*QQfbWZ' );
define( 'NONCE_SALT',       'S2m~ApfM*kU/n6&Gpt*^,;3)Vil.<ZxyWF1LKy@wa/lC.LQf24J(DIMb,Zsf(a(i' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
