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

 * @link https://wordpress.org/support/article/editing-wp-config-php/

 *

 * @package WordPress

 */


// ** Database settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', 'bitnami_wordpress' );


/** Database username */

define( 'DB_USER', 'bn_wordpress' );


/** Database password */

define( 'DB_PASSWORD', 'd35f96f8210ed419434792861f6af46ad007b84b31748ef3cd6ac08362cfcd9d' );


/** Database hostname */

define( 'DB_HOST', 'localhost:3306' );


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

define( 'AUTH_KEY',         '?F.[P}fa&tply@;KepoIMQ6ZvH2L,gs=Hs3H! z#fo5(nclq`S.MwvMh4qK#3}+9' );

define( 'SECURE_AUTH_KEY',  'HbwrmsZT(SzJp5[VYA0is+A>*0i<oX9454[p_4]c2{PM,s(f|eL7(^VUWo|bNZFA' );

define( 'LOGGED_IN_KEY',    'aT)#do>0+f<(P}8vRGE1<(@9Vz#Qh8D-&qD8i&XYey3#pGA(J>N$.Mp4}h*G1~3?' );

define( 'NONCE_KEY',        'JO)VOF$l41n*pkZQ586_V<i_pUf1tvwrZ?SNn}[+[OfK9{ ()6#(`zz!M5k;gx0[' );

define( 'AUTH_SALT',        '8lnUd2TVAE~AqDmP<BL(9oBm)9+qI2CV(K/z0DAzC/ 1Z YqRVlOQS</ jf&02&h' );

define( 'SECURE_AUTH_SALT', '{-1<Sxzow0F8>.P=)8b85P]w|#0&P5h)QzyQj;tFFCRMKx#7%DIB;w%;N@Dh+TFR' );

define( 'LOGGED_IN_SALT',   '?{o~A/pHl5l35a7c#d8i:amRyX,V@r`B*)C;ol(dr9K!8yuS?fnh:KPm8NhfKP23' );

define( 'NONCE_SALT',       'OQ>kq%9T+-fcWHoy@}|^N+T48@Ae4V]x0qFL1{t(VczY.0vFzbW$/K#@o+18s3V|' );


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




define( 'FS_METHOD', 'direct' );
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
 */
if ( defined( 'WP_CLI' ) ) {
	$_SERVER['HTTP_HOST'] = '127.0.0.1';
}

define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/' );
define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

/**
 * Disable pingback.ping xmlrpc method to prevent WordPress from participating in DDoS attacks
 * More info at: https://docs.bitnami.com/general/apps/wordpress/troubleshooting/xmlrpc-and-pingback/
 */
if ( !defined( 'WP_CLI' ) ) {
	// remove x-pingback HTTP header
	add_filter("wp_headers", function($headers) {
		unset($headers["X-Pingback"]);
		return $headers;
	});
	// disable pingbacks
	add_filter( "xmlrpc_methods", function( $methods ) {
		unset( $methods["pingback.ping"] );
		return $methods;
	});
}
