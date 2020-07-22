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
define( 'DB_NAME', 'luoyang' );

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
define( 'AUTH_KEY',         '$8>2m,haO~(9sUy3Gd&7zW5^bx-rb!]Jaikh+TqCa`wN/r/.5NOYxo?jp[Kn8s2p' );
define( 'SECURE_AUTH_KEY',  '+M1F/e<6,AX#@9V!+0ey|Z*62zF]5FkDo[cf^r[;<KX6vbp(7s6^`=z^@J[yG,6^' );
define( 'LOGGED_IN_KEY',    ')*Fr5_k/~A21{kw_pg?G]{!g%p1F6,b qH(QXFpS6#fCDnEpOt~,g&foe|SjB8rG' );
define( 'NONCE_KEY',        'wvbF&]N$3S9g=e9753Is,[cHX.+C,;mn$zr &u}-5l$hE^ywqc`qTQrdWT[)u<*;' );
define( 'AUTH_SALT',        'EB@YE1,~qf#o~JG?0vvt?4yU<<-uG~=_a9s:<Rw%:35Pz;e!_scUCe^7`S@T|B-R' );
define( 'SECURE_AUTH_SALT', ']gO$bG,AwC3OXz`KddpY,)p?f>{8rkGu;+o>VA?Xs3oj#$R!AXBoATP&X3Vr/O+#' );
define( 'LOGGED_IN_SALT',   '#>cJ/:ax]5Bpn`}QAbZ|y)SUtmsWB4a{ydd 5l<`;yQ;)i?;|~aLu?3DD8lI~~8k' );
define( 'NONCE_SALT',       'rRJ))49Y}[+oB4wCA/NXJp. dyPBi^Pm 622BrGjD#:H%&wwL}{Nah@oe[(vi_#9' );

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
