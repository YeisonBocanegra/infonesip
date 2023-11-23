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
define( 'DB_NAME', 'emne' );

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
define( 'AUTH_KEY',         'ldVPPxY~cJwr4eYp*wqsfMZuu{}M1yIQAj*aqez-m+EJ[-0DaU~ak8iv9#lp09I4' );
define( 'SECURE_AUTH_KEY',  'eM.AOO2Z^O~!9)(Gw?04JAbEA[C5~N:nr%C_F}OS&{FW].#~^xOK:z8[]?Hv%p|`' );
define( 'LOGGED_IN_KEY',    'GAwL [Xb/Qynv]n(`Xr^]`(@{5_&TWK16PESGk;4et|/.AVG@yNxO8;()0U|=ivI' );
define( 'NONCE_KEY',        'D&sU0e@a5q4WoAWj(O}SStaUh5IK_SQ3Fa,Ue7;fyIwZ~Srt$n$k@0$=A3FmYNdG' );
define( 'AUTH_SALT',        '^o%f$.al]wMS:;%7=u}zkc|DV:ii%i=b, 4);B]PO9&E&0JYF*E>9X[+p1#a%^sK' );
define( 'SECURE_AUTH_SALT', '438a?IE+22kd}Uv,4~IN<>A<iYqhJ$]L*LCv7PZB a&Y#KtQhA7CnT?|5Yd^n;7M' );
define( 'LOGGED_IN_SALT',   '2ic~`}24lZY2nS@oLSx0 >YC#8)_N9(Kg`j]8Gjgel2JWf5?:{T6HK0TWO;WBmKD' );
define( 'NONCE_SALT',       'UUQE,_K8Nz+O:)|h/1ze:.isqd1*LK]Td$,xKFS=Q(BY |QUB2J 8#i@_uv^9&wz' );

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
