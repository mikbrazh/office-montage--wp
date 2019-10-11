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
define('DB_NAME', 'office_montage');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', '12345');

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
define('AUTH_KEY',         'DUD* Or)4CL-UAKkmgvR?xrsQM_:$zw5S{E!szC>br/PTgp]f8dzRv[o]A[O~O>a');
define('SECURE_AUTH_KEY',  'fkS&)B{t1?ph/rURDe*9w]1ZN8j HwrAI34YGqETA`A<jD/OJ5?pYi6;r?0:]~R{');
define('LOGGED_IN_KEY',    '[+0<pP:<tj5Jp?z} EY%[|X-xXvdS1<(]VpNX,2{s74A>]`;c!9HhcD15X5??gYh');
define('NONCE_KEY',        'vZI4jBtq?rQ}L},-OAw6RPM(C9*4U0v;Y/ouugUOiySqr*]Q}}R+O}7gQT5YkB;?');
define('AUTH_SALT',        'h/vt=o@ bq|~N2Lt%&]0m+@Zr8~]<8,[k~I-@/,h/=1`wr=N.yglMHk.=r;lE?_N');
define('SECURE_AUTH_SALT', '%V0QeiPsH!PSh/KuI#Nroz-e,nA*sV!$c`K9(Xy]B[c-WbTT%2Pr{i+b 1m&%;7`');
define('LOGGED_IN_SALT',   ',n8H<rQVs&?_J-5Bv`MwC#~=j0&-NG,hZ&Ezvm<5]LcV0cG^3Bw_CvZ3& mxEDkR');
define('NONCE_SALT',       'szrC&9C}b*{)VU@wK||-Ms)|3M:@1nU[Y~Dp4VLE](Vo02TyeF3M+V+cU-~YHKaW');

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

/* ==========================================================================
 *  Custom code
 * ========================================================================== */