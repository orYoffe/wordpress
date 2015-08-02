<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'first_database');

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
define('AUTH_KEY',         'd-$81QUT|YFC^zHeb61/mVp29s!p]lLZFLSFzs|{2Z,}$pmMjoKsI>Cnm)MYz[o+');
define('SECURE_AUTH_KEY',  '>~0&w:-=*Q1Qh]^U_ Z-/1Gy8vxh.UAV-W>jG7w$r[T@#hrd-->Px]]2uHa^dPdR');
define('LOGGED_IN_KEY',    ']-4=|F9AF|sNG<}>,+)0Q+4R$_~7S>W1Qv,??<> daBk%M+mRAwae:S~ff?<nX%h');
define('NONCE_KEY',        'R<M{b!7q1}kf5-PIl3smkRsj;Z$|GHWlL*;/vSz?4:0d2w0X+b-N8~nxC!pu:7|H');
define('AUTH_SALT',        'DXCm>)T6j40Q.[.8XFNdNwE3o|f`+-D5NKc6G$5z`-zwa#$YMIX~KT> 2~A}?r<9');
define('SECURE_AUTH_SALT', 'jXE{;}[@E^n~MHz}qTFX-_L,SV| [-:z &lpU8Wkfx?l1X[hstsUl#PnpiJ:iAF2');
define('LOGGED_IN_SALT',   '1y_I~2t8a2J&4-[P,mM(PO_Nm+mKp}Zt` /dI4%>RvH/-%rK_0*<9A`<sYlm-D0B');
define('NONCE_SALT',       'TfSGI0)9JF%6O[I4J|*{o}VKDM,uJ~Io$~RNn@gzDS,sd-M>(`KlPGdv<J-mf1rg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_first';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
