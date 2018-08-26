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

//PWD: 2Bin10yili

// Enable download of WP-Themes & Plugins on MAC
define('FS_METHOD', 'direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'advanced-wordpress-theme');

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
define('AUTH_KEY',         'oZ_o`$P<++2+:xm.Iwn;|l~U|c;Mgl@o`Rm@~jk9=]X*]-owp }mt3|Lz@B]r-<g');
define('SECURE_AUTH_KEY',  '<?U69Jsdseb>&t>3u0Dgdz)IcTpsD,lT`(1Xyu|#|VSu{H p6{+HwB;DTHyg~_f@');
define('LOGGED_IN_KEY',    '*0y_A+C]>qJ<48+[`L!-;7Ar,c~zd:4|b{$r(F62=dlzmS1yN1swBwWITeV.!W=7');
define('NONCE_KEY',        '*&7tIrYlY+i)f<.R],d~(G@lu3}X<IF|WI9>9XR[;mIUy;nLO!es 1z2[$&G^$7C');
define('AUTH_SALT',        'Ag+i=cv9432Lnff.#[Q|`&:SZ1D*twv5N/<z/$tL|k,GKw-q-LBNB4wcx,vLr;JP');
define('SECURE_AUTH_SALT', '%KHWuJWT_VQl)n8xi.]aawnNkcA|x~ eq`Zi*-:KUhxN9Cw_awf[rjxQRC8+w@hA');
define('LOGGED_IN_SALT',   '8,DSuKn4d|5VxW#iWX!SIh<mp|KkW*jjE+3XNwo(|/U^utrLi$}41+Ev(*Faj-LD');
define('NONCE_SALT',       'Upd~7J[*x<Iu$RBR-&)cE#IX}Yl-jbc#OTz.H&! 7GnDw-4^n%wPBaAjE:D:s5a9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpadvancedwptheme_';

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
