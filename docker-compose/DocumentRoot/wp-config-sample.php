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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6KURe/h4JVNOxnA#}iRL$yDl;=tH5lBb2Zp(Jg1v+!x_G`G2{/jG[8E!mYhlDrA^' );
define( 'SECURE_AUTH_KEY',  'd=wb+V2g}NC+*uB).SWD2gXS@hehrHr _:v[M(Hg>!2a>AED/og[i:}HP4Q=Orc6' );
define( 'LOGGED_IN_KEY',    '_fg)]^<kaKVL b:`}N39x0i@-Wd7_6AAeb{qRqR@F>mMl{~$K<)j7S9VW^Sl VAx' );
define( 'NONCE_KEY',        '9J.TRfVVA0nI(@me z>0N4YuG%v++=a.Wzawt<96K]b}nQA@2E,s@xSHur/ydGw#' );
define( 'AUTH_SALT',        'JH1l/YO4bA)*R,Y!:6B1l_*j5yqW)=YgOaZWZ_!Zy4c?thU>e%favhtT>eSD- J}' );
define( 'SECURE_AUTH_SALT', ';Vt2&-Nng#vC^2^i*%z3?$%H9,`MLa(b`ZmM#?P2:vV3=7d*ZKQ}`>ZrY?*,=dk|' );
define( 'LOGGED_IN_SALT',   '54|bg/nj]6@*E]S^e`38VJF N BE__y=7H_nfSRx#Vp3?=fATKmp33u?(HbG8[5%' );
define( 'NONCE_SALT',       '^B~w{!Rhr13h`!i&R5:7O7hK7Ye#lI.,Q)biOA$<E921fR]ZweY^RXAAeR!6zEw3' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );