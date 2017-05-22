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
define('DB_NAME', '9-edu');

/** MySQL database username */
define('DB_USER', '9-edu');

/** MySQL database password */
define('DB_PASSWORD', 'eduwipcamp');

/** MySQL hostname */
define('DB_HOST', '10.4.56.11');

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
define('AUTH_KEY',         '/Ce{O368SOQQ4vAn=) =X@L-Vtk4=mSz;%>f@oG=j*lY+V6t6LeUL$lC=#:-;&.>');
define('SECURE_AUTH_KEY',  ']r{ZbDU9[EPc&; /Nnrwb v`pBH&eI]k`rhYgg+ Wcg/fezj>>^V0K8<5U{3bbp}');
define('LOGGED_IN_KEY',    'r(dV/vEuU07WDt%(U^Y4:rmr w>s`I ,e_(6A0.1(qQF(hzxC&8)+sV3TS;)h_WJ');
define('NONCE_KEY',        '.~Eh?y#(LFGGt396B{ZC>#3t7c(Uj;!gvA(uAL.jSZ,xDT~zynZuDNNyidf!G&gT');
define('AUTH_SALT',        '.9m:u,BZB T{CO2C#]KjZYD+j`VZC|6mC:VZ[~[NU)zJvUwLQv&;-MRjC0zs2<8)');
define('SECURE_AUTH_SALT', 'T4lfKznqHFHw`UDSb424/G:$~<GR|-8oR$4Zf}eD E.7#uf/SHW}#5ayE[x jh@%');
define('LOGGED_IN_SALT',   'ePD8e =MF6QljN*E{7i_Me+r@WV(tbB;P-fNnXIx95rNTFiM94u!n]pU#eDEI9D/');
define('NONCE_SALT',       'XR7.(07.ZtcXU}Q/XIZ#R,!3h?3KN_U@MIX_KodnLE*~:XR^or2f>Ki*FAnRfdus');

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
