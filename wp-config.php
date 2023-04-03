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
define( 'DB_NAME', 'vitrine' );

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
define( 'AUTH_KEY',         'OA.44&wUq{~zDv6*DlVAzWRaB<W[a7Rh`fv|L?k-t*BPRzRW@zx oU^h#sth1s+_' );
define( 'SECURE_AUTH_KEY',  'wR^M^3JOLh<5%ge<qW(QLie_DX-E{,(9{[v;6HSAwD$@TRU,_qIi{.9OM.xHqCv?' );
define( 'LOGGED_IN_KEY',    '%J2m ]Oe6iQTKifzZRmD4b4)]iv)D[W!6L18:w*9M.e_Bg~jY)TnA+fe%%nP~SDI' );
define( 'NONCE_KEY',        'GA#YzEgP!zR7I593iEg&CfDNNC,Rb&ydXSmMUkQPVeq)A,Un#ao^J7M8$;@-PSc)' );
define( 'AUTH_SALT',        '@8Zm346q3$v,E^!G}=U1*5:;LFE-wq(4,:Wh`Lo4$>$nav9*)JSP$higl!83qKI&' );
define( 'SECURE_AUTH_SALT', 'h9K$09MEH23f&Zb~x8j=(#OVx,(y3t_fJKZB%rrsVQfUf{+s.S_`,=kEG[])|bPE' );
define( 'LOGGED_IN_SALT',   'Og2]!:O)t*?|>NZ75q1F~w7BjV+i:Cp*`47tdOm$~fp@I0$E@1FU$v;1K:=6KUUb' );
define( 'NONCE_SALT',       'dL*!4QM{_!?l)k3B>5s<tC,PxRyK_X<pQ}t]x`CuE.c8}g~,=:MKS+VG%&[W>mM`' );

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
