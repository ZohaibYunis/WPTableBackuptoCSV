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
define( 'DB_NAME', 'WordPressPlugin' );

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
define( 'AUTH_KEY',         ' X7iIFg2RMOh9Cw3J.g8*0-`}KeNh6XQTUX&Djp6i:|k#4xIK:Ex+{754)tAg;!Y' );
define( 'SECURE_AUTH_KEY',  '1;mj~XXP|Mu%domPo?]g4*mS{z;.){c4=Mb1wbRfao0Qn2EeBMNBlranh>:Ku= E' );
define( 'LOGGED_IN_KEY',    '6ulP$OpA$;>(jT6[_DS<]>Z!Y@=Oyjrg2eCWS%,6]?kk  6c}YEYbDD^NONJkBv#' );
define( 'NONCE_KEY',        '}|uq7-]X__tt_M.*(8eM#e[0-,gU$gI6C -E8GY@MB{TPA#a#F[,9;1/KkJDKpdb' );
define( 'AUTH_SALT',        'R2>@{G:*<+>%;SqpT%m_,.)mvg(v&6Awe>LJ}k9XIgU7`x,EdkseQ_+^dxH]#@WJ' );
define( 'SECURE_AUTH_SALT', '.^uSW~XopePni$tf*e{n7!l-!E}=JtZHv5C`1?3O{E<c/;r1k4X/,0Yaa/X?Ld%l' );
define( 'LOGGED_IN_SALT',   'qlEV2H$Qi4(bdW=KV2K#Q<+2SU5WX8iYp{yHYZ3hc#Tfl}6X|(^i$u*A,#7jMnC8' );
define( 'NONCE_SALT',       '=6M`:?89t3ouD(@cf&9*R({MW%NUj{<EIPG4_^MH5D5wQHH?r+gt8U{#d2O>YdF_' );

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
define( 'WP_DEBUG', true );
//define( 'WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
