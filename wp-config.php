<?php
if(file_exists(__DIR__ . '/vendor/autoload.php')) {
require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
}
if(file_exists(dirname(__DIR__) . '/vendor/autoload.php')) {
require_once dirname(__DIR__) . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
}
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
define( 'DB_NAME', getenv('dbname'));

/** MySQL database username */
define( 'DB_USER', getenv('username'));

/** MySQL database password */
define( 'DB_PASSWORD', getenv('password'));

/** MySQL hostname */
define( 'DB_HOST', getenv('host'));

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
define('AUTH_KEY',         'luU.|w WCu_q1$igvyRTgKU!k2|+lR6FzEOy=i0wj@owvV_-yX&KS8OHZ[F$k8R9');
define('SECURE_AUTH_KEY',  'n+/qz9zS$CpI!tLdih!#@]&|c|2CAiy-@hv_~(,Hgi|bQsc.xhZ5u<g9yl!q8:O%');
define('LOGGED_IN_KEY',    'IL#uOjS:sdsRyANTd)=4Nja-.%I/;MgB8>/?T@1EO=aqt#>p^!TPE?dCyxae-%h~');
define('NONCE_KEY',        'sIi_+&;Z2~n-*+zlqr,aN.p7iLnODT*uT+Yb?nnWsI@RNmZIoIq|RTl%I{|xGvQS');
define('AUTH_SALT',        '6d!vWUh+}I7E2rZK{O][M%]?OQ(JbIaN((Yb/n/f|-DFZ:2{Lm9wO.#IBD=[%,af');
define('SECURE_AUTH_SALT', 'S[Fpk+?c9|)?XNU;uC4Z@ZND@|*$D>^nFt#7G}7JN5>w+v{$zf2/(#Sk+$T478dF');
define('LOGGED_IN_SALT',   'pOv~yluPy4(1|RO]zr/D](tsX]1;(Fd_D;*X->lq#PA$WCAXzCX<2$|:{.fa #>X');
define('NONCE_SALT',       '2SPb,cK-6Y|1SCX+*!dJ=:=kCYuG|cFMsi3vS-vjS=DprE|-fB$y#!@.]WcwX+qg');

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
