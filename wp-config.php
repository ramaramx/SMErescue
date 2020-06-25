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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/srv/disk22/3487478/www/smerescue.atwebpages.com/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', '3487478_wpressc9c00e1d' );

/** MySQL database username */
define( 'DB_USER', '3487478_wpressc9c00e1d' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bdkawaklGSDiW5Y63DGZs6ZuPBoYvtTb' );

/** MySQL hostname */
define( 'DB_HOST', 'fdb22.runhosting.com' );

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
define( 'AUTH_KEY',         '~k^mdKvc4!|:c]x|]y4Hq/vv Q2Gi4+,m7[e[o[#VxipEZQic~|,fV/nDF TD#ob' );
define( 'SECURE_AUTH_KEY',  'ya~0]<69BQJmgLJ_}2`-/4|~EbW*X]yo-1_rjBzo`~)|S7G9%+@m-aa?,d:,khRp' );
define( 'LOGGED_IN_KEY',    'odOw6?Bvc4KVS3^8C,EsXbOjC&3yrONJ2OpG(;]7x5[MF_:GT^*$).Qof,:t31Y3' );
define( 'NONCE_KEY',        'Ezl`X[K8ntxy$9~lb%+e[Al[}Cgn`UH+o{pSK`4`igcNZ:Z_-L3>RTK1W7*[vNem' );
define( 'AUTH_SALT',        '.TR+7Wh^JAtE5e~1Rs9:Ao>7IoDUB7ET~aS%|p{M]==t!U&IpV--B5kq&,7 D<W8' );
define( 'SECURE_AUTH_SALT', ']`R2yF=bl0;)GU)5p>RwM{dGec^JuHlaA1en*`rRhfk3Y#qB=V]H>QkLABWC8DW[' );
define( 'LOGGED_IN_SALT',   '3hf=*+Fpk2wj-A-_Og-k@-SKB]T5IRUq/^ Pu=a[`,b&u9|xslVMo)HM};Qx3!!?' );
define( 'NONCE_SALT',       'z#? ]>8Mg!Rm7UwUq /IXhjpJmgrI+3</ti{<6Fs)l#;yo!/0K:7M0JmR61KLQkA' );

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
