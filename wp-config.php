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
define('DB_NAME', 'myflight2_wordpress');

/** MySQL database username */
define('DB_USER', 'myflight2_admin');

/** MySQL database password */
define('DB_PASSWORD', 'L3tm31n2u!!');

/** MySQL hostname */
define('DB_HOST', '10.169.0.179');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'j*?u1nckJW}fHoh%gw1vxh9_C;un*&% V9X~5Gl}5;6~4hu!355,D&j{AM/n:OEy');
define('SECURE_AUTH_KEY',  '3Ya`,Hl~(8KT>2cT|kB$#%J#%lXA|r+vk$BKkm59WtckzelG7tE*{kah@eCM#N/;');
define('LOGGED_IN_KEY',    'PE*0b-KGE&qK9Xk0X`JY<l=h;Kehnqlng8a1ya[b5M}>bS$dwigi#~.noy7V_gvp');
define('NONCE_KEY',        '0ZrAC.[7QG@$Xjr{d4bax9eY+zc6pn+|>?F4 =p*p9s.}FQCVKr9)pDe6W=k;k^z');
define('AUTH_SALT',        'ab-M{psm.z,~JkW.z7<,HFU|Vr`cl}>>Ur9(#r7MhfQb@aP?MiJj:h;i#+c8kovw');
define('SECURE_AUTH_SALT', '6D-ybr$p#x. =/9OiDhn:Xg{uR>j[cqUMr*Av_B50L25Vwy<-3:W(IYP)`[[hBYN');
define('LOGGED_IN_SALT',   '5UVzbcwSmSppHSl(J52eA[u:QPNNcR:xo<x3&um7bEC#cNLX.4b`^xyct[;4]qK,');
define('NONCE_SALT',       ' $UOAmH}G`-h;s-~6!,{g8Jqe1DXb>e_(}_Z`/aj(-|@hqW2p_ -LR4vr@1j9#v[');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
