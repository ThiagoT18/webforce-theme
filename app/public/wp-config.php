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
define( 'AUTH_KEY',          '4h*T 550jvk75Rpo&nFy$k_~7<Nn/%YAJvaAc#A!P=bH34U;:WC1!+|NE9m)m?mf' );
define( 'SECURE_AUTH_KEY',   '3cM&;rF(`d6$L~V6Z,pP(oDn}=/=8&1xU}pm/P*>bc*pUIF|A`r*6vaW[7z-r%Zu' );
define( 'LOGGED_IN_KEY',     '8=[33h9.XYri&o]5HQEwo1q4^:st3vzhwHRRQ`/J*x@/2W9tt+%C9;@As/ok8OcV' );
define( 'NONCE_KEY',         ',]MtMbXdW0!OB}Q*O4M^]w#eAR>A*e>n@edO)Mt0/bdsQBjKWlcb]jB,MK89!(X6' );
define( 'AUTH_SALT',         '=%1[1`555P9`bSlZf >C&Gs+|*#KpZo`F~IK[fY^rnINaB3eO7-{_0;JX!B+6RI!' );
define( 'SECURE_AUTH_SALT',  ' rZd!nSq9Y!i+3|R%I ,I85Wme,InetnVycFSUt}y#A9O,Vg=[-9}vwr*)IcK!N#' );
define( 'LOGGED_IN_SALT',    '(>{S4L7V[Q]PpQQ6e wT`)XMuiL(;;/u_R4X$lU0]8u@~|Qg))H_44jydVG=#V2s' );
define( 'NONCE_SALT',        '|j)RFkjmSB6o(|W}lk2JD/sZ3Lm7qCF4)oawNxy&{fvlb9$$q#kcj5K_Pk!%*!wo' );
define( 'WP_CACHE_KEY_SALT', '.ng~K9,cW8HA8%<w=TO~cXOA_6<K ^Qo_n|?1XmsWOd~Gz6<!x59 Rr}C*r_a@tV' );


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
