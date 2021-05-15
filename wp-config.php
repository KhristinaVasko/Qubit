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

$cred_env = ($_SERVER['HTTP_HOST'] == 'qubit.loc') ? 'dev' : 'prod';
require_once 'credentials.php';

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', $cred[$cred_env]['db_name'] );

/** MySQL database username */
define( 'DB_USER', $cred[$cred_env]['db_user'] );

/** MySQL database password */
define( 'DB_PASSWORD', $cred[$cred_env]['db_password'] );

/** MySQL hostname */
define( 'DB_HOST', $cred[$cred_env]['db_host'] );

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
define( 'AUTH_KEY',         'O|8H1sa0q9s3VtiPS9pV~HpR@p2fOkihHeND&rt35 en`PYU(L#ej=Z0Q~TJ=@%p' );
define( 'SECURE_AUTH_KEY',  'vC*XQ=qP/aVFthhXb2#^2`w+A(%dw>I7[X?fCMt&jbF]Zq!NG6[~Wi^Z![yDD}Xy' );
define( 'LOGGED_IN_KEY',    '.]|zK:>.u-_O1/kIw>#|yLR!^4lTfy${@80mLnkG$[/aM{3F|^d<mPJ03c 71;v#' );
define( 'NONCE_KEY',        'ReEm_X(sJTEh%6wDj/xoVWQ~Kt^4X+#@-L/8yCcQ=9yilGy$!|xV9MpdgO]ugy&%' );
define( 'AUTH_SALT',        '$*~TD4pSt82Xi_P.{:^DD])3Cr<&[n>CQbI;ubJ]LhsoT})Vzd1m< 8a!o!I{:}]' );
define( 'SECURE_AUTH_SALT', 'lBa*!pUZ[i(*Oph^DAL5Ll^(gQ lAoB~Zwcn_F*}!Z_#$+1WZ{VEnDs2#>P+lYph' );
define( 'LOGGED_IN_SALT',   '%jp7R0o!D=(ElJSUvR2q1FXwgJvReGS?Y2U#9d^lNvcmD0Q.,wEmvJmc5n}<o4TT' );
define( 'NONCE_SALT',       '*(X}!Se(,T,G*l+?/;9@|o[e#iL~#[_zFP|=XZrX3Jwx5H.#6./#:UTE>iHOp/!Q' );

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
