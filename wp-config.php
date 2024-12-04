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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sinh-blog' );

/** Database username */
define( 'DB_USER', 'sinh' );

/** Database password */
define( 'DB_PASSWORD', 'sinh' );

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
define( 'AUTH_KEY',         'biJ!-Tk9iZKLjn[{m[HKDt,s`]|D:r.Z^gkL&RL$3f~FPOMh{+R28P/_::*9L `S' );
define( 'SECURE_AUTH_KEY',  '>p>QeuIV4-kmP>rk@t0>;KB1A#N5q)bc3@(.H/>jOA]>3DI=h#LhT}N2<*9d;`D#' );
define( 'LOGGED_IN_KEY',    ')c5|(4!`n&{(P4:82[Zj,5Pxr:+sE)M:xl#W~>+8(@`%m^aR8=]2`aQ,;G-1aA87' );
define( 'NONCE_KEY',        'Z::]($y-lYIz$4%c19LsEp|2$b>HWV9No!X45;[03Tv6g#/NP=Fv<p_89wQoM7jZ' );
define( 'AUTH_SALT',        ',m9*.M+!7aQuJ97~bMA`ofR(K@}sZ6c{Z+!}(fBLc<d/~6m(sK3PZ(p^ mo?FtBG' );
define( 'SECURE_AUTH_SALT', 'f/NsDNb;E#6gqT5t&Gh^j8e}aRVk{f>F*->M6?<S.k&v)wfXHY.]=YOWeYVE.ZV}' );
define( 'LOGGED_IN_SALT',   ':L64<@m$~udI_&!=>r7|/[*@I8QajIomo}hMdb?T(UgF[M>EQrtxM]VEaIdE$fqT' );
define( 'NONCE_SALT',       'pB~IH?QC2HpUZ?eiG/>z!GxI{:N+e/m9&0QbJ[9164iv,MRLk~>ka@+ .}~LAmq.' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
