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
define( 'DB_NAME', 'brief_9' );

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
define( 'AUTH_KEY',         'DW|@Z=U(pn3(JJK*LA2V#Rw-Q?E+|;N-C>ByS3LWlkMx*zMO63dIAz$ $I-b]t[A' );
define( 'SECURE_AUTH_KEY',  'jgSMlq0Pp-[#sHv.Yu_Nl009MyR|J&%iq!-oT1$fQ-&IYj,_bCMTvHNwsAt*Wzzy' );
define( 'LOGGED_IN_KEY',    '*`(C3[ PQUF>8`&=9oOwUeIxwv%K~ @KDQv up V{`#9_T(G36p ]Y`~m!aWXi?L' );
define( 'NONCE_KEY',        '@ $R)oxQT{#6LX;s$dmu{J9Xb0eyX6@?y;X~WW)gYa+yHTZ6kt-5[&>5IewUGCKQ' );
define( 'AUTH_SALT',        ';uhH(?k*<$!)`K9.W$Xp@H5r!yyQIxPo:<eR Pt^4C&Kcj*0r&H:A/q}7?@?j%td' );
define( 'SECURE_AUTH_SALT', '7W~suAA/80w/4|y,wRN7f1<Te_<MV(B7}y3r[vy% KDZgi)_k$iS/fMU<^UFDwes' );
define( 'LOGGED_IN_SALT',   '+4k0}uw0IJcD0e;yQIeq)z0KtDOaf$DP_umJ)LXe{az@KwIx&;o8 !khj+r0C4Pz' );
define( 'NONCE_SALT',       '$S.yowY_$]SfSGHmjHU hag17{+/>}-w 5:;E@*9Fomj`mR{!pgrCn@9C)Z$D53a' );

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
