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
define('DB_NAME', 'donredfoxnov12');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '/}2Z1k2#fxT.AT`;0E+RRFc99h5*M-Q7UM~Ql TD|.P]mP#Om(X(Dt^9Lv3h/G|1');
define('SECURE_AUTH_KEY',  ';xVH];W-&=qHPHUeb^9^=%,p.KS]FtXv3q/JhR#[*9qS{oC>pg63@Lb/5!L/qiXy');
define('LOGGED_IN_KEY',    'Tu]=,.7aLoMR(50) %:IrNwj)Dez LY&Xl-.,NlH6VU&CsO%Oq%TSo,fTb;nCc`R');
define('NONCE_KEY',        'g]xdIx:)~!V*J?p@bPXU%<noLfVcnQ?[>e`Io{E$8F$;:]AkV=x~%_%/}MD|.j+0');
define('AUTH_SALT',        'EWD8n7m0Z_NB2x>C$c1L=nal];,2l{@9XpX&2+|rn=`hhwgm`9^x`%I^7uZt&s%K');
define('SECURE_AUTH_SALT', '%#i]FG9TM3:)% Y|L(V?ZpQnA0-cN6DtH%P$Wm&Z )%iin,u8$0bh:$w=;,N,W=v');
define('LOGGED_IN_SALT',   ']Nn{+qQh}qI.H]|5DD!GnQ]C^BF2*sl#nD]=[-sb06>= )]i,t]x%?mj;X|Fh/gH');
define('NONCE_SALT',       'S ql**p-%F>(Gf>nMThzm2jN}RkaZ6f5Q=#4NEd@XQ>Yp8w-|h,Z#Rk}|+B026yM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'donredfoxnov12_';

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
