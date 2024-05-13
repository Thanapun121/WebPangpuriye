<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'webpangpuriye_db' );

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
define( 'AUTH_KEY',         'qO0lAX~z_XrPP.(E{w;G1MunBR$PB:u;UbdXw];`9N1D(SS)1Fe< wvwm#E|awtK' );
define( 'SECURE_AUTH_KEY',  '>OiLX]-G{m!WVzKIv6=I-N-E37oyK0QSbbn2u2MtN3?lVr4[=IOj+QjfcSN6AB[/' );
define( 'LOGGED_IN_KEY',    'P=cqi6SdWH3w;IbdPfnMLXYd#b?oj)8_h)lb!Xj>7<,8]]xJ<@46*FO{U_ zj]i]' );
define( 'NONCE_KEY',        'fu69Fu]g`E!/Qij/*zEo)gwVx_|}0M<fl!XK|jRZvq$:VY<A}*3Qye+8EZ]/z1Og' );
define( 'AUTH_SALT',        'V$f%xhe;3Z#t< -%?%GMz4WJB/H-,VplW2_xi=C0r WEm7E_XmpIh8LsR{0bW_)f' );
define( 'SECURE_AUTH_SALT', 's6m<+*t v/ngoL-tH;NfzRPiotdjO_r@uH0aYvRU.#A4<c~BtldaCbs0EPztZ@ht' );
define( 'LOGGED_IN_SALT',   '7!y]~,lu2f:c@vT/(x4YGzwPf{15/4lo1o*; Tt9cAUn1vBMp`A}W0$<LLa_ 1Dv' );
define( 'NONCE_SALT',       '[)~:&]5y9%C y8}tGc.mKh4nWu>U!w]u]0v+9;Go*3. pO.~}T=TIFE*]:v}z)B!' );

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
