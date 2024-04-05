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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_site' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '?NU]:&b*Cv@R]BSmgu/lssd-F)Z:0zjGGJ`Z>Jp@gQsh4R|8U^N)?6/9gbm_^WF(' );
define( 'SECURE_AUTH_KEY',  'vjwLk*[6@}BBgphI+#H2Fvl:LT,}T7?_,v_mA:~g;lNw/AY8R!l1>jc2a3PX~~W(' );
define( 'LOGGED_IN_KEY',    'Z k0,)af .SI{l1Bs5L_w^jXJcj5i+IB`1gp%eob>+KZ/<dzs?Tex_+`1Ea,C@h ' );
define( 'NONCE_KEY',        '|xyU>T0:tcs][Gf_mkWx_cA3+cPYB^[tL^Q_^&ILd.rjbvftAk+v[>v9J[;ej2*.' );
define( 'AUTH_SALT',        'OF5(3;h.3@~DWgW5c*p;ijr.17~zu;`%-&uFQ6-5Sb-eD~5O!ARH?xJZH$]`cnk=' );
define( 'SECURE_AUTH_SALT', ')k]Z8~J$1%t@R?YtPiGq1CY(HqaQ]aIK[#+c(Yn&tQV6?3w}.#a!*}Bs8I+f27#0' );
define( 'LOGGED_IN_SALT',   '-mg`t]~I|~n o~,4mKU|FQ0yJGmBS/4rEz+.}vo&u7[-^oyELDA{wdh`p<0]g21z' );
define( 'NONCE_SALT',       ':43aoIoN,`8Yr*];[{W0N:dOZ9s)9:))#=<d]5%/L_WJUkywr6h*4=cT`OMP&[|9' );

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
