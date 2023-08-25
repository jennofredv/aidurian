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

define( 'FS_METHOD', 'direct' );

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'aidurian' );

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
define( 'AUTH_KEY',         'LrMz._[M%tvY^P`B%5$ADRKm?j15m6-tv$0S3UJchvfS/C8fMn!vb&KeiR!bT,VW' );
define( 'SECURE_AUTH_KEY',  '7>YGAr6.Ly*mn6.^VI0zl%%3F{PO;G />j}j;VFQ9z!p*H*Q7`>jBJrG9lr.y+ +' );
define( 'LOGGED_IN_KEY',    'vw3<><s<ED,yl5)FWbB8&SoV)?*3DjD_AD#Sn8u8^^mKsNrjgai9NR!PP&D%?{-N' );
define( 'NONCE_KEY',        'h9e#w?`{@XM+WI&lhRKV#!kVvL3{[}lyEy<hpd*k-GYg`C2zMzW,yL73-;6<?{3m' );
define( 'AUTH_SALT',        ',K09Om2[79A~OLpU+w3}(~n$G-Jif)uN>{mYER5_m2k1*v6wsCt%3<IkDrG-(Y|*' );
define( 'SECURE_AUTH_SALT', 'xtVcL(#Tj@)q7#N2YZ>{u@e:C~C3ZG!5;=6$1SF|GuI}r4H(<0|2/eL/xtGw3d[x' );
define( 'LOGGED_IN_SALT',   '9YVOh@.N|VO(``Kn]%@W_O~8VP{x558}B;y@#.zkr2Nv|/pQ~vmEMLxMEIpo:5*R' );
define( 'NONCE_SALT',       'rB0#dp7(PEAPn};aq)OB52b>Po#0:?>pa,03_YXj-a18W@W^hRaS~us ;(OM8>!Y' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'aidurian_';

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
