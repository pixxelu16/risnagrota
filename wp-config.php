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
define( 'DB_NAME', 'risnagrota' );

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
define( 'AUTH_KEY',         '=nq.W$SoC);XDYM`C<5V8He~LCLB7`7s[Z@!Y><DW-zv}|bWlsuu]JDJZR`xAr3u' );
define( 'SECURE_AUTH_KEY',  'F@>S{ts.H1)$F%oe6PF@DYX^X[ms2TmFEKni(iIAi7aZaD/|id]:@.8E<Ncu<NQ.' );
define( 'LOGGED_IN_KEY',    '%[$R,&4FDe3quem2>:+snTzPD:izY#` 4ro}CxeJ!dkPl/uq~ <Qyx!Q2BS(S#V)' );
define( 'NONCE_KEY',        'C0!jX38o5u`^2._a~)e6W3l>?c2DydHlPawopQUbU8?@93cLn?BxX,4yW>mc 0o]' );
define( 'AUTH_SALT',        'e4I%TJjxCu06)t^h;}~o;@+F0EUpjCiRl`p4e$#W4J];K[lnDj1x+3+C*{=.p!Uu' );
define( 'SECURE_AUTH_SALT', 'aSNZ]AmT_T6,ah+<cFW uwqR=FMdjwK3C.3_8uo5a^qL~[<|^ks{{=o?X^WF*W,4' );
define( 'LOGGED_IN_SALT',   'cwaoD$)7^YSEwAHW,l6j=d`wTX2GKy-N-;A4.6E!,%8Zf^`pec/8EJgR;oSGm?Tc' );
define( 'NONCE_SALT',       'ecJw8O^Q.^}(SxRsqPvGabX5SCr>hTBW@zy!^o|jV:4F5Ob9^F=z@M2=hCu|.LTJ' );

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
