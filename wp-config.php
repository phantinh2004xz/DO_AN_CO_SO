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
define( 'AUTH_KEY',          '~Csqyc%YHQ4QSPoI4YYuAfkTbfAa]O^o//{ <>K#&6TfrT?CwgI}&{6vN%Lo+2x,' );
define( 'SECURE_AUTH_KEY',   '[$S3 PB02=z[P#&y7a,b#S*c<dkWn{L=D7: fGwU.Jgb.IX7DKUsS=dK43wL^j2Y' );
define( 'LOGGED_IN_KEY',     'ynif#%z~K,(n? rka{*eU9S >BEp//MJioWac[FGov0F,aQYz>&g/uM8WM6ooW_u' );
define( 'NONCE_KEY',         ')*U$7+r19@?,)U%PL~pJk$ajBpy}/(om|F;orpN]n(.~ZIH!@LG+(d`vo=R3{/`t' );
define( 'AUTH_SALT',         '[udW&.W8P`MRbINOfN)Ed{|bACcX8%V1r,1Ojv.gpBiS^+RSgzh2V$]A;I`Ge<n2' );
define( 'SECURE_AUTH_SALT',  'UMu|rM/Td(~L(%:69W0I(>N>HtJ$1y@Z&M45]%E#uY5_a(kYq[{wj.{GP>9a5m99' );
define( 'LOGGED_IN_SALT',    '3u/lb8Wyk8zRa<BXKEJ;Pg_XBP:6Q}x?_>+oe$83tzIv?pW~m(Xb|oW;=v01a#8#' );
define( 'NONCE_SALT',        'Az<#T$.WDjG|36?@{[w*xxkfqzse|-v/^3+E_5%a|X%`Qx`32rUWg]uSmGkTu;BY' );
define( 'WP_CACHE_KEY_SALT', '+Q8uE|,Tt->-0wqH0:Q4nn9,gr-RM0)j=dr$@G4UUXsPOn@m_i/:Jf r<,[NbJmx' );


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
