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
define('DB_NAME', 'portfolio');

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
define('AUTH_KEY',         '6/x$#zL-dWL,b2Q&RgageYswl,+aJ/v;f}i:pMjr+b8]h8<_sw2Pas]9|}^+}I(^');
define('SECURE_AUTH_KEY',  'KD.;un0V7T&rKE}CIx-K&%M/_jgK}oekphaH3aNw3}<NWMsrG~XC-f*UItQm;(w0');
define('LOGGED_IN_KEY',    'Od>i5a&1M+&!5>WUzd4:LWWk$K 0KmrSM+`[6UVSTH?df6C+nw*%-J<Yp<9U24n`');
define('NONCE_KEY',        '(8_;!47cE)FkT+r,0G*yx &4`6$CvJK4Fxw$Gp[HHf=-:UKE**qkTKf=7zv0VFtu');
define('AUTH_SALT',        '|fuVU*N#p&T?@Ow>! o/rU%{d}Y37A 6!Cz<M4-eY)3(r3qzG2Sbcl1NR7iggQ2j');
define('SECURE_AUTH_SALT', 'e}a(H= q-[3[.kJ`A;rd]Z%9A1_CgRg|1.Rsb-Di,D.C^eY9x&.gC+`>f8PU<{/G');
define('LOGGED_IN_SALT',   '[|PbNk7L?@f-A6q0KEeN4/4;0gfL+4Kw(SUPh`DXyLk{7;hM?am{O3 0=Ku5n`3C');
define('NONCE_SALT',       'Y[rPC|$~I;5-^Nc^)H*XhR6gF=OReP0>/[eV=Nu|^:>deXX,+/j|YN5 ZiZuGh&+');

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
