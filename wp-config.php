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
define( 'DB_NAME', 'uncover' );

/** Database username */
define( 'DB_USER', 'uncover' );

/** Database password */
define( 'DB_PASSWORD', 'uncover' );

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
define( 'AUTH_KEY',         'TLF*L] zoL*Ud;Ylz?Ki9?ReL iOpoA,LM.a5Z(u}_w2(q1<YPMfjPL@Y4+$}8Vg' );
define( 'SECURE_AUTH_KEY',  '6Nh%.F%h6[~7??9uHk>ZzifW3A<=|ws^nD(z}5.#LCUxuPsBHvXKa{,]p5h)V>MS' );
define( 'LOGGED_IN_KEY',    '^7Lk:pEJcD{GNgp.3&q}>86Ru0{0!)]qwmJ/c*_ =6nmkooP|m|64_;YIwhwft4}' );
define( 'NONCE_KEY',        'NUtR^Oe{@(kR*`A8cA#Z3~7-QmG8_CCw#@eK^ER?h2ZDR|u6$//h;x|[y$zjE%R0' );
define( 'AUTH_SALT',        'wwpLtsM2FNRW?C~6mrb M_U5bxT3Dgj>tRa})fZQ#JK(J;hF`yF-#_MR}H~D{53t' );
define( 'SECURE_AUTH_SALT', 'z@9/Cs,fJ aogTaoENg3Q)C=64^5mSn5,,&tRv?Rx]c&[aq}<4..H<wG;?DmSGXL' );
define( 'LOGGED_IN_SALT',   '}NumAW6Ak}&LDIyWlg+,J4)m!<Nud(;w(0r_q4PXvWQ>)oe=| DXZP,T#%QY[0NR' );
define( 'NONCE_SALT',       '7#DERL+;b(`johH[HO*ULeNlP1|2,}vx|?M=/2^:f)<sUNfB2 Da9B^Js:W=^8Ml' );

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
