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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'k/5UbeqPG:WS$E=Nu!(qO:e$3hzYjHiD %2<-%:Xcr$Y(MX374;]Q 1Qo^lneFUZ');
define('SECURE_AUTH_KEY',  'V!j3xY8}Qa@|F|n]}&X1i,;z`V4j7xht ]8C5y%r%~z`M9u*ejYpRli=%ws2;D7?');
define('LOGGED_IN_KEY',    'eWb|OaWa}E:th06^/9V@F:d,EP/3G)o2:ws#cFByY>2! )%G;*;x#mD$zaqd=7*]');
define('NONCE_KEY',        'ZMa9fY{2~t]+%z[h7s%V]7Ty59;{zg;M$0<(UT./,(.W3(`TX9 Mzzg(/wGp#}:?');
define('AUTH_SALT',        'n,aL7006m|gUGN?u)h5QFF|8Ra@*zNF#&lFa_>~sEPv5:HxUpjB_=|g&=Jj/V}A@');
define('SECURE_AUTH_SALT', '7 X,Ez%M~:j1RzjK5r]@_8G=]j].RLcv5@yCJo(:-i,nF?de8q.JT )68bA)pd ;');
define('LOGGED_IN_SALT',   'It>=Wb:ELG{kzF !@l!oimNmPen%?WPa(5VkBF<7 -x L[%+R1wt}xgT>|p:6U-s');
define('NONCE_SALT',       '_H.hJ{b~eYzEJ(u:VH OS<>0;Ykn(I-JUI$uu[9&Sf~;j-{ZW5N8[E<KiO|4ga9R');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
