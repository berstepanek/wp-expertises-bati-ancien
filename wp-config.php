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
define( 'DB_NAME', 'zeqa7903_experticesbatiancien' );

/** Database username */
define( 'DB_USER', 'zeqa7903_admin' );

/** Database password */
define( 'DB_PASSWORD', 'bd_experticesbatiancien123$' );

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
define( 'AUTH_KEY',         'R--ME_aA:#:Ei@WgFg#vc5qrEOBDAS-].k_?Cv`.F-*JFB[T5cLOIqsgP=&=I{0k' );
define( 'SECURE_AUTH_KEY',  'xT}MZcSSrzDu@?2A}@!IFu=^8ToXG#t:sZJl*,L;7Sz2FM|aR#-F%C0v:Mzi<.[x' );
define( 'LOGGED_IN_KEY',    'iCTrjjEHN`P?[o&3|O~>YU_PUM]ppZP~~|npHH`E&qkadM)/l> /d|6/nw_EIw/!' );
define( 'NONCE_KEY',        'J(FGUD@vh*p-OE-f+j&.c1-Z)U8I*L6|7)2GPD~8?pLBf=0>nD3/P>sy[C?qBP13' );
define( 'AUTH_SALT',        'UUy-9RJnGmOCBihWqI/Xwl#`NUOp-|lo+~jucu5As;gK[?!?>*=/q~H*dd}oAQpK' );
define( 'SECURE_AUTH_SALT', 'v2VC 3l%PlQg-8+3YN870$}:IV~mj[C:q{N*?GIZ6u|Y+Ca3aWCECI46D+>XmmtW' );
define( 'LOGGED_IN_SALT',   'Hc#<PFI&pkgX1z`PNHO(c}G*bM[C=k?:2r)w44o}_5V.YtY`r_$VM]KK?6FsLr-J' );
define( 'NONCE_SALT',       'eK2yP8:^ 6?Qm*-i<qtpopV:%uP`tr(fR_/|/KO7DM2PTeJt1Nyw%p0[+Ujz% xY' );

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
