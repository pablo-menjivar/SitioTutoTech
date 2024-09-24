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
define( 'DB_NAME', 'expo_wordpress' );

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
define( 'AUTH_KEY',         '{MIl1Wq-Z}K,}(BzX541JdtBG.rx3^^;f]kYzWM?T6aA/:+g#*W^JD~-,.h>@+3>' );
define( 'SECURE_AUTH_KEY',  '*z*RkmO0@u$NCQiV+#)!!#39zqRvWDYMso/_hN-(I2z6>7}/T3Fo}]=ADlF0e48y' );
define( 'LOGGED_IN_KEY',    '%K1$$BiC~f,NS7J9`KjsPZEAwJcum5:k.Qt.!J6lb5NEk^_<]Y_=#9)K%O|2qw-t' );
define( 'NONCE_KEY',        'BRb}uy@Mg!Tr3I)5uHWqVu$UX8Jq5<u}An|CmZYhO4Y,ymCQclCsD,Xc(y_8@@u,' );
define( 'AUTH_SALT',        'f*@5B7IdFS;RSn=wQ#0L{w|xM!.} $OW-> tqq,@D=t3Y^de@1@g7D>JMGE^6ls>' );
define( 'SECURE_AUTH_SALT', '?_6I,3o-Z!?sSWU~@e31zSiQ0Yh)<HziO&h_.-F,#_G2[P^CcwFWW7K *h^UO];,' );
define( 'LOGGED_IN_SALT',   'ZoRAg[z{S&oD0_?,Hk($MYd2szQ,Achm^;a$^YpwQ@&t!o4J]TJ >C5Gga:(>RLS' );
define( 'NONCE_SALT',       'IM~Ib6M!`8h0=#!jG8}&/|G6l4[W%sOFK*jh/KePy:-`7LtBohIfyYQ+D1>mX4v?' );

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
