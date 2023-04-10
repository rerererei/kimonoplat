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
define( 'DB_NAME', 'kplatdb' );

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
define( 'AUTH_KEY',         'S@Uid[dABK6a!y,-pnr!/MD9,!S+]WYB2WEo_y}:.w2U?{IS*hA+/aaDqRH!&xtb' );
define( 'SECURE_AUTH_KEY',  '|=QycqJj` D3ykq8k?<Xtd$iX!-.T;HnNSJ>p]D9$d%qJ$x+5]K5/Fx@]y*g_r~;' );
define( 'LOGGED_IN_KEY',    'ANQRl<CyeP[`4uj(FYVGnt3 VnjYE?{KypW@9]Mmvf(d2k$.Ze,+4G{q@G_*4m:u' );
define( 'NONCE_KEY',        'obyGZ(vkJf2[P?7tALh$41~2*]-]C-vH#r#.#?L$!t,e8#,1Ur?_O&R+>r3h_c+j' );
define( 'AUTH_SALT',        '-;_>utsKEPWLZ!z9 G`}!M/zNIyB6YWt)$s9vlB,<=M0Jog.y/},o aag7$?ogN8' );
define( 'SECURE_AUTH_SALT', ';WqtHqAM*HTuh=&yTWBThy#MQ1*>`/tt-`_XX0XU:`I464,M+25$^{*5k25YuG%h' );
define( 'LOGGED_IN_SALT',   '?Ni4Hv}@s0?yt(R:  u!1n:jaP=<Wyg|/017UH|uJhK}mv%<b@Em{J=PH;c..?aD' );
define( 'NONCE_SALT',       'L>Mo`;J1)8&5+YaE`uC!4?L[%p$Fe<Q _biHVAFWT^E!Awejg+&t/z8qC2R:d6%/' );

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
