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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Person123!');

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
define('AUTH_KEY',         '`xW)Ayf!}32[MXd%k9xT].OTSYAy$5lQAlhO;0oJ-[`PR5)7q~{/p;h~tDK5W)t|');
define('SECURE_AUTH_KEY',  '0;FA{rgY)iLcm|oc0OOYQvsV`a9Q.d*2(:;1nE2/:@e;-oA?u56gY0[$_dH**@/|');
define('LOGGED_IN_KEY',    'm=$FJ+3naSAl6VVo,~=eF1P/h^yr^1<YtYlHQ|xE3<bcz:H(o?5j>QoiG1IhVm?K');
define('NONCE_KEY',        '6FK^+D)1<=y!5`J=PBQcQ=PM1r_*w{gOtZ0)v<k,_i#Mdz[]8L,XaH|h6$`e~5 *');
define('AUTH_SALT',        'BP!3~bQP@W#z| OjWr#T-NBRAk;[5a (*rPU`8S{r)^E6rN$t=83vDu<:&o^Rjos');
define('SECURE_AUTH_SALT', '{yBiL1B}e&uexf|< awv2q@iTv}eFoRc4CS<nj* 9VvbH110x5IzSA_!<xeKQcY>');
define('LOGGED_IN_SALT',   '7IemABx{|uG4uw?7fe<{T0Qta?ti8%{Kmx5(Cp*@`0FI[ckgL>`nxZw7;zfE|tOA');
define('NONCE_SALT',       'u-6v$m}eU`Gc7<kR,#9K#Nd0ZP6cT2O,6Evh&,G|7Cp.HbVEMWBm9~vC5+%$M_^5');

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
