<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mammann');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'L>gX,s#FK.3CtH./07nFv%p OB<| -^l{r[R+B!L2ck6{#b;^zhfg:Q~R<tE*cn^');
define('SECURE_AUTH_KEY',  '_54Yhq R]VOm76:Q,o-aVd!>F&v18@KuLRUbK?<uJ8DOFA3hl jP^m6rv4hgf$;5');
define('LOGGED_IN_KEY',    '5pOyXjM378y>ww|1Yy&#fBv2Pd-+wv#p#iOzh@p$@T>19NG!7wm88&fdV8]n[Y&q');
define('NONCE_KEY',        'S33jpAq0M@d|h?ta!nk&%,``UoBeF ac.h?`y{}Dv[mZosGp|qCu;`t^H6YfBg8{');
define('AUTH_SALT',        '@9Rz6nIrK,xUPLNUy;^BZ0)7r&@?g0lY&X*{)z>V0Z.LTA@}u{7<hv||905p5W-8');
define('SECURE_AUTH_SALT', '02XJPDmNP1o%73MZ/G$% 4M_2KF(_J95:bzoT(nMRp`L>ymBX)SzkD<KV:{*$eiN');
define('LOGGED_IN_SALT',   'WCZ=Qm#>=/x7C`C4uP*jqB9P}x]m-~I;Dk6>C/d}1Wt!${i|}IP@9b<h<0v~2+dp');
define('NONCE_SALT',       'C|$k$)7>$^/ uUNu8~k6c)A:Mh6jRrut0R9LV8HhPR@}sqoRo6a5c Vb7r6=cvHy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
