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
define( 'DB_NAME', 'gestionadresse' );

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
define( 'AUTH_KEY',         '^ TzTgl,O~8Ae4+1V(fkJVgf{/iPa]7[)31DhZR{jj;/fmsNB2;/j1g;HPw)Lk-F' );
define( 'SECURE_AUTH_KEY',  'Jxm##E]9g^/!cVq)q5|?8,?J.2-*%pIg,xMeIim3Ke#R92ZYsNK(xu}Ew5UaYsbj' );
define( 'LOGGED_IN_KEY',    'd-;5Nr]6-O[t;NQ]cJ`CNzV$N/U#[21(g}b0d|7p!.?A9,Uopjn,GrSgyMO*2u/R' );
define( 'NONCE_KEY',        'bx@y,k,4=)uJuc_QmbP8*L,cRUD2j5YGhqtF62yui!GzkfA:TN%L~MOckInG>)&1' );
define( 'AUTH_SALT',        '%1wVD/5 #r[|8:W|__0aAdml^qge)DG?H-ngens!zc22C[oqg#^2B#XK/_4!U0oj' );
define( 'SECURE_AUTH_SALT', 'Z/x:)$6}bOu4de?Qpc[H(r$}1dzFd]f>Pk-|f)60cD>(q<brjCA]nKs-SV}GKszq' );
define( 'LOGGED_IN_SALT',   'V4Nr|rPpM64:C{F.LJ+cn&JMVc;)Nsq8^C`}hA] q--.s8]AZ}4P% U8g3sK|235' );
define( 'NONCE_SALT',       '{(t/x2gS@Y45q_shPZAG(IulqxT{Z@U0hlUo,LKUnxE9q,@((=T>S3N;AS%wT{CJ' );

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
