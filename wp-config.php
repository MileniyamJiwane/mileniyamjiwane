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
define( 'DB_NAME', 'mileniyamjiwane_db' );

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
define( 'AUTH_KEY',         'TiG-(4E,><wmj6d8D;4{8Sq<,(UAEcOB0H)$~z$*zEvW7UcQm`l(eprS};Qj1*z8' );
define( 'SECURE_AUTH_KEY',  't>7/BtlBiC]rp`27X2|S|d7rqb^W_[}c(P^sq7Pk)HBd%%#!fe?)&PRN(cs=XF)M' );
define( 'LOGGED_IN_KEY',    'x%VkAPh@8xCe U`HaE#JLT}S5neHuu81CtlFW;Dd4kv?g!h:Gi0>72qs4|B{smia' );
define( 'NONCE_KEY',        'Ux]qH4(;)r0tEG_o86a&3sns~M:/7a%#:NMR1BS(0^Q%ohd;)4anlqY 0@>Km>?.' );
define( 'AUTH_SALT',        'MmC;F3K}KQv zO5InN9N0-*]dZ$lKh7LrURTwMY~g,G!>,UO6B/`PYJ9/Sza]jHW' );
define( 'SECURE_AUTH_SALT', 'BWlYZ{P3dkqsx*hN^f&!_6M*]kQOf!G0<in,(u[{dV-r7F6~jp&K2Hf@-ab lS[F' );
define( 'LOGGED_IN_SALT',   '5K4H2=i$$v`h0}sEI;H6A+2fkQ(,HVD`UJB8kd{E5Ngl3O}`%5`u/LKqxr4ig4D/' );
define( 'NONCE_SALT',       '<NQWQYw+lx?!os_48.uab(CJpDc];aO]Z;%+xX%Qt(c;u @Ii[?d;1cZ1RR<_Z2b' );

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
