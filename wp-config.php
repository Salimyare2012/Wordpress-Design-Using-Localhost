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
define( 'DB_NAME', 'daauniv' );

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
define( 'AUTH_KEY',         '0iZD:_qEb+%L>=Y<LR&?A5}?,M@wB;<1pbK#sr,8ah`v|#7fd3^,Y$6Q~7,HPOPg' );
define( 'SECURE_AUTH_KEY',  ',Q^kBb[(k{iV89tTE8;oQo8<x&^[.`F?:(k[ZM0n#_0ya }7h@jmn<KXU&j`<wZM' );
define( 'LOGGED_IN_KEY',    'CLC(.Uc+(b?R+f2L&==z6X$Sz xSHHI .{!t9)hB2w^hM8Nxy3{pCjMdiJN<ZDek' );
define( 'NONCE_KEY',        'Iuvjr~zIhWiCO$BQ;|)iq9Dami{XDtd|=xG!U?eP<I[%U+@HgSyUX]~P&>c !!M ' );
define( 'AUTH_SALT',        '$@;~%/_pf9y_ 4*+_g *I`MG;+Fh;jF7yDph_(E.(9GKG~zT=qt]L<u^@5;]oS(e' );
define( 'SECURE_AUTH_SALT', 'r7Qf;7s)oj9ha}K?.-X;JG62<I3S#y$|QC+b}w_ga7-=@}vdluV[J)Il.~=l%&QW' );
define( 'LOGGED_IN_SALT',   'ntkS=;}cMk2nnr]EA ;GI@O4u#?Ger2(9nF!iFzZq?*Ki2!roeD)j $=-?AXp=Q,' );
define( 'NONCE_SALT',       'k=,}T?[oRXnD[49iMr|Ox/G/)/xdvfC%uf0JhdoB, ?+Ot)(yx+;kC6b{D7Bie&g' );

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
