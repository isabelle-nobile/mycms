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
define('DB_NAME', 'isabelle-nobile_wordpress_8');

/** MySQL database username */
define('DB_USER', 'wordpress_2e');

/** MySQL database password */
define('DB_PASSWORD', 'bL80ZR9ha#');

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
define('AUTH_KEY',         'z13BAFQsl5kMOr%v9I8FMo0nITVbDdML7!(5N(gkUxFF2*OmtkDK2v&Q58lz1Lxn');
define('SECURE_AUTH_KEY',  'FoZaXCMxv5AKS9AgwWQPknHL@y*5Vxw8&VME)wSvafeZAL@YH(dJO5UGO&6atDRn');
define('LOGGED_IN_KEY',    'NHYoONo!lY@Pv*w(VToDy@Aq!yUk&!tp&aqc1Bu!1AD%yAec9sWRQ*j)9yyA(Il#');
define('NONCE_KEY',        'OFqD)TwYgWujJ(RMGmgQ4YH4CdgU0#t73BEa4k8f3bb&eCyZHzNZLTv7Y2v))b6N');
define('AUTH_SALT',        'SrDzVyUn^F)4dPb54Rjm#uzQUd%9Z#iwzr6TuxL8&&htN3Ec90VO2hdu*gVmNAKd');
define('SECURE_AUTH_SALT', 'TA!awh3g6zXY6WCDr)rrdBdKOYkr6W&bq19!TiZhbM*9OHPyzZxGiZfAAxAFx7vv');
define('LOGGED_IN_SALT',   '#(phL2EEFuatmI#@*Llp5#fduRpVEto0YvBfIpCv@Y)sHY3N5G^XT6u9U^ObPnbE');
define('NONCE_SALT',       'J^&S8C@nJZoPmDSB61RDV0MqtAh*Q9h7UedoWW#ka3IsBRxf@6cUQ%DV#lY7cFSy');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hPxfA_';

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
