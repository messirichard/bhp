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
define('DB_NAME', 'bhpnew');

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
define('AUTH_KEY',         'g&`xrI0+^wg:noz5^/4pw`rxEn(~W%=PD#XYN?BiNvPR-+B><!j[7J7bJcK{J*3y');
define('SECURE_AUTH_KEY',  'PWsLx!mui9@{941;+D,OMeYX=9L14#. H:dL=;APp5Je@`(?BT_98>Ql?{~.rByl');
define('LOGGED_IN_KEY',    '`-Y52|14`o9O2~gjXGNA6Tx1TcurIFhja@aq/gn=/tX Y/Czdr&}]):1K=U?6^+P');
define('NONCE_KEY',        'Q2S0{e/<0bsWeb#J&Pv6{$y3!6T|nzSOu/]}xJq,A$dSiW+7vUeUJL/j=^R8yoFR');
define('AUTH_SALT',        'AN1({ 3%{GGW4Qer8UCQk!<H_o!*%$Q[@*xoUvc,f:4MmA!vzQoLGGi|U*^RF?@z');
define('SECURE_AUTH_SALT', 'QW&2{Gqo-dl?gEsi4CCy+sM~Bq%XVU=-4Uu3tT3#af&GbmR~B05q{2K^({(*@gXQ');
define('LOGGED_IN_SALT',   'B8E3GmX9(DKw|N+t-SZmQPK+<+|j?/QY}H@+;z]u6Px(1PG4aMk}mS@0`R@&2y!/');
define('NONCE_SALT',       'y`^y8v-RV61Vg FQ=qQL$Te>%WuH/[os5Hd^#@CEup[F;Sh8x(fYbW~D-#&oMI4A');

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
