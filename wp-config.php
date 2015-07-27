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
define('DB_NAME', 'platzi');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'P.OGobt-+[?r vv*+c$aA-d;ffp:daL!6E~}QG-5-YdYNdSHzM-CVKPJzm`<><y?');
define('SECURE_AUTH_KEY',  'fYv+-?^ExxWU)^[UM9Cc3&7kq|g[@m{L^ts+YFCf1sH~!%`4G3T-hg~K%fmN7gMu');
define('LOGGED_IN_KEY',    'r#U/:K!oxJ!S+mW!38)9-&|?fp;:&dqs~sJd9a6lM7#sg-eFL!%!KhIw;-c>v4#y');
define('NONCE_KEY',        '*@nQ<M,l7I?}/VO19WOxRC|N|]A![|~5?)I{9W`*Q8{5:`1AGfyzvyCR43Ysm}iC');
define('AUTH_SALT',        'F4hG]{T=@s.3`$|mU|cfSrn+?g-Q/NdWR=@kh*Mw`H- OlmSbcq])%+txHO=NxEO');
define('SECURE_AUTH_SALT', ')4sCebUrEYG!b 96>@R5+Wc7)XVt]CN,R.Ez-Y#%z(nbkEC-qL~m%fri/y(N;uw?');
define('LOGGED_IN_SALT',   '|-Gnd_R[+IA 95++KBwjWRKn{dX}YrF9IHWz.$p)!w]`a8qFPKs<WSNl?@@7Xw6P');
define('NONCE_SALT',       '6d`&KcE*b}n3B|5.TtCiYb*%,QuGORY|NZ[P+0VvMeChdX+u#9;AW0~xq-O|,H|/');

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
