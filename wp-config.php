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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'N>A=~{j<QIe{M5&vuh3mzE1m%i-c|W@lMAG r&aKg?7uRCDL3Xij/;3cl%f|[:kP' );
define( 'SECURE_AUTH_KEY',  '}xIa+&8fBAu&^k~|C0CAJb^crWuJqt)ZF;&>IAo Cm~MAI!nyN_+Hn9!Z#d@nX`j' );
define( 'LOGGED_IN_KEY',    'deO+VYs3=MBVnrJwz.>q@f}a=({%J*+|Od;:ZqI3#d?~%>;6#RY_q~WfzBaJ &- ' );
define( 'NONCE_KEY',        '/Oz=`y(@S,}K%$>uQ,D2wC}5Cv~!0}Pp@BjR`O3sPJ0h>?hauFKMT11[g&}yB8jV' );
define( 'AUTH_SALT',        't+.wW?YU,I7s#9}k%QG[N``sYqZ:B?_90dMQ=&}jJ/x1zuto&E%d4tSP+y$oG>Jx' );
define( 'SECURE_AUTH_SALT', '=^++o(<#-=jEW}2LKyct3~V4f6wb$1; K&(hE/YlDOvCG5k(AAiChR0)hB^Fud#;' );
define( 'LOGGED_IN_SALT',   '-x>4%b%_cSGG`[rsTq`-;XnEgw;sO>hSthjKk4Bn3zcOA-[i 3wU5:OxkwA[z&&5' );
define( 'NONCE_SALT',       'Q{r~q&P&GiYJ;tQzA3=fB*~Qf1Shu%OYZ8bfGKI|]*V7^XhyqR~_)ncVIzBY~74P' );

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
