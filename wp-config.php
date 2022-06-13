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
define( 'DB_NAME', 'almarenergy' );

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
define( 'AUTH_KEY',         ':ZSsU1vp:FI*OQG<7Cb.nEP}E+>z%N?oa+]{ZjN3{.D<?2I3K0?Pz*5dVx1Tp[9 ' );
define( 'SECURE_AUTH_KEY',  'NMkwE8*fw[U/PfH/!*D0C5[yrsAq/Od2`fGO&=y9;%NE#UF2AN_H4w7fl]RP.JoD' );
define( 'LOGGED_IN_KEY',    ',9:9{j]Pj@lEC;(zR4yWR(b1oI8_r8Sm -Ia9nYryP KBPYKPH?wXf^N0?W+a<AD' );
define( 'NONCE_KEY',        '~mKL$l,CC,m%j$8yVQ(q.3#%?57B&3i<FO8Aigvt|Z:6lDrQ|KUlv8VPXkzW|iUO' );
define( 'AUTH_SALT',        '3tqS-UquD4>7O!Cxf!m7nppy%Fs=-|TqBB:{Q-8//|zih~{!OQe#+e,;>t37k|Go' );
define( 'SECURE_AUTH_SALT', '=i[yn;0~&QJiC#*57k2E[(^4J*HS)Y[.mn]YNw2j;=1V?_][dyj^Wf)~a;WP8kvi' );
define( 'LOGGED_IN_SALT',   'Y*)+`+@-HEj4gVZ]oGH84meG*tom^XCejBjm52uCCfXOM(r<C,?5;86[-b{&Jp#B' );
define( 'NONCE_SALT',       '1-#$8H=A,`KCGtAl{*q%}XKIKp5$JLv!:-u!+;?>^w*nKjtec3p#u+u4%5#Y2>iR' );

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
