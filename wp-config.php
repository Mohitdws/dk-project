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
define( 'DB_NAME', 'dkproject_db' );

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
define( 'AUTH_KEY',         'xb!KPUFx=?z<gVHJF9%*cGY|G=7s-2W]F %V[<oER>/Is,j0_YD>jUMO;HJWXI[9' );
define( 'SECURE_AUTH_KEY',  'VxR?^wJV<$h.48zB3-3*SHyACse9pcvuL%|&ZEyZ_HT#%%U(Pa$dGcfb@6WPwNv8' );
define( 'LOGGED_IN_KEY',    'Ho3w9O=!,z+Im-~*#5(91nqYm!Em*nfaZ#ylzGi$fbJIh25d;U?+ALK6c~21y+`3' );
define( 'NONCE_KEY',        'tdo+,.J~M62pSTXOI%[%^SjCQ(TZWXneBST>CO(IZji>DLNg5~-qG]{syBK $f2A' );
define( 'AUTH_SALT',        '_N0UGHBR94k:mY/m||4Dr~QFl-OBOG2n>*4XI.cmlz4zYo&lBLTP?n|KX%qJ(J1(' );
define( 'SECURE_AUTH_SALT', 'RF DZ[gg4j!Eco#tE}oQj1wBwvPl<S<.E:RucX-oX{5vP]Lg(z:dkvd.n4U>~X>6' );
define( 'LOGGED_IN_SALT',   'LPZ$)K1&1n1z2H))M!K3=V_M4ukkS#XaNiAM65&#i/hh$W+%@]Y1`ht?]n@V^,e}' );
define( 'NONCE_SALT',       '#-b`*i4y;y^1JHbcgL]Co<vM=.82]$|#$f!nno)i]Z*SVt.2m/^XiMdJ7u(s`*p}' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dkp_';

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
