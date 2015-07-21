<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define( 'WP_SITEURL', 'http://93.138.1.200/wp' );
define( 'WP_HOME', 'http://93.138.1.200/wp' );


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'c+|C]M{6.cb%(u61$ VHA+6Zy$|Mz~JY^9H<<}5wrAC:*,yL?GcO%p-BwY-0`UGf');
define('SECURE_AUTH_KEY',  'XK_x0-DiCUwCte{e%+X|Ih19mucA$snFA`{cDfmhxHDM:s%O<K+v^p4Jc~tRU0UU');
define('LOGGED_IN_KEY',    'Bg|--xs RQ~S*nk{{4SS0|4pfT|+0y%WwZifU_<qRl n~!uHu{bpV@SC*LbCYIk#');
define('NONCE_KEY',        'V>.|]}.TK6}/sv4`vPCbF)]up>sC+!YJV<?r}]f@.+c&Qr0(Q+f 2Dx@)^S5U;(`');
define('AUTH_SALT',        'q6xED%1/h(-fDu^L>Fueu]e+g gS2aFM]a2cFt4:Qh;mU.$avQm+)F4lv;;@Gb=R');
define('SECURE_AUTH_SALT', 'zt@OGIaI13-a+BBn@J@_irE(ma|W!W+j,=Z+TuINa!1m5.fa$d%D+]`$.xNK@^8+');
define('LOGGED_IN_SALT',   'u<^r6f[gMSS1:K]K2$g7Jt1sZ;d8>|M$1aq 5,)e/f+I9_|V^8+71w(0Nd8E FSq');
define('NONCE_SALT',       'b0A[+5A6|Z=n(d:sP=P/TIS4Z,!w<-w7<&a._aNuRqDAyUqFY&eXKV0Ex@46-m:*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
