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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vovjcreations' );

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
define( 'AUTH_KEY',         'yV>g_%Lv`2&|vj_cujmnQu`tRNqHBs(p0-r?UlXDWTk?|~Odsn._ghHg>q]PoW7F' );
define( 'SECURE_AUTH_KEY',  '<S)!u2f,}dwRSvLVX5|.}VOGKCpo([-@#Z;KV0b_Q3Pw+Gk^e6l8l:id|:bX>SN2' );
define( 'LOGGED_IN_KEY',    'l/GLKG#IKW$|YTo=l@8+t_c4#n6|;Nc$Amj98zLe6VnuI#Ksn{?SY5#i4o.4*xGe' );
define( 'NONCE_KEY',        'N@Wwh=V$7$&)z)Vb_t0>[!m:?X1Y@2q!C T4E8SxfjN$F|TnCR5aiu^FL?ZwZM4d' );
define( 'AUTH_SALT',        '+4YQu_$<NF^pk_+]mp>kX8R]7ae4NaGdF((h*<z{rdSDMgLlMILD=veylLU8 D.c' );
define( 'SECURE_AUTH_SALT', 'pA#nt]QPB6s!V&Q)PGase@todR*[O@,3k*?d Djum.MZcyOL,%!-o(t6uz#B^]O4' );
define( 'LOGGED_IN_SALT',   'yi,58z.&PwvIoE_ $ 4p-g-y#$yg-ejPy$1WqU=D9zFMQ:M[B9<r)&Y4km#78Zzk' );
define( 'NONCE_SALT',       'HBk_Qy%*GD&979K[tO 9jeUZW}EeDg. 3]ReEyv)G=/@qab3B^ul?V3CY`y+A |Q' );

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
