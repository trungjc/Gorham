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
define('DB_NAME', 'dgtl_gorham');

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
define('AUTH_KEY',         'YUD7FFQ6OHNnqD(.Xh}LpWsRW=]6*4DP!MKf,Sk0b}epY0YrcSr&SZNf5t>$OFy8');
define('SECURE_AUTH_KEY',  'L**F^ejkNR[=D]cubTz}y> gQ7^H*+ nK1wat$:4T9Jl~0|H/6HX??lxiQYVs_%!');
define('LOGGED_IN_KEY',    '>N`OlV$1KVH 6PGHp_0 4_q(kc}C0ADWec1{f557U[@q_v%;T1%M8*c9Oo$;^(_N');
define('NONCE_KEY',        'C~P)L4:(~zTq?RLt,GY9&![k.yg|wDY/2&?Lw)BFVoBFz2</#YcSyA/!2u;EM%Nd');
define('AUTH_SALT',        '3a0XjoOaPlHz=I~s</2>m_EpPW_$nyB<LF*,s>(B+},xQa[_]L&Be<$5{] vI2J;');
define('SECURE_AUTH_SALT', '%5~/Pt3cHOe$IIj(sV9D,77GH{qjCp.DiM!%Z=VOOVWUrTKi)]L65m_bFY%FbK[}');
define('LOGGED_IN_SALT',   ':oW?>c+MEbtQKNaJBvpj]xW3g.28KR4*DzP%u=wJsy,?K%;QT}3dgSZJo;EP!@;r');
define('NONCE_SALT',       '+MoSa[@I$ju2Mwn0}}Ec`4D5*# L^t9^Z:61hmnF AkCTM9(iAu`&|vf{AKh5.Cg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
