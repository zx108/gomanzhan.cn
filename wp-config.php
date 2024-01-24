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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_test' );

/** Database username */
define( 'DB_USER', 'luowenbo' );

/** Database password */
define( 'DB_PASSWORD', 'w258369147' );

/** Database hostname */
define( 'DB_HOST', '110.42.216.112' );

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
define( 'AUTH_KEY',         '&FYN?rl|$}RwjgS0a8AdfGo*R0]VC;})MTp1d>IU7g-VP-R~g{B/}fAm,/o6/Kqp' );
define( 'SECURE_AUTH_KEY',  '`V*Z[GcI^`UozExmM4$Z*!:12c73G1q#Oq28`TQC 8]4k!>4sGX/[I@[zD*kT,l/' );
define( 'LOGGED_IN_KEY',    'X0<x|qa`gT9mVWAR5[zj[,,;5+)*KTd%F3P}:=%o#(CWMZzUCRa#P,b-P|;tPgj`' );
define( 'NONCE_KEY',        '2.v=#1.B*yi.@BDvxG:kJS$d9^hn{rgfG/H#pqd}[SN8.@5}j[@+#XUeisnS;OsE' );
define( 'AUTH_SALT',        '_UPSC*|}}s^eps%h49hQpl@v]=F]dhO<Tm~oq]HYmeo4@zC+|ZQRpp1NQGFRN5V[' );
define( 'SECURE_AUTH_SALT', '>;l,Khg!yvXVqr}s^sv-=ARlJOt{!icruXc`2c70mrocU#BL=4Q+x[|03cl`Yt*;' );
define( 'LOGGED_IN_SALT',   'u-R5-c!:/L[CY=+)L;12x,{1kL!w&Jre%~N#V_yA)=gSj.?UgWo^VXp/w=-mcb5.' );
define( 'NONCE_SALT',       'Rg-]><})?06Pp5mgoF,){I?=E&u@UHUnmAGT]bZt61/]:{T2:Fhu lF:Idr-Z=u@' );

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
