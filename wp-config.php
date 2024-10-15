<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-2' );

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
define( 'AUTH_KEY',         '4R5gvwG)Y*WH!7ktfV0&jMTZI7py:&QSFOTY`@P_}1DbX|ZS(.sl1w$I%U55%]kU' );
define( 'SECURE_AUTH_KEY',  '>dU^p}5_`UNU-8fybZ &K(8Wj[=QqNmLa/0z~aU:%!t^T$T}igfj72}v=;iI<HI[' );
define( 'LOGGED_IN_KEY',    'v|=x+l4,Aw3rnPZ]f]y[Qe>.0%1p2P(BBj;xDTY=y_MlBrE;VShD(=iAsP2|H,ZH' );
define( 'NONCE_KEY',        '79$|^Z4 WHN+df+PUC~m:u1Fa%Npm)F(DHR@Wh&ywiPx`&=AD!hcsD]>pCR.#Gz^' );
define( 'AUTH_SALT',        '2v~j9~Sl,Jo>DVaRHWL`(PA_<juUt)OF=,71iY?SPZE!jlgSSIpQ*e-NtZ<G ,p0' );
define( 'SECURE_AUTH_SALT', '(D~OD!o=nD8~FiAV-R:2X]z#iWm.pgj td%0lu7h-/4nfi@@mj.wj-}hR(&=wrx,' );
define( 'LOGGED_IN_SALT',   '.D(Y)+UMfBr5ognwegZW~wQNKQ1%ihA?Gt(}KG6%#BAlnl;^kE%wEkA66`5WESu+' );
define( 'NONCE_SALT',       '1Q0?Bm.?tN+(4?sCe93Tx1QRu^pN6e!. .+@2zoD]V!{+o1w]L408}Daf%j->rE]' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
