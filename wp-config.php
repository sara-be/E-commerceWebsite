<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3RZl%5rUPWLmOQhsFk7l{/[(DB-+AO6lIFsu}[XXH,6kvMi]a.MbN% X+EX7wA2X' );
define( 'SECURE_AUTH_KEY',  '/fkJ.k+ALVh.?2VfnVs/zr: (ucv=R6PS;Np?~ff>I;Q6_0{I ST3Vk}lcD4A]E?' );
define( 'LOGGED_IN_KEY',    '~llo[uS`b.<l4{w7~x#}7jm|I,lWCl2v|Q@rGlz!:bqWt&lQ;6>@h(:gY*%T}}JU' );
define( 'NONCE_KEY',        '-yHDfb|D|?e <J@#i?.(=X_a9Zs]]Rg$p_ #9wGHErx=->+3$#q7ie> FLjci1T!' );
define( 'AUTH_SALT',        'l;|kobh,]:kSAdb&5N7maWcR+Lsh/Et8SV>9]H+:;1iE5ZLqo%mg#&*NN0W]qZr5' );
define( 'SECURE_AUTH_SALT', '0Rg$^KW G6Y.|<Hz5.?l]2pasZGfq1v`s=Sj:P]Qw8rP:)EvvD*cvIHH)(Qex7%o' );
define( 'LOGGED_IN_SALT',   '`HyG`Z#avzk[4tW`qm3.%:>z@/Y@t-dz h?%|SAvcao=m8O]9d)rEXM3N:T*@!,N' );
define( 'NONCE_SALT',       'mxL?WC{waq?gR.>uA#s)qA6|yn%~cmg.,E,bifAKQ32c;t{PbV.L>]LC0ME4h)Q?' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
