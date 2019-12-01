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
define( 'DB_NAME', 'id11797033_wp_18afd3fd71f9fdd145301137089dcca7' );

/** MySQL database username */
define( 'DB_USER', 'id11797033_wp_18afd3fd71f9fdd145301137089dcca7' );

/** MySQL database password */
define( 'DB_PASSWORD', '00ccf5fa2f598c9a99594b35f6c3736200b89de2' );

/** MySQL hostname edited for testing */
define( 'DB_HOST', '000.webhost.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '3gk,xijr<o|I-uNpiAw,Po5Is4^_9&)bEW<raOoQ$;zD4Gov[YM_xV}tyBEU._%8' );
define( 'SECURE_AUTH_KEY',   'fOOV,?[`J=0i-1H^:dm*sbH69f@C:$r,BLNONak,>W`C]FBuZk%wm>Nr%N*~BChg' );
define( 'LOGGED_IN_KEY',     'N)w8:wTUQW_xaoI5Sfd<;/b[^g>a]dI_z%u$8_ksn`z6Ih~WN)4;x(:keZ-(Vt)@' );
define( 'NONCE_KEY',         'j +Ao=`4A2/=G@U# Qk K.$,7`8f1hgROZAWe!h7DU(jM^!Yq?wwZd56UCrp`?u[' );
define( 'AUTH_SALT',         'kSk#o:0T#j*qa}-47>!zb*oi9T? HQB0=J~tq!Rc8vJ~uryYEi81P g@]U6K<83q' );
define( 'SECURE_AUTH_SALT',  'UP!wcLA&Ug6&u=-J0@9>hQWpG&tgt]s.!P63*Nh1`o{Ga,Me#|zOoTeJ90175 5N' );
define( 'LOGGED_IN_SALT',    'gBOYU<d/^h.HaaQ!h1|=+T$[XwC-j~JYPoWzYjH[!9A,G>?v__fNf0Sc,$?Azx+O' );
define( 'NONCE_SALT',        'J=)i>J%N&&vQ@jDx3b:`U+yBVg,S-)wn*YHuH6cX(=Ae#B<AwWif|el8x#54kWLK' );
define( 'WP_CACHE_KEY_SALT', 'zI,y]xLc}%oap?{J#2-me20s~**7`|R(Py[<E Q>E{+5u|wrsYN#gm`9iAhGQnq]' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
