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
define( 'DB_NAME', 'glacier' );

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
define( 'AUTH_KEY',         'k_BjI%jGyl6Gsc0q $?6;&PeY)<QZ99aeW!K!`&)`aC}P-3/oh)EXYvFm3iar*Z^' );
define( 'SECURE_AUTH_KEY',  '0-g9K{ArlSt3;/F_?^4zh)+UN+s6-[ZIH c[T>4v-]D?BBZ1+6TL9=q&Z[LT*CpJ' );
define( 'LOGGED_IN_KEY',    'vF#oeF|@B2[jt*C+u>%#?ThQ=kU[vTD2 wx=8c(cp:Yr=,?q?;nL$+0N=]$ [lM[' );
define( 'NONCE_KEY',        '8MO<3K1j*gdBXE<RkE%$={QW@iD_Yy;tH#X0>MCkfQdnnj5da>Cy#o8)B%vr,!26' );
define( 'AUTH_SALT',        '5XHr4BpRrg[/4@RAK~Wa>~IF6JUCLW.Bv&:21aP{1u8A`[-+S8EFez(e$6^gbKAO' );
define( 'SECURE_AUTH_SALT', '%Je1Xrg^4q#xMQyq9]cAuM7yS1KE|w!LGx2!>Y5pGl.33N<G:|o&;7V .)7y7F:~' );
define( 'LOGGED_IN_SALT',   '}>3Qjvz6S1;3L}7ThuU2yHfsQtG892GHm`)mB&ji(rvy>G&8VyGAB?anLyr{U_=B' );
define( 'NONCE_SALT',       'g9j4H[M=wW1WL`?2na;wtsO{,F&XG3aZ#/=YKlk;m;H}f|bpcE(BnSmTE7=tD>Kq' );

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
