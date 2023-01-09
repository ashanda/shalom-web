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
define( 'DB_NAME', 'shalom-pc' );

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
define( 'AUTH_KEY',         'wKk:=+=!i,=!VuD/8|gNZ0rDwJ*jEQ:x9li/tsseFj09h575AK7shkqS[S1pU}5d' );
define( 'SECURE_AUTH_KEY',  '@a- @$9}fy-~,obh.VJ[7F&eVhu :XtB459|BPD^iV{z8!QnND;1MhykKe1.i:;$' );
define( 'LOGGED_IN_KEY',    '}u=%z%Vxksh9zArgu00d[a3I#(svmpmwqL|,iv~#1xvxPL*-X0Z9CD[Ncl=pLQp^' );
define( 'NONCE_KEY',        '*8pnG<PlteZaH*!GOwJ_%tFewAQ%{pv>nT>Eay%&y-^}!{D@`o.>886mTdx&Svpv' );
define( 'AUTH_SALT',        '|B5P)*GH#4$}ZM L4&p6bGi8P;}$Dv{25iefq1HvTn&>wrmn``prN%#eEPpe5,D,' );
define( 'SECURE_AUTH_SALT', 'BPMP1fgdKZRrc:2pWC)B!q<nS/Y&Z>:Ipgbs(8`72^hl3[(ezd|E.}Ilm*AS_qUh' );
define( 'LOGGED_IN_SALT',   'i1$3ICt*.aNXT%QXk`z FSY5nSM>MYQynf|e/oMRTrhlRzF9F]MUi[Ey>h`.R4:S' );
define( 'NONCE_SALT',       ')5W`R8sxwyk;#gR]Zt-`dp1P4A&$z!Ysh7Q^EtxOu^Uz]?xQ{w^BC!|<S5x+J;hL' );

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
