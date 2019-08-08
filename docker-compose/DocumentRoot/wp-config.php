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

define( 'FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!EbB7M}4NHF8bY[)?U$i_um!6I+jkaM57*cKD^UEM.JS3F#R!,[kk[=z-2dO<B.C' );
define( 'SECURE_AUTH_KEY',  '^vloxkQez~r7Hs2,?X]%/FQqq7<)UAam3) 6MEuXPExf&nbYZ}!3_,$|a>MOPnN8' );
define( 'LOGGED_IN_KEY',    'EY4zeuV*F3JKwUV<L*j?4PCn+o->}?T/JqOVF0LXX}.@fCCX/tK?4|=skRm~;!#@' );
define( 'NONCE_KEY',        'ro0)deQOa_4i@<e5E+_Lb%Zb*SfC-db~:qo<<%hojo6</e*N!M^u`?- rhNr|fJg' );
define( 'AUTH_SALT',        'fN8b 0pR6iB6!mVtF Dg(3u+WLYh{P}rY/<dSCLEnk-YB3~BA:5gmNws&+-M,a[1' );
define( 'SECURE_AUTH_SALT', 'Kd-xRLBjxp+;Tc:?l35HcMVlC+2$c[D<HU%/L_PkAXVs 8w0:6obP1P}(dD^c AV' );
define( 'LOGGED_IN_SALT',   '0eIKP/+Ch4tP|M*)!Pk~9@}^^Z23]8g]f$NG[z[2h?l{,*Zl4PlM@B9N?B2bdFd}' );
define( 'NONCE_SALT',       ':BBtTvZ[EOs[ur*wKTN]GwUuwNe?.s&UW{oLQ},C-.lnhX~4e)@og49YtWPxZWkZ' );

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