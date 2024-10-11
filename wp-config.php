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
define( 'AUTH_KEY',         '?(>E~dvgLk=mbH3i{;?(m31eX&$$}*R>jSt$gQLmu$,PDZ$#P:ZG5jt*SUq~0lY8' );
define( 'SECURE_AUTH_KEY',  '$Sfo)q|YfcM, :eTr*]JVT4U&ls6G6gv>edM5 2@NUgGORnRgK@O(;y}Vrg<a#; ' );
define( 'LOGGED_IN_KEY',    '{[|{3o}zahuj5 !w$eAU$cSaKF^_9qDDu8AGZ(uUMyR8C*!4,3msmtlo}JvVP8WN' );
define( 'NONCE_KEY',        'VTWazz9(_cg+MLLIgF*X@?8&u`ubR=e~_KkKHz,?|xw?toO^8>#N#U[#9s&/`+^j' );
define( 'AUTH_SALT',        'Xg^@qBJ`/}+F/L7GsF-p1rKFynr[f;HGP_;Uj/v#r!~8]3!S@^y9&:lK(gOOTZ({' );
define( 'SECURE_AUTH_SALT', '6t[LyD$utgLs>4nn/GZXyz3}L~+]=gL{Q+>cMX3>@R!4DXf^X{9L1lGy>l6[s`%M' );
define( 'LOGGED_IN_SALT',   'mz5(^s#2INWA6cP@+adc>3tu@ NM],Nj9PK.3L)OGm(`>::9+mm0)L.UO/MsZW9s' );
define( 'NONCE_SALT',       '}acVh=S:]fTF~f~>?C39sY-x,iHCsj,.ad+:{uc+Gp)9z|w{D.vLU7=&DB;O6 Wu' );

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
