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
// define( 'DB_NAME', 'tinfox_consulting' );
define( 'DB_NAME', 'tinfox_wordpress_site' );

/** Database username */
// define( 'DB_USER', 'i10252428_tqmf1' );
define( 'DB_USER', 'tinfox_wordpress_site_user' );

/** Database password */
// define( 'DB_PASSWORD', '[P7Artv(8,lU' );
define( 'DB_PASSWORD', 'wtztr0qCz8f14370oecCPsNKdLcUp5w1' );

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
define( 'AUTH_KEY',         'T5 W4s>7l?@&{XI`zN_1zRl2(gtGO06H:HM:Cy.{+k)j2@)r(gh!s4y:>s>j~VI0' );
define( 'SECURE_AUTH_KEY',  'RWbm_:ybKwIyUNp/Ss.vHP!9)3FH*E_>cPZE+ud1wo[TIUnXw;nJ^o@;:ny#f?9|' );
define( 'LOGGED_IN_KEY',    'jsd/*KCTz|bjlPr_/hw4d5d2^H@IfD;o8;VbHG;DDqCNDld[w5H&U=ZJJ#p+?[I1' );
define( 'NONCE_KEY',        '7tSx[%xO;FX>b1LjJ2/E_{P6g.jf^x4TA-ED4jHc:MW;LEhOI50~JAL;{jrJ~2Wn' );
define( 'AUTH_SALT',        'z6J{)j9&jaZPMK^fUx+;nT**_v^=yQ9P{ftX9im2*0pOxfaBZ-TnPUAnROoy_oH}' );
define( 'SECURE_AUTH_SALT', '^*-`),*LCIK!_]*g[}9YV2Hwlp8ZJpV#v,~Krq2 TxHa+F8ZE_1*g6)^)o>7Q[.Q' );
define( 'LOGGED_IN_SALT',   'nEk2#Xqev&{F1ufU_FLu<F#9TJVqiNNk5Yphu]Vf|/`SDcd1 ;kuT~3]$HmC;yxO' );
define( 'NONCE_SALT',       'cCm3G_zhG=7c)Hpy{Q==&w8jeJgs8zWedon3)!i1U<oIxeVZ&k?_}DRDgiM*M=qO' );

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
