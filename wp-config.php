<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'testwp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '=LQNX=*rYwCP#n+z?UfSr-kKJa4!)ldo9n9wC`rRYSy~oJ4/,p3& 4p9F6C o(sC' );
define( 'SECURE_AUTH_KEY',  'yO9g6-I=bS2H`u2TU-}oM[9Lc@k7~`}JiRfDxDfCUIu[J0*97O[][c=WsAERo> }' );
define( 'LOGGED_IN_KEY',    ')fe>`fOTp%L(c2+ewn!Nxov]y4bNBRz,^gA]Vp~D24cM.uQg~Dybt+*._Z.X][8a' );
define( 'NONCE_KEY',        'WQE$LbH}@_Z-KM-9Nz< 3Kvw>m=J]B+j=u{Ye+-;}Y7:U%F.ejxs)_*snq6>0ab(' );
define( 'AUTH_SALT',        'yItS7az]AsrxwXX&E-lcs8F,xqeo] wIA@i&Jw:^d<Kl.h0BEUgNq3]y5@9=%cHw' );
define( 'SECURE_AUTH_SALT', 'r]jKSzS^Shmbd|CHPQg;CO{p:[%Xheg?,t0C0{H8+^Av1TIH ]J0<a|n0(vw>JMV' );
define( 'LOGGED_IN_SALT',   ')f[?)>1|`;~)#YP0/W^|t?pGb[#<.B+Zd9u{{,:!4+:|Xx~z!`5bJ[OwU)e],f H' );
define( 'NONCE_SALT',       'b|- OMCP;s##5Y1,5{{CFf:vCTyW-VG!B#R.Iz<x]f3[ig^*_Ktg_sye_0QYXoJ[' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
