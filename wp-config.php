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
define( 'DB_NAME', 'lonmawp_ar' );

/** Database username */
define( 'DB_USER', 'lonmawp_ar' );

/** Database password */
define( 'DB_PASSWORD', 'lonmawp_ar' );

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
define( 'AUTH_KEY',         'P#$51}}:5<)yjR]f!pgmrfF/gE!16yy&4n+DZ&7q.[DkDOUO:`G9/& WYued!X(Y' );
define( 'SECURE_AUTH_KEY',  'dBf9V0Y!XPZDn{gcE4DDW87>XHtVYb.m>w!178C[_6.Tla$UWCn#8^<yvn)8ti%f' );
define( 'LOGGED_IN_KEY',    'K(AZ$UeB57?=w&PMq>.}jq#>VPNcnz39+5Dwe>hfh3]?<h&Z/!hRE3G2PHH.DPP?' );
define( 'NONCE_KEY',        '#VG.Qb{2h11d^l|=G],ZdzoC!HlN[7}tz(4Z dHMF(4kZiyn3FpGtfnq)w^oln9k' );
define( 'AUTH_SALT',        'Ac]^9]J}Q%!cFr8PLk8tHc(n0?,+n:oLnzZeswwqN i$S(KZ{d(}pZN1Qkxz.TwE' );
define( 'SECURE_AUTH_SALT', 'D#E~8fIcNzqpr~NV9p~$xErm/V_$?Cf #*1Ayv]fs8JOV8Gnw4dxIACee~le2Ukp' );
define( 'LOGGED_IN_SALT',   '`@%yHQTg;i`cMCQwD$l-2WJ^}qiNlxR9!K6eAR*[{6$Pf^{:;@08{P%)]gGDC>Eu' );
define( 'NONCE_SALT',       ':3{?oXUrOk?yk? 4~[Fj%0khx(Ix7vMscA3+i$_4AE?2 _Nl6J+vOR #k+8{touY' );

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
