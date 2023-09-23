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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wawat' );

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
define( 'AUTH_KEY',         ',*yu~aQIMP,nnsgJ;2*a*Vp&?ujpEY5=q6NU-vTPQ7OA2C08$KHhv&fr5T]a^8P5' );
define( 'SECURE_AUTH_KEY',  '#JRKgn=!<Zu+K2Y}bg2!iu(FZ+@=jop!l/(@kXy++o!#|l1)vj2bVLXgqz#^ovI.' );
define( 'LOGGED_IN_KEY',    'A$Diz9tK lQA>Frrou81YsscOZ _h.9{kZGy*B>sS^iRY D]rVG6#2zBo768Hj4S' );
define( 'NONCE_KEY',        ']936)/wu]N6bnbw2g:D4NVUr_sVyHbQEl9V6yR5%88[XF@mp!/J]9O[e&M9FXzK:' );
define( 'AUTH_SALT',        'p cp]zv9LsSR`XsctZ*`541+OFJ<25G#PYv$#9Ke:BIrxBVt^?P<Fq{mILkeg^$|' );
define( 'SECURE_AUTH_SALT', 'nTN6$5CQfyew]5;443Bn/5atPE?55xdJ*o3l13!RX@J s]JZQX,U`-qE<l& r-_o' );
define( 'LOGGED_IN_SALT',   '[a.,3|*KlWC@bfE+xkhaPdxi`T2/12EO$4dL(wx,)Eq$fgg3J^MkU(Kbnf1R|EIT' );
define( 'NONCE_SALT',       'Cm,~jXv,8Uo}};pMIID&fuxQ4.APZx>? mi.f$MKI04/1E4;D*qp:epm}L*eLTuN' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
