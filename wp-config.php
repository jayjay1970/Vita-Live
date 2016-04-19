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
 
 define('WPCF7_AUTOP', false);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '4b9rrs510t');

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
define('AUTH_KEY',         'CdS8K{w04X{`=9ksmtf~<!-e+sV&<?l,afPk0<GLFKRT_sp>(<-LdX_0MNowK( i');
define('SECURE_AUTH_KEY',  ',T)*$w$cc0BsjJw[V;93#/qZVVS=.n*swtQd?d!M`[MNTe)&a-tU3gF//9/:Ifcq');
define('LOGGED_IN_KEY',    ')CV)-[{+9a(>Hmqkd-$QsU9Y^$A)~nL=IR/VyrV#&,>ffuxYB|+Nd-u^3=>`G#_{');
define('NONCE_KEY',        'E(N+OBu~nS,^h(!B}MvC^Q9qga4=Rc-_m98sIyr8-nqqRHYk|?ys| sA^}.Gd)lI');
define('AUTH_SALT',        '07/gA6ojl[NH=oY8Km 7QIPPR)*x#```L,YtHSmL^=/@%}_B0[uJqw;F&+j3S1%7');
define('SECURE_AUTH_SALT', 'jJe++S%jM>Ma[qqW%;nK%$_:o4 8[)6j.jPR&mApH|4 89)V_qicATS<DTBS:/|4');
define('LOGGED_IN_SALT',   'EI-)%J`JiP9.E#6EPitJ*]$v6cPnyt8HSY0L.8P}HPVh<z|gYVvBFZDjh5o74dH{');
define('NONCE_SALT',       '~T_Xwm-!pQ}c-=ut6r~V!$@/0(L!d0|CC<FJ]DCP:M}],f;eA3RhYxk~ipIEggt~');

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
