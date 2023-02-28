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
define( 'DB_NAME', 'thiagobiff' );

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
define( 'AUTH_KEY',         ';Y$<g F65v:Bu7bhQ}D0=9p<hhHKk~lD+@Q<805#XmYNB9CW1;Du>2&x8Z0b2o/s' );
define( 'SECURE_AUTH_KEY',  '}7_b=@6,`tb#8:%@.Xyf6hl@cGZ?t^fRHpN<Zi+4j/y+;d63Q@Los)%/vtjU$?df' );
define( 'LOGGED_IN_KEY',    '#kO%$ J9FGK5vxE| 20%]CpUbwCbp{fP.&NxZ;z(^}{hPU/(7OUD]<1fot:aSxC!' );
define( 'NONCE_KEY',        'P*BSSd? 8i)HEzT>YVSc-O+BN2ft(`UMz5Yog>DCpP;&+4w2!&nDm3|CuS~wAzqN' );
define( 'AUTH_SALT',        'L^+)D/O(IoBlc;yq$K~sp,G2nOi;!*^+<YPX(4c.#+Js>&@q[u0AQ3.T8[(KqA7;' );
define( 'SECURE_AUTH_SALT', '[1Wcq3~rA;H9u]it0fi[wx{O1>2UuEu7*S%1TC7/[(=5(NOuC7gKM@g2&{+vN>IL' );
define( 'LOGGED_IN_SALT',   'g>o%4_X2z+AVPB<|c~5l4q^wGxP=#&$<$M1%P|plzA31G.wEK6/plR)vi14xL/Q3' );
define( 'NONCE_SALT',       'p].S}$q#95jr=h9 %trhs45_!Og)RID=EuBVG)e )1frZE(LXcM0mf0GkIF)}TnU' );

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
