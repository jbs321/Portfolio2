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
define('AUTH_KEY',         'Q-9(,1|EDTfyD(w6AJ(<xS(SI^RjC+}XPe0:d|SR1JH~C{7w4i=- O(28zxyj0]b');
define('SECURE_AUTH_KEY',  'zdinmj!Z26iTe&Y3X*JXSQ@O{MRzGJitBBSzVKW:8<0jDe$3-]!U9iah-[Zf]U]q');
define('LOGGED_IN_KEY',    'UF@p:Qw$G0/$7Mwi|4Uplrf/,=Zs$7*,w+~cJ6{Ao$NR_b.Ko VW&>u0/-5Y$t^3');
define('NONCE_KEY',        '6_O!_$=kJ,P]3}vjH7ATto%ObX+UVE*!~/r$9J!+Mj/yrKHg-x-T)j*fVsaIDoE[');
define('AUTH_SALT',        '+|8HM)R;1?mkeK5khV;n#I)CsVLfm-0wpg_HN{Qt9;x}.S9GaE>VeXStJ=j#(;Mk');
define('SECURE_AUTH_SALT', '</}-/L=&Br;o/^P]#chr|K.c>ifvbFhf2.H,qxgxknCWQRe3=n^+wKs_/sEVLRS{');
define('LOGGED_IN_SALT',   '!SWXiV)Z|%=*}<9$#}oq+T:sL-D~VELzMP+G=gj6;|p dsw}v`pl:(+)RiMUWRD3');
define('NONCE_SALT',       'mpe G!O3F-hLZk>d#V5{1jqMjeB-_[i`@/)j+0u||44d5@*>]3^8ektvE_D]cJlw');

define('GOOGLE_USERNAME',       'jacob.balabanov@gmail.com');
define('GOOGLE_PASSWORD',       'Passgmail1');

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
