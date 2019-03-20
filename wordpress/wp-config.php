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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/Applications/MAMP/htdocs/wordpress/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'test_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '9Wh$)UIWPt<6zLSin#}LE%9LL<2|M^]{BrrCH5N.xj_O`-i3n*~|C;$WqO)PAEX>' );
define( 'SECURE_AUTH_KEY',  'O)&o1Q3i~ibKIq#d<Jn:Cq,KgI?XQ$AzvvX522&O_R/9QR/Mlu!>ST:uLK~/DNVt' );
define( 'LOGGED_IN_KEY',    '|HD8^`KGuLJQX2v0n+v|7amfd;8CgZ yJBQ=884&h<.AWs!/bYS%Estj=MfXPE_^' );
define( 'NONCE_KEY',        'o~Ra)zEfM/6;6PXA3A<CGKQP `8(Y;%-C[E0QjBH6Xj abO=}Eu~Er~Us( UP.;n' );
define( 'AUTH_SALT',        'jm` =UCM3=4_N-duRuzMMCD2em $P# XW+@29$kF}R92J@DowL4(}BH2mRr^JYus' );
define( 'SECURE_AUTH_SALT', 'T/ +t-?a^m1L]zplXTADp+(Ul}pYrwRaLcmbe/[Oa!ZQoFD_}T^(]~:@vc5|NjG{' );
define( 'LOGGED_IN_SALT',   '&3g$5n%lrE>(9~[lti&?.;zISwN0097TO)8MiQ<akgu=|&iEt::Rz/;}[p&W67Zl' );
define( 'NONCE_SALT',       'wVPAc?~o^ {J.!:sK$l $H8iO{U-TFh&Sw9nzwn,@Nj0y(sS,:=yHuU$Z]HhaM0.' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_test';

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
