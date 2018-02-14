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
define('DB_NAME', 'joe_portfoliosite');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+Xf6VAygXzr3.Y@Vxw6A,HR{[-2*8 Zr08>6jkMzq~g.[[G=1gO,~X.|AwaWO T_');
define('SECURE_AUTH_KEY',  'K7%U*N^LF,c4(-DZhC,(>sSMb>K[1+:|$H@9ZKGXEix&gQ8Nyg5EZx8=,KpY!S:(');
define('LOGGED_IN_KEY',    '`iDFG%{>J5mvO[#j9d[wzn$f(v]+p)3*%[G@bpxUvAF*#lqY*hX-wt7Jv;XEK(W]');
define('NONCE_KEY',        'JN@g_|IDrL1=`^d*a$}scPQm*8!g6%89H>,3t!Un$Ttsm3-qjO-{tGn-]&_mYNhJ');
define('AUTH_SALT',        'w>O#7Q?gnR08|7@>o$F$4k%|>Ok#1U~yK$ShiI-cUYLo#|.I>=u{q[-kK&KXw0Qt');
define('SECURE_AUTH_SALT', '=]e8|#}_r:FvJFLYyf^<A4cDah?4z|c3z j@rv_}`cyxi643k lRP$<F?Em9YHXH');
define('LOGGED_IN_SALT',   'JAzyN4W4XjNHhJ#f!`3=dEriBMTvPZN-V^q<z/9tkx-Ab5}+1/k9{BsT[I{|:T:2');
define('NONCE_SALT',       'EPo-t$G[vMm%KO]?,6;Mz2HB^**;h]Q^#c<r3`/X#(ezK{P~(t2;ss>^S=%+HnM}');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
