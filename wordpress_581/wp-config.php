<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'wordpress_581' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '3:ng,#n~6G3a@/@mu9R^#*;wx@DK26W}`iFx5(YMQT)T429(Y=!Cxpo-0@cx?4Sw' );
define( 'SECURE_AUTH_KEY',  'L{m(PLOk/tKq3ka[Se(BWu{,*31]q*7|j|UG-[T(^e@,&+j]Ah#$=1usZyRrBS*R' );
define( 'LOGGED_IN_KEY',    'GE@Z2|HG >t7+jk(mdB_4j/)g5yEk)!R=WRER/{f@</$z4FeEWG;r?XMDkWmRLzT' );
define( 'NONCE_KEY',        'A~e7 gBJ?U93?S^{8vq5lxbldVVMqrq_yoDb12&2n21r3KLl=7mjj.N9Ai!M:yR;' );
define( 'AUTH_SALT',        'g=~NO/V0@L;Y`Q&SZU{ *elAX!NQt$#RjMg,on}v,_F6Kf(L6Mu08-!u~PL38[>q' );
define( 'SECURE_AUTH_SALT', 'TkC XAV~6/]QWF&]Pdw^TnJ@)aY[M3V?;7>>c6iD,,GU%/2[C04_AlB#2,7tWVTu' );
define( 'LOGGED_IN_SALT',   'o09+~8!hya$sxq-9{^/UuL]#r{/wE|`wB}1C(I0s1h/3XD^8_UF?tsPe&Mfdkmbv' );
define( 'NONCE_SALT',       ')7;~@>l?Py{H@8ZD^WZC#2i,jQ@ulXgt_xw3MQXvir T[w8l~c3fm<rq,t8-3+S(' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
