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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbsosmed' );

/** MySQL database username */
define( 'DB_USER', 'rafi' );

/** MySQL database password */
define( 'DB_PASSWORD', 'gokulemah' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'JMOtZ5~l(X[GLQ4DvED=ryF`%V*5AzAitkrg3XTZV;v#jlZX$2r|]Ao?W4BT,(nO' );
define( 'SECURE_AUTH_KEY',  ',wi_YUxXW[|dFo_E5wUH7d]<|WtrW&OZ~sB!/|DX5%^|SHZCWcrmsZ3;CdBk$5B;' );
define( 'LOGGED_IN_KEY',    'bf&q@RC?mU_o@YfMQzgI0V|aBq5U{Z+~T%XBo7K&:|i6Ws;X8&X28W:#us3LFG+H' );
define( 'NONCE_KEY',        '[_`Jsx2,;_U16|:#h6u-><J0e,D>eZ7)iGPrO}gV}N@m$}%I8=B_v;M5={5n/kD<' );
define( 'AUTH_SALT',        'RRsJh|& }CtC0TB5~5;X@9x]P#G=hE{DlEPgKt_i+M{~Wcqerw)vsI] $R|{Tjxg' );
define( 'SECURE_AUTH_SALT', 'E~_ 2nN$8Fe[<S$QJLk#oXAKl5z(*laVNRl,Oa(/wI&G eOstN{?0`?HSepBcM!$' );
define( 'LOGGED_IN_SALT',   '(c/ftSq669?G^ >EwXQ}/*MwjMT3}biAl4FTXdB699#{%jJ`J)ybeUvho +s6VOY' );
define( 'NONCE_SALT',       ';KsxR!KakvML*XM!N(#&qw5J4tM:j6(K>px:=/5k[*E>(7V|~%jq/^{ol]iPLif=' );

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
