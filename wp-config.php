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
define( 'DB_NAME', 'mandala-website-testing' );

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
define( 'AUTH_KEY',         '|/.GB*=ymqN[p(7SGJC]Y9Ucz9AaXZ<=x(v!zu?%=^hmu=9<#9dZ?Sb3~)p{J[|x' );
define( 'SECURE_AUTH_KEY',  'HO]`EKQ~$e{}~%nH^Z5ALh:x`lNJ&7Y;,5~Q-32i.;MQ`WZiFCalbC$b P!$&^rJ' );
define( 'LOGGED_IN_KEY',    ',>0M|<s`9jW1V_LBj,acG{Yqa[EB<_)EHh}r$c,1Ocs}Dy1;L4OJ2<BV<sFe)z~$' );
define( 'NONCE_KEY',        'C_V;dnF7^ !<eY%1DpB)y7B=it7_FMsLef$+cI}3CN92j74XRHvVBO^@htQipwvM' );
define( 'AUTH_SALT',        'qykyraQ,1O@A5@-,?w&YyA?;c]+e&IGpMpc*s6JR$f;>aJ=H66?u{3@R}QAp/F(V' );
define( 'SECURE_AUTH_SALT', ')LDlX76_LgzdL]}Je)0xzUUk]j2l%Rfm(o%:M:dPhS_/Ra$!G,TaU$P8hk?CYA0a' );
define( 'LOGGED_IN_SALT',   ']2EF3jWY?EfaId$lLGJ]8U~+GiDyx%=iPMyQ$h~06|P5$ t7e<T9p |nAj4$8r0}' );
define( 'NONCE_SALT',       'G{H^IDWoAV)=b{U#vMRGwQKe`j;jUzfO/lf%g$7tdmv|+E^qc(vN81^UQ;!i#2~?' );

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
