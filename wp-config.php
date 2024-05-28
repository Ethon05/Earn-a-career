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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '#a/B-z||Rtl|!G0c(IaMfRse r|`|]_X;1nT>{fUo^lY[[dT+TpNj)FwuDiF;6[a' );
define( 'SECURE_AUTH_KEY',   '~ro5T*2knx)Fe63l4hINUM{PXY{-JdMhCRU$ye7r#L;^Sdi-=0z&v[b?)R( @ZwC' );
define( 'LOGGED_IN_KEY',     'SH1cZLMOrD=WVsst%M4u<r~]J(;BhpPU5OgT q21&ezw*pp0tAJlS>>dr*:QBvyJ' );
define( 'NONCE_KEY',         '7>f-U=,56EvA0|Y}C^EvZE6/&|U)Cgg }nb3$!Hxg|<d)v&zQ8l1&{#!j+pQi3y5' );
define( 'AUTH_SALT',         'm2sdgv^ab7Y2V[k<)Oe>g@fKHNfKDM_0ML`,6ppy0lpo;>CZgsNsRk42d#u6&?9-' );
define( 'SECURE_AUTH_SALT',  '&Dx)H]_mrO$o#ao`YC+QcVj SZK?(9;wa2S.8[mysYm3+N#rm=LiO?ZOk{ F4G&4' );
define( 'LOGGED_IN_SALT',    '9|b(l,eYN]=2kuz;(v_*ARDEj[ U:>noT5tT6I6}yN]<XzkI)% w%e^mN/I~_Xnv' );
define( 'NONCE_SALT',        'GY*OJiOq,:z6len99Du,.3VWG@*~DP(<P)}0s;c>Q<.3n6CN$~N1HF4R}jn2FPet' );
define( 'WP_CACHE_KEY_SALT', 'iqkK9VdYZtp4YOV%I^7zD!|GWrk14uDQpWK=c:2><2D* @7?6lM._F7(fb$]Vsc=' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
