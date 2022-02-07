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
define('DB_NAME', 'raphael-gravagna_wordpress_6');

/** MySQL database username */
define('DB_USER', 'wordpress_9d');

/** MySQL database password */
define('DB_PASSWORD', '1kh6_0vGJR');

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
define('AUTH_KEY',         'KaszYxsBN4FQn6wrSV&j1OEa6!eQj86alB2gwZaX9NhGUN24sSzTKZULkLCR8ko(');
define('SECURE_AUTH_KEY',  'JfF)6L)LlRirQkfE5P5!tqHLtQx%DL47@!nrBnkdiw)YAcc@peFyb!5gDctqcy21');
define('LOGGED_IN_KEY',    'UOztvo^!NAQfhmq*uUclNg&)CBFPwi2RDaGfzP(^%&IX)vZeDvX^8tHV%^D8s37W');
define('NONCE_KEY',        '2sG%DXLy*Y7773@7too1^pGtSA8Wt)#ATyU#ktx0f9YD7HkoqlHN7O2aNN2ctjyL');
define('AUTH_SALT',        'JqJC%x^h&*XTlw0whj96B*KYr(0L0(3i(2c7gYK@KE(UIiqxno19Dk#g93dkaYes');
define('SECURE_AUTH_SALT', 'BA*EDbnYmqw96MpsYDBByw4Ty0*hLYVNv81uL5!CDZ@2*vUpI3iqv9yeIBBKhE0T');
define('LOGGED_IN_SALT',   'cDgHwvBjpQP6LseM96bC!YtcD9#iief%^K3gcdAEQn#wa4@loYD@r0t@7xf7TdZ7');
define('NONCE_SALT',       'upaC7hAhzDIWd1mMb9l8#V14LrH%8qNe@r^f5bv8*@CHR1#LV1qUZY%OPgTkw%pG');
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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
