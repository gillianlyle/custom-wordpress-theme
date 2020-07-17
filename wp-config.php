<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'wG(MdL.r-:?))37S|V<j4v595-Hcejqywn4uvD;7Dgn2~F8!Qr_%mey.;.Us%Lrd' );
define( 'SECURE_AUTH_KEY',  'Jqt&F2k<^Jf7jy~yRz-#mV9W6u}s-~IX];0;7T!$e+><f?UuFA-h,fW7LF]EzgH6' );
define( 'LOGGED_IN_KEY',    'l-c5^RXuIi?)xwg2r>>3H{2*]+vhv9t2 ,9Jo2L~,.!nxQHpL)d<?_7t|R?%zv[0' );
define( 'NONCE_KEY',        'FR;7^Lnmr^n @_/rUqL(5tYd`luS,e)]t!cF<_)-qfbc9e?#dfnh|Ih_lza>t5Q.' );
define( 'AUTH_SALT',        '-)6B*5p#J-Z)Bc,+wso/RoGn-V]wH1#%rEY#[(uG~/H5RI<+fS_1BIqx_X$/M6#c' );
define( 'SECURE_AUTH_SALT', '~6m[.6bz|;v2;`6FH=LHvCZM5f0CZ%faBW{,BDkX/x,kv:M&?lwzt|>9fDDLZtuV' );
define( 'LOGGED_IN_SALT',   'E{44WY$9WgEvF1,aCG?EoUZO{>p$J&iTAsKGh/(H$?AfE$P#Hl(P9}*;4*r6F4($' );
define( 'NONCE_SALT',       '|dqV;-e />rN;_cF_ExPL6e#X)MP`RX2WTY~rngc5.6+k^,W^PgrF}VVf`Kycc]S' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
