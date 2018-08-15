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
define('DB_NAME', 'dbproject');

/** MySQL database username */
define('DB_USER', 'userproject');

/** MySQL database password */
define('DB_PASSWORD', '1234567890');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'R8]+2uXcSx|Rp-)7i>Dq3yUZ$g56Ykr?9Bl$Xn}0Ygr}i#%zP9i?XGy$<+`rd`~|');
define('SECURE_AUTH_KEY',  '?,w g!$RSiMop3XpOG6*jqnJ`.1g3Wl4g4JpZ}{y=@88MVwh;gN}&Ax}UcdO6<sg');
define('LOGGED_IN_KEY',    '%Qi}7Riu3[B$TN/j}MbmX%Z*[1/ADbdK+}36HD[AZ%lzd&Mi<Y+BhKNI$Rw@i;^S');
define('NONCE_KEY',        '1*cgII,5+H0+!o?glO`Sf^}dNB29#!tN^bBJI~rggM_@$^>E1.2V9t4I{(2QjZ?N');
define('AUTH_SALT',        'CzW|-t GJc3`=TA)(y0XC7G>%Z@a`] >n99{:W*ikcr_q9il-C%g5@<q|F]ShIO!');
define('SECURE_AUTH_SALT', 'nUK8>i]oO~M ,3(pm$)(#,3KCN76SRBc;au_#&eTm103#scTXd{vul7LKG1f6U[V');
define('LOGGED_IN_SALT',   '[h1;4p{*z/C0t<wAya[<T -IY+[f~>JXm/<fy;u%8qfQ]8b>IkqW4#OmB#rpsX7o');
define('NONCE_SALT',       'sktOy4|%0omodl>n,[1Xbza?APYU8ZArvr(-~yOAi4INX!1Kecr1o@c&#uZF S9C');

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
