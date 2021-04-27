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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'schoferes' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'n5u@Z:q,hlOkca?^+]`PI @En5eM>UjxddDRa5waqH{t?fDATDu#AUIu3/.tIGP(' );
define( 'SECURE_AUTH_KEY',  'XUH@lIkA0e*T$C}Sp5s_~az8&R`8>}QbzCxiyuJut3d#/:Q0J{MAs0ke*CO@.?BY' );
define( 'LOGGED_IN_KEY',    '1>&g)qmZVX;63N.WELAOm,Y1&fni8-{=(_wv$2_|GR_*wQukfk:y~j980v<&p4Lm' );
define( 'NONCE_KEY',        '{[5{;Jq3TR2P!:6aGG?tThR9}OY0lDL%Sx,QxC[LaI);K(JGf1gY>hqyU%8Td_DG' );
define( 'AUTH_SALT',        'J 1dm?Y0~Zq Juf{,3_>) v;_X{M$fQR%-rV&cTfR]$Xn6>*)!RoGJx#oRc.96f]' );
define( 'SECURE_AUTH_SALT', ';y/t$k)jeB}Z1C,kb@g.-[1o+%-Gbk4EsiyMbmK#Mh}p+&C.nL=h+mg`X$%yNb9>' );
define( 'LOGGED_IN_SALT',   '@_vF`+Qs`e,8!oM10|,6mke.ejoNho:54:&>q.o`m<{W=PW#<qphF5_%riWu8Z5l' );
define( 'NONCE_SALT',       '{%(Z?)wsqNwYgjy83xC,KrC=9jyEB.A1$+l-]$=pG;)nY.C?NNi>)?KNG$GKN[7x' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
