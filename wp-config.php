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
define( 'DB_NAME', 'tiferet' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '27Ch4v3z' );

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
define( 'AUTH_KEY',         'JfpvV40j8buv{wkv4=d>Mx-gf:XlPorLlCfbxxHY{cG1:?QTT90yd>:l?X`ZT$H`' );
define( 'SECURE_AUTH_KEY',  'UFYRYCFM4~!c6FOY||XWWD/-oT!^>m?upi^7J(3]7ycz]&y>#Ww@v6k}FKk+]{Cs' );
define( 'LOGGED_IN_KEY',    'B6YH}+GOSiHj+O6BB3rP.65|FCX;vrk|9bKzK4T7O6$./VTO2!(}A>-PJoj^ro8-' );
define( 'NONCE_KEY',        'RH4//66Z*6e:2SwmgO.bQ6fxUD )&~~Y1Wy?yy7SDJ~3e7uCw_V2k>RhiSZ_ON=<' );
define( 'AUTH_SALT',        '(igofwof*B?r&%8hyIk<UZ!dHt0U3l3:$R4}vAsyq/i65q<sLRPu;N:r[N1|w_5K' );
define( 'SECURE_AUTH_SALT', ';RSB:5hx8?Xg/ysS6}NI%f5zca~*+Wr4a4YBl8ZTXmp5$h3dh5pk>RqXT$rBnUO)' );
define( 'LOGGED_IN_SALT',   'dU/)IU#B7sDUKb^jF+w&ALAq#/6T/%]g&H>SVaQP@Y?l9?ZU4!p0HBbali+o!tbl' );
define( 'NONCE_SALT',       'k;8(!l@3`$*n,D;cypu+k<kmKjR(:^o_J;(hy=tyQ0F&NO`MWX/^qz5F5D5bir+)' );

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
