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
define( 'DB_NAME', 'marcatodb' );

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
define( 'AUTH_KEY',         '.ch#R ]n-0RP408n31H]f<83jOra~wbigewb;!Y*1~O`iV4Yay /cZ_f)*Ls[Dz$' );
define( 'SECURE_AUTH_KEY',  '/7m*u{x#W/ov4 ;KTJ_Nc@6O} K50;j9:Zwrb]wLYH*/PM?ekRW>5vIo8F9.WksQ' );
define( 'LOGGED_IN_KEY',    'f*b<&e0}D`a^F>JBSvD~vaysk>up51x9?m5zAf:?Mj&cnF4)HMX`mUD?4V74k(O+' );
define( 'NONCE_KEY',        'RKez6,UC._)Pp&V=`Q6F-GSnO*Km3>^N|rt/_W%pd<xuUh_FWIyEtX3Ay*~[{#wk' );
define( 'AUTH_SALT',        'NEnf#@@taBB{[OCkBZ$ds!5`ByCAoU k:JOlc]?5r*]NzVz1znkfIG&w0w*Nsq?:' );
define( 'SECURE_AUTH_SALT', 'I|]-+S]U`e5hD)Y-+*Ec7;UX}Bt( kj/PEEv8>I@7CakJmSbLG@U,zp[|/Vla-dA' );
define( 'LOGGED_IN_SALT',   'ka<m~av0jxP%z:NO,F=9PYK%q*g#G7% kv}$OuL/_mpJ!U&[KMigi0J|V{r2OIE)' );
define( 'NONCE_SALT',       '-o|`1eQ*M)&nZ!]>} Y(cr^6-ugx9GDfxp]jkdSwoyb_nI`~&5x.S,`OMa2qF0K;' );

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
