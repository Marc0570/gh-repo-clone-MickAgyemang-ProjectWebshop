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
define( 'DB_NAME', 'dokado' );

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
define( 'AUTH_KEY',         '>BKnf{bd0LyADT}@AC*$ 5;?l_F]]st>P4#mM-Zcx}~z dz{c0E$oh5gjSB Xrc!' );
define( 'SECURE_AUTH_KEY',  '$NcE^q3*QoW#EdY*g&dJ[J-%]]cIV6^,}Qel6~qfkhZQ X3$?hvQc!bx4Dln`t6L' );
define( 'LOGGED_IN_KEY',    'F~}yzYE O8Hd]?/Po+y9OcDs+C<T{Q$YQeK{J*iax6~%>NlB@}s{o`p<R`*1s<J:' );
define( 'NONCE_KEY',        '*>-ua5vy7J;}W42[rw*XQNa{/7UuX#5E?l*1k{J|0XY/c-9H[T[V[ b$9vf$EKV ' );
define( 'AUTH_SALT',        'FFoWF3n;t6avBIQHZpv_p%0xE;`4/nq5Iy2?sK^FO}T+|EkcH}3]>Ho]E$O(A&{k' );
define( 'SECURE_AUTH_SALT', '{l,kI!e%;B6Ngd3.7+B$8@Sbf=<(Q5Z4o>G T6pi1w1s5|^n>8-Nd:/Qjk%d$#u ' );
define( 'LOGGED_IN_SALT',   'Uu9zi](*5@}JP}RO@3X.T8`j1Ng!k8Pl-YsE7&u2|9;Q=d9YYS5,1qoCsk?I6H&z' );
define( 'NONCE_SALT',       'M`KKKbv:VH{qq1zxZs{EkEZ6r|Q]JQ1+^,~L#J&3nUyF-Xz9,;Qtu1U8fAu;QEi<' );

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
define( 'WP_DEBUG_DISPLAY', true );
define( 'WP_DEBUG_LOG', true);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
