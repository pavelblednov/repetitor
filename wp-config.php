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
define('DB_NAME', 'denkon');

/** MySQL database username */
define('DB_USER', 'denkon');

/** MySQL database password */
define('DB_PASSWORD', 'bZ6pN7kD3z');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'wIYyUNn&rQ3quQe@%eBKDccMoY8YYc0*&kf^9MCH^UGJucrTAKP)b6(xZWYiW2AL');
define('SECURE_AUTH_KEY',  '92ZdOY#gEZjw6zszPSvW6&djg&*AiCq#ax!Z8YDaOCoh4aD&(jWpd1Ux!32Zaedi');
define('LOGGED_IN_KEY',    'Xv)j&tajJ%SA@t3frNP2uwR2W(QYc&FnbU2cN3ys5!3jsHc4WDDh*%fpJ(*uK2q9');
define('NONCE_KEY',        '6FC5eF!xQvvLlvCo7*w3%KZA37ZZ8)LecDod)j#Rs3iUVln6gWL8ztnyRiB#@qsM');
define('AUTH_SALT',        'r6BJUiv^9K(16*Z2yAfD2eHPWgV16iY2Q3PmzqQa0TJAsdd7jzR8P6kduCjMIYPE');
define('SECURE_AUTH_SALT', 'GfOC%RbGw^GEC79Xs8e8(9hkQ(tCWzj1cXQxr3goqgLDIcSeVaIXL#%EIAxxTfu4');
define('LOGGED_IN_SALT',   'uUGT6th^xjn%#08RQvuCmZQkBGE@&9LArJ90g#fcfUWXxPr8kFLK1xstfy@IqOrY');
define('NONCE_SALT',       'Wkg*RLgm#e#nh*AU9L7EU(DgevEh@3(qLiUY0e#q&rqB1TM%qVQCQpll5*3ZlK2s');
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
