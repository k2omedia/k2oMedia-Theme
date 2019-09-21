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
define( 'DB_NAME', 'Mike' );

/** MySQL database username */
define( 'DB_USER', 'Mike' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Password!@#1' );

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
define( 'AUTH_KEY',         ' 6.lf_do}a{4A4;GeD;byv*wUBo(c;YUEYjP5F8~Q5:;Tt.HN$tN CgHaw14rj54' );
define( 'SECURE_AUTH_KEY',  'E?mgR]d,*A%BC(8jB2z>0k&X}Ypwf35Ha;zl=^kC D4@6`9zums3}7yfv,?<~obR' );
define( 'LOGGED_IN_KEY',    '2js:!-Qxei#+8u.WnqVRt=HUFR!@*rYAi>&t..|ru nauQSmQucK;6wi&o*=etjV' );
define( 'NONCE_KEY',        'JAnz_ >~4xH)hVTv5E,3>H_t7j`0rdalJa*P<deftE$t^#?Qm[>V|<1u2xNq}Jv6' );
define( 'AUTH_SALT',        'i$pL3g?Qtn.%|Z)djovY)`<]hJA2;>||TnN#2K$85%nXe7A^SvX{3:>Ul&uxZ0]J' );
define( 'SECURE_AUTH_SALT', 'C13}EsP(no3^}@?m6|?Y24h7Am>wt.8b-jR^0f8JcBJK+g _KxJ&g.5%|HUHtn@*' );
define( 'LOGGED_IN_SALT',   'kerC~:Oxh/8X8*UdjtSzzsyC+n8V<J{]>9:F}Wm@sYz@aK=%<;A~r=?ZXG8DVtU2' );
define( 'NONCE_SALT',       'dxEtbga~RBXr{YY9<rd5 6%P&% p@.9+SOdNde.dxI#2+((30]a#,XZi-Cgp~K{Q' );

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
