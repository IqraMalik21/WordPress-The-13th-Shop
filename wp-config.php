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
define( 'DB_NAME', 'theshop' );

/** MySQL database username */
define( 'DB_USER', 'theshop' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress786' );

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
define( 'AUTH_KEY',         '#pWoVt<R^UKh#Jf(f`$Y_GV}gTs pE(p[iE]_D@,JH8so4ER9Fv<O$_w1_z/8Ssu' );
define( 'SECURE_AUTH_KEY',  'A-v&Q1qjXY7|`dg9-%6O4+0*?Q;Y~E+7}yqU=(MT%aV[zoUK>k-T-nC*`<$tV%6G' );
define( 'LOGGED_IN_KEY',    '[]!PW)1$fE:3;!Gxuk77Q>@Zi;M5c|gdx.5U9/H&cE-v*NkKPJ)J*L[>}@;d4rI(' );
define( 'NONCE_KEY',        'xoCN-q{C-yb[h>2SYAK_CbB#-|d]<O>x0V.GHIO4>=_V@jB{P0VqwzU+b/fM9Y ,' );
define( 'AUTH_SALT',        'B&d&| B4M&gnfQM(KuB>47/z{lHgGt,Rfc:a.Z[^Ekq1GoeQ/SW?&z+6RK>KfN*@' );
define( 'SECURE_AUTH_SALT', '4-iBpjvRB26HUI]QqgwKb,wX(rzO?cH6n;7_!Zxn~_{qt,bp~nut=AEdZh{|iZv9' );
define( 'LOGGED_IN_SALT',   '2-b4<O[V+xSMOlFcMMe&>?w]q+9RATGCq%aOo5n@-Ufr.a+ByCF7`(ryu1S@&Fz8' );
define( 'NONCE_SALT',       'Y7UY _6u1Q8:d9!5)|BGmx2({?Gb:@s>xo[wor!ahI)Gjy3W[A6zo_fJFFHHLh%y' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_theshop';

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
