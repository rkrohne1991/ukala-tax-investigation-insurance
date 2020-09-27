<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ukala' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Kz[.[{yWwfDb`TE[e=vGCVq[?(BuDBpW<KHTghZx4=?K!EFJjl~tFL+WGw|rAU9z' );
define( 'SECURE_AUTH_KEY',  '>PyEaH0xS+K/2di^&UaOs/U>uvGH4z+YPst]`CfP),nN6vPK_BCqHKY6 RR~t1GF' );
define( 'LOGGED_IN_KEY',    '%-$p&pI;&nyJ1tz3HP_yU.EWcm]gGzG:p>y+@J3K!Q]&&z$0JrAn85Kk^7J1nL!5' );
define( 'NONCE_KEY',        '%kv,Z ~%EIx0hXf=ip6-.}k[l2{Y,~c@2-3nqsPP|S4+6k zas$gB.E$-eh-@ml&' );
define( 'AUTH_SALT',        '~Q%kzGso&I&Bi);]K>u4~d|a]$=t4UN>IIecjz,CJyTzH}%,oP9@hYr~cLu#p kZ' );
define( 'SECURE_AUTH_SALT', 'hf+jFr%MaJ2hzN&A?-i$N|w(n*C|S-ycC?nyla$H0xsz;)9N<_jV0p i)%lT8//m' );
define( 'LOGGED_IN_SALT',   'S:UP0sNI.X3C@H8Mk|P!uJ=d8gwB:2uD;a&+JyfaBYm&$~!2)oX<|tXlvP!x|wmG' );
define( 'NONCE_SALT',       'C3OW<Ep&OmGF:B8}aL2MA`#/$i,P<yc+r{f*hA1ovg&iXSz8h6%qWa]T(P.lI.&Y' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
