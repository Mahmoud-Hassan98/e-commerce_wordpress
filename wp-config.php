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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         '{x svQ{%LIZ.;F@7yp^@ew,8$XCZDCy[5?8NIG:++Pkz*5a|^@!c&9ci-q$dyY?F' );
define( 'SECURE_AUTH_KEY',  'jD_Zj-cUIZEV9#76pZJE{?}g5*x5rvMb^UA{OSDA?b54rT`Ht[~X_Fenwue?hlsz' );
define( 'LOGGED_IN_KEY',    '{P+(_0WNa5~y,G8WMFB#v6>*19my>({MN&s{o?$W8?I[<gv#+T6GR75i(}6{l|#;' );
define( 'NONCE_KEY',        'B|Ef$D*gc6~@d#631/@? Vy(/*%E+mGD%@Q,FNofk!jiO|CdIj(u$u?@xI1.,nDX' );
define( 'AUTH_SALT',        '9>:1_(Lv3KlN<!Ke)w^Y9q~hB H-GLv9v2f!x@j*&&htdOGD:W|0C:q.<9^;9q%+' );
define( 'SECURE_AUTH_SALT', 'o~*#M%B__D`vvIFEzKl{F*/U_z;p|-y+kd8n4ngYYHn_tXU+%pstkAXHH]o-%U]$' );
define( 'LOGGED_IN_SALT',   '$d;i(boZ$fH<-hafZIZS9aJ`<C|I.2/|4$T>-{7ES1mR L jSBTieUu.XF}q#!g6' );
define( 'NONCE_SALT',       'gRHo%,fA~=2R: |}4I&C~aRsYK-D_(9IHp|+@5@QEp1!zJ(s(zo=Ri*m#_6rfL+c' );

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
