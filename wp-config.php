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
define( 'DB_NAME', '129' );

/** Database username */
define( 'DB_USER', '129' );

/** Database password */
define( 'DB_PASSWORD', 'Wy5Dxi3yST3wkAcT' );

/** Database hostname */
define( 'DB_HOST', '154.9.254.47' );

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
define( 'AUTH_KEY',         'X$OI9VLQD59[*#{m../24F@MEL{f)[l}Mv^^KQk/DnWRT79a>1<6?_Gicw;)!A+0' );
define( 'SECURE_AUTH_KEY',  'in62[8=~TE[bT0#%wGhcnk^c&|& >8l38a$c@:gm-9VzG[Gr?)bov T:RuDX+mJs' );
define( 'LOGGED_IN_KEY',    'Ek|a-:0j,3<:~$NrAX@FxUX1gwZny@0]v+^HMO(2-/LR8~L@t$~++NxeZ[o:v>,&' );
define( 'NONCE_KEY',        'C8+L[^D+<d]>Quo4PkY*A5F0leb7y_1Q]{fOGG$RBF+McYeJf9<4n(dkt]nS6F! ' );
define( 'AUTH_SALT',        ',Ygre$wM&fA$#tW5`eVqT-Xb({+{LdnmI5isP1IBj?{@{XC1#u`WC*p`rm/^Gpg0' );
define( 'SECURE_AUTH_SALT', 'xIE-|GkO.H?A 9>Av5ZQ5(-^XPbbue5s9kh_wCoS<lj*tCM~t^;+U_x@ahHQ+6&_' );
define( 'LOGGED_IN_SALT',   '1y&o~ME,<DhZ52W3<Lak;;uDuQ0%`Gi$s^+)i@wv3Rm4tN..y;KQ>ak@;jib7*01' );
define( 'NONCE_SALT',       '-!#jTT+qZ`B-Xkh|2,YhcLs6<{wds*8kyzm)!*r3a]zE!{REauv$#D]pKY]l*9ST' );

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
