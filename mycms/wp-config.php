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
define('DB_NAME', 'isabelle-nobile_wordpress_2');

/** MySQL database username */
define('DB_USER', 'wordpress_5e');

/** MySQL database password */
define('DB_PASSWORD', '_CXg988Dxo');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         'O5UKh@E)R(ULwXfFzO7QysbCrlLCy(B7R0E3IGyZS#1D5i0rycskcj(zO#ovleDI');
define('SECURE_AUTH_KEY',  '5F0KdQEUOIw)X4tDERC%2h&QOtjnJWE@kxq(^^M4PCv3pRWNGuFY43s^E(wmK3)M');
define('LOGGED_IN_KEY',    'Ih(bCV^GoGOtbFClApk(O(zeXdhlQQ0atR6yc7oX2RooH4qXTsvgy!GDXH!8nu6)');
define('NONCE_KEY',        '%^m6vN!iLf7X&p7%b%(EfXHWjp^ZW&tmyo)YEaMV)SEr%7NTZsn7VhMRkYoKURlP');
define('AUTH_SALT',        'Mvzq9UHeUKE#7uJaz0C6snGqIp)N3^8nw&GyoJ50Zd!D#eXd@Zt9mr(ONIHbZ5W5');
define('SECURE_AUTH_SALT', 'm007RbhikisdZ8IM7AdpbTM%4KTJfMR7^gv%7#0(0X^9ESFU(G41NrNNSmkpi4Hr');
define('LOGGED_IN_SALT',   'g4&IEUbZ4k*wNj5glU643ecIUyY8IjJxhOxAZOhmNrTPAYD#8Wgj#JmxDiDi95LE');
define('NONCE_SALT',       'v2!9vIZC2Y(lGOPL0tXovO(^EFe#n&6Qj7^F9v4*Sequ)PH%Qd1%8Zg&xGHGMhGB');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'NB77iv_';

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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
