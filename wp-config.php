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
define('DB_NAME', 'cecs300DBmbpbj');

/** MySQL database username */
define('DB_USER', 'cecs300DBmbpbj');

/** MySQL database password */
define('DB_PASSWORD', 'UtZiow1Alr');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '$uIoVYkR|so-g4|}zJVCJUBrcgrY>vvgrB|04!RcJ1~[aKS9sZlhK~#x~pD]4G:d');
define('SECURE_AUTH_KEY',  'p;]6_PaDHO5DpWepwd[5~_[wGO5C9_:aHOOZDt-hpXALyfmqye{6*$.qyI{66.bI');
define('LOGGED_IN_KEY',    '!tx_l5H]#2+LT6HH;5mtahtW#:-~#s-K:919#SeHKS9Gxal{y*PXEEL2AqTeXEM$.');
define('NONCE_KEY',        'wT.qx+.q6H]<+.T6EIP6iqXfpSe]x*_]xDL292*#XeLLW9Hxamvcj3B,>$,U7FB');
define('AUTH_SALT',        '2WiPSaDt*iemTa]u**mtDL29H;5lOaaGO-#pltai2+##t+LS9.yIQ7EI{6jQXUbE');
define('SECURE_AUTH_SALT', '<QQBvbjQ,^{+M6AL6mXTAu^quf$ozg4!>vJUBC>ZJVcJzkvfrF}$QcMJ0kQYjQ');
define('LOGGED_IN_SALT',   's1~|uai2+<<t*L2A2EPbL+mxi6_]5#WHD;ePaiP.tbM$ny^rB{>zJ3FM3nYjT.u^<');
define('NONCE_SALT',       'ynb$.uIA]eqbeP*qqX{+<;*PA>zN4BN7nYVFzgnYk8,3^UFI3EyffM^rvf3F~o');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
