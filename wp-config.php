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
define( 'DB_NAME', 'deagram_wpdb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'C#J-];oSFFnK/+m5lD?w yI^_:m7;E-PLdeo^(r=~YpWF_-Ixvq [Lzv5P* g[l@' );
define( 'SECURE_AUTH_KEY',  '2G1pY:K`JWjPC8zr,ilA^r.,UI<6{k_<*cY=VbK7OEI^(,|n+nS>VA8O5BT|h1.f' );
define( 'LOGGED_IN_KEY',    '+%O}zZ}?Jp`-Sd,g#34pM])cHhxpIyQ ruOgBNTR7C5y#%;gZ%[p[e|_>H&^FI&E' );
define( 'NONCE_KEY',        'j{}q^9j9`IP5l#=B8eDXN8{-DRH6?:lv54l~d!)_9%%m*(ijLi!mXy-WGc@ulur2' );
define( 'AUTH_SALT',        'cPlr!uzmq8I}:CSPsY*xlO#b-4AkXOcD}HCvn|R4G37oR|XI{=BTJ%J)*9:dcuN6' );
define( 'SECURE_AUTH_SALT', 'xthi2IW87b0V!wKqOs[teHa@4%VSp`w{1,57_wtV9Q]cze2N4:-fe^=,|+Kbtx5K' );
define( 'LOGGED_IN_SALT',   '!h3w!b`[>(re!z)|{~y[ q{A8gVsi{[|{(309uomYa$|cQ&V/&E4%FLn|;4*p`uT' );
define( 'NONCE_SALT',       'R#J,O6)((-}z^m2&zRY$X5nxC;.@%4^W,._=rh~{Sq/j@/h5+z3AffVT5v>k%7Cn' );

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
