<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u756016664_80Ng2' );

/** Database username */
define( 'DB_USER', 'u756016664_opHVl' );

/** Database password */
define( 'DB_PASSWORD', 'VOl07nyg4k' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '-d+1`1wdt=mK4Pio<go$ZqY%1A`3(nr9,S[X?ku~)U2_Q]$.Lx7VvC-TFRV(z*9r' );
define( 'SECURE_AUTH_KEY',   '^mHs94;q0A|6xkdHVQY[VUq069&},(lR(E[DLtC0Em=W%oYyT(?nsH*L=_MHa[Q[' );
define( 'LOGGED_IN_KEY',     'PhlYLrJ@9+pDXg(BNUvYmQ57[fW6 O@@m#LYq_qzI[w3Av)IQ3,cg]oy1|@l-^IJ' );
define( 'NONCE_KEY',         'zbGys7AgjNm%{wp!r[4pk+WsX?,s-avz)aXP}1~IxT0+9hDAw*,=V]3Ss@zf~dR5' );
define( 'AUTH_SALT',         'Lu6^]`tZYT;q`qHgsuk49_)IA,n;#!lp0E~<mXy{}/=Iw9!PU&v5dS=(QwmPE7<x' );
define( 'SECURE_AUTH_SALT',  '!o4[bh|>Ngw$%R*-zE6,<B=9`81C_F=GV.flSUgBaO=EET[nTZZyyvGw=Fsr9v5h' );
define( 'LOGGED_IN_SALT',    '~*@d.4$M6mr-}9`S@~2luWS8XeJT_Q7BW<PWsHs5:.;2|Z]ltA$G=pXg!=,n3q`.' );
define( 'NONCE_SALT',        'P7A3U%yH*ttzqgWI%`as@c_J*Qit `vy=d/t6KTowO#gY(EO*<[C3V^l38Scm#mo' );
define( 'WP_CACHE_KEY_SALT', '5h$ 176:2U~H##QT,sp@J.:eC{,9/.5k^]>PtsP6A]O/9tOd8inBP3B/r6z4cE!h' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
