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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'chines' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'da19d252b2770d8dd0bfbf6e06' );

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
define( 'AUTH_KEY',         '} 5 UI3rM{2VT[p{u4Q|BH&b~fnMw^BAG-Uio0.h>j$O`i+YaDOb]Qu>.D76YM:>' );
define( 'SECURE_AUTH_KEY',  '(RCo`hpc~@9f ;`juQYk:ewbx=+ygo5b1%+#;lfHl3-8[*$W1Jt`~V8Mw]~d|n)&' );
define( 'LOGGED_IN_KEY',    '$k ant/TY`70wAJB)Ar%6QSvAs?g>x$A+iPUV/GP+tW_JtdY(eLmQXC^7lvs(S&P' );
define( 'NONCE_KEY',        't$vJ}g1~8$ ~9`(0sR#zM/j&g9ce#loJ#vpUITE@=2KN/F%Ywhp=~W0H=doTRl$2' );
define( 'AUTH_SALT',        't{_mqnp`[jvxJ7R0;?:7|#EdxKk%P6CukdfWz7W.gmLP9+}z72b/0!X[_lhiaDY`' );
define( 'SECURE_AUTH_SALT', 'C8B#mzn./?/S!m|OIo$_ #h`^jstF$wI1DO_2{g8vc6wqian,u{)1Jyl1fHz>!?~' );
define( 'LOGGED_IN_SALT',   'nRa}CIi1&2p%[Kd_kH$}y2l~+W^ 5Yhj2wGUQrueBP,(YM>h$ST_,x,k(a]P7n),' );
define( 'NONCE_SALT',       '`}RTHFPJsdxL!8P7~$lcPdKdWG:Z:MW+> 0-s)n)wkeH`$:+ef ?W E!x%$uc$OA' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
