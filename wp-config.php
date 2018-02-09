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
define('DB_NAME', 'nucleustechnolog_nucleust_db');

/** MySQL database username */
define('DB_USER', 'reginaldlongfor');

/** MySQL database password */
define('DB_PASSWORD', 'reginald2035longfor');

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
define('AUTH_KEY',         'enXHKY.Hs~&RQN.z$e4(9>B`~(g}p+p9Ux}[O6C0AWi}Ee9XUkywB1zs1``*`0%l');
define('SECURE_AUTH_KEY',  'y*?;!Gg[ZfI/;V#!=vlmDatZ$|e!y6gXgC{ARUE<{nHt{Bt6FGo~;? <@)bQhY^M');
define('LOGGED_IN_KEY',    '[~7?O6:$?IunSvoJk^.> 5v+e?/C _X*ar(Y4~1c:5:0e^kkWZJBXA;eYk~_vY;[');
define('NONCE_KEY',        'Fy<=^1[M||x0Ma4#FmE.&cnX;])L<sFi%;Bd3_Zx|}zd>^zw#TN17q.]6~6ZC<1l');
define('AUTH_SALT',        'eS<U[?)&HY5,Z0%DVea@}c,>x4imMj@_zAP<6w:KuQg%~SD,=F7k%bW+R}n1t&k`');
define('SECURE_AUTH_SALT', 'duE/1(sTx$A#$jcqb`[xHGWoneYp9^zmBQ**HXWT4yKe45(W]CzI,Ji %8>uxpcK');
define('LOGGED_IN_SALT',   '][b6cBtOzwtL:SAeE/kW{X !tVXqC{*{450}+=X9Eu[L5K;9ZD~[Cgp>&RSnVx0J');
define('NONCE_SALT',       ']E@*yDH.g9s*WN,W[BZ9:xVFnkD+p)o^a2/l8|z<_#en[Ly{q3.WORnDJGFevyF!');

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
