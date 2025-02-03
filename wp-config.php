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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '5=U=PktGfAJ*l83_SQtLkzzceN)]=K-ePY!Q2xB0Qj#,pR(-405h772nN3sr5g{Y' );
define( 'SECURE_AUTH_KEY',   '*/fPLTn`O&yBs1#hMz*kr5]h`sFSwG|,<pZ73Qu=3rW)G}12+{GX>zW4Ljd2my1p' );
define( 'LOGGED_IN_KEY',     'J`Q_ZZi)M]T[vjfEQ13!#%ZR|dBU08FSwNp$RojRdo.L!ys[HN(W7e!q:[2LX3zf' );
define( 'NONCE_KEY',         'bMqR/.4^1)L&EFv`ep!&n{cm,v[n+R:Vh^B*XTz!H%@zC!>.Q}BfW|,6=Ay@[{p.' );
define( 'AUTH_SALT',         '=_X&8I=?!{nGwzzrE,0*XE9*tbM:Vh:*vM*j,DPq&ZBgCq&QO|c4V!E]WJ:VQ^-G' );
define( 'SECURE_AUTH_SALT',  'h}-0a5ia{S:0^2}<4$(Ph)!VFK[&5R7E18k|zl[1iSA^CkNe$|^wbTw0YTE  |*#' );
define( 'LOGGED_IN_SALT',    'L,KSTkg+==sVB>3Tt>$#D0bfC<96ur|tz,I`)80X[*mQ^%?1v~Xyj0FShE]d:>,Q' );
define( 'NONCE_SALT',        'wK%=Ydh]_6q=K|>PvA$ha3Th|38e=Z%vJvW8T@?r^:4`,fotY{j[`gRHn=K/yK,X' );
define( 'WP_CACHE_KEY_SALT', '`ozwBIyo$+A_B){P}!YH.EL{D3hKeG.e~y&_<PM()Euzb{7=e?7^WkCjT{$;F1!O' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


