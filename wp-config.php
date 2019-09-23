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
define( 'DB_NAME', 'woo' );

/** MySQL database username */
define( 'DB_USER', 'woo' );

/** MySQL database password */
define( 'DB_PASSWORD', 'aleman2010' );

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
define( 'AUTH_KEY',         '.%&4Xq9}5I0`M}j&I;ur4GL<qSa-;M^`vgFo`Vq`nte,1Ab9<1ux:SlKtK=2aOOu' );
define( 'SECURE_AUTH_KEY',  'CNt&b`k)Dz-IU+9~oVuGTZF_Opu#;zK_,+KQ7m|7@Vjf[o$7DZ=J.F<eg7Wu9Thm' );
define( 'LOGGED_IN_KEY',    'DM/r{1?<:D6UtKA-S>X`BgQb*Rz)yiH^O$fMgsTnr.J>Rc%t6T>Dg n7ATUJNGs;' );
define( 'NONCE_KEY',        'jdnjaq=r33LuPNM9r!(2MIig8|K(TSl w#pl 2`L;U&ulER{^PJ1yd;.u5AC}CPd' );
define( 'AUTH_SALT',        'plzkQcCJTp`gqG^ [b{^s=uakAI6 6j@?Sz0d;oH;`bj^q$9.O0f+3eWZyO/{tLm' );
define( 'SECURE_AUTH_SALT', 'n7C#F(@slQre>OG,wFnNrG{>mq 6sW|}t4m8R ?sR<$= xKk1Y{/,+idrBP4oJH,' );
define( 'LOGGED_IN_SALT',   '.kqklxvk+]ga8N*ZO&qu/rw#:w,z{<kXK?Qlz2JgKX[{@I_)j|%OOj3bCH$X.jc[' );
define( 'NONCE_SALT',       ' dilT#[WT$hujo|N]IH^.NZ|*%`2BXWm->2HD^j3|Z,n?n0EsmQ$DcP(kR-*R|YF' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'woo_';

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
