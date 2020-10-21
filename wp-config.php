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
define( 'DB_NAME', 'ritik' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'oUWGnYbunTZ)lh%xCX4_%0h%uiB:R8:3[8Pha~->~B/obf0Iur{pSc>kTd9{ku+F' );
define( 'SECURE_AUTH_KEY',  '7o%uF|%%23IO@Jw276fO O1#ho%[u?U]1s2D&N12iq@pXFFjMWwj -<)`oFA:>cZ' );
define( 'LOGGED_IN_KEY',    'U~$vrsmCwB}1Uaoq.=u;/DGp&?bUv)a9Up.fH/_6deC>s{1Vw+eOaw-I55d]+_xu' );
define( 'NONCE_KEY',        'BrEvjYkBm*W|[.ns/Jw[k3h$_2V guB-BDv)r{23Gaa{4@&&)(:/O:4M;XWV7tS5' );
define( 'AUTH_SALT',        'x-5yOADF&ECV.C[<_@@}!+gZhnjx=/ a3c{/jOx*y &@&7O-:uds6a5CW |mj@L3' );
define( 'SECURE_AUTH_SALT', 'Q0Q!GOBXFc}rG>3&_L&mvXzm<O?AYTGTdbe#!rt|.w}uj<H iwZrP}qk[,h%#p*h' );
define( 'LOGGED_IN_SALT',   'T*GD4z~YY^ID9<d#0m6C=^lHieLw(?a=D=[:gzZs@5~2>i!`Hm?bO}oIQ5:;m?JM' );
define( 'NONCE_SALT',       'psm w)fw_y0O9wKTlZ} nY04;E62s9N%(rZb7ZG7JN![BnZA$siwD$yM+8VNU.Zo' );

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
