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
define( 'DB_NAME', 'sitedb' );

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
define( 'AUTH_KEY',         '_6t}PTzpBhIyS!2zn7By%$]?(TTOuf{o_one2A[/:aP6Hq722Yu@e&8kjjN4*NBm' );
define( 'SECURE_AUTH_KEY',  'k$^o<K}jH.4L>WhHo^=6zqDpM:FXfe,`2;+#Ch3dQUx@6MsN pNWuH:U,Wl=b= K' );
define( 'LOGGED_IN_KEY',    'Vhn=L|y@628/It_0U@W#>31^[>xL+k0r}yKN=S{CyVhecp@Ebp@mKFqKr&m(b:@d' );
define( 'NONCE_KEY',        '/)H#JmPmF.4(gsnVE*1OEC@>3K]IjXpA?%MjV8m9$^f3=Q{G/Lo1&C~;i}I6c6TX' );
define( 'AUTH_SALT',        'fgp)?IZ0+]B!iBx[STMG#1o6#Tf/EPt_]ycU1O12Os?p.|Xk5-lFY45^OlhP1(;V' );
define( 'SECURE_AUTH_SALT', '$ja|m7R!Fm#Oq[O1Y0R^]e Ngvlei@KZcF2l*8oImx{sa-/1=u[NM2WsK&#w=)p~' );
define( 'LOGGED_IN_SALT',   '3iiTw^*E+5Be&B6b/7Vf?#Con>GGy9=]Yc5R n0mpoY,~m^J04BZ3f!?ds{;m+H~' );
define( 'NONCE_SALT',       'a.Y_N7}vwQU`vo/-:a}lMdB&tp15lXXPT{}s7>r)|~Lr=u]-L.#wrEKn~hQE&|v~' );

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
