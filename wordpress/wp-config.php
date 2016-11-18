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
define('DB_NAME', 'food_blog');

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
define('AUTH_KEY',         '5aK*OsO$GAK7r.3w+WHMr sMN!?*_UR`x?m|UQ&NFr@)+FX^ 9g/LYeQ;DG3,5M.');
define('SECURE_AUTH_KEY',  '5Om[_)L:%SN1,iHkA4gl!02{JF)sFKX~( 30C!Z^VYS-IXh!w}A-N7sXWgBJ]+p*');
define('LOGGED_IN_KEY',    'ddFR@VbgD<evrXPG+u~yonL*! Rp:%4E;WfpbYwp,I;J[b7jK;%nxCOsX<-$r{w^');
define('NONCE_KEY',        '*d7uLt<W$)p-]0.S u*D3_Uk8:h`Ku n!N,#%js|@d^&u#,LvtE Lz}o~2*{N57G');
define('AUTH_SALT',        'HD$ME;_b3#*75_Ts1&T*:4pONJ3!vUjuPD _5l_k37x87L5nCFZ!HP@A.:1;13E,');
define('SECURE_AUTH_SALT', '>4~a%//<gbC_bzD5^Ug%prE*d(y?;[XZlI!l@TEp*PC&h tDawneP-t{MQUV!y^c');
define('LOGGED_IN_SALT',   '`y8ifrsuPA4L$v+BY5_?:7=jThoKknw|#VJQ}VE9nk[(trx&U65kax{punDj1+8p');
define('NONCE_SALT',       ')z)+IVk%#P=@G7$YUYMclkEm`j)GeRdK9QU=T03)f.C_}j^p%j7aGz{K<GvMG!S?');

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
