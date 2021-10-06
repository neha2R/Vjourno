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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vjourno' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         '2.l~ywBY+(^,~/g$rT3T8LE53Yd0`3P1+Ran;VK*<dB{10[Fb^XQX?Y^XNhzR+4Y' );
define( 'SECURE_AUTH_KEY',  '|f@U-|fC`jw|E;!+.JB!f[6n%jPC<Rg34 N!Ez<>0zA?=|dDGL/t).fhq +cE.hd' );
define( 'LOGGED_IN_KEY',    'wFjoK27PUlna;_{?i0B?jPmd@$,UjR_M}X~SM&;=}R}Uh)tF7>wM%Ho;Pxu@Xxfx' );
define( 'NONCE_KEY',        '$%?b8LY.|vo^$eHpy#t8uM.^ii@!w2.5z|sOC%:1gjFTC]Oq3rh,`@BP)UZnBiCh' );
define( 'AUTH_SALT',        'Uazi|?8eE)-d:3!sBL.[};N`z(;g6W(2x^--dNjYMq@J:F #$h<`FlDIe[d.j.`)' );
define( 'SECURE_AUTH_SALT', '!+FPx%J}#kuIKt#e4G=5Ar4-?IQEMy~96OIfiRcuc#bc_&5-LbO.CBKx]nDaJ/pW' );
define( 'LOGGED_IN_SALT',   'ZR>5EX~`uOMr@W|o~4kUy!U/AbT!Uq]YgIqA>4?-GmR<766co_K5,=pp@[|}vm|2' );
define( 'NONCE_SALT',       'x{2N,F_9Y$n[$N{8GF8<[ WjiVyXL%629H87AMNx7At8Nzzq]aLIL;NSV,pm*^^c' );

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
