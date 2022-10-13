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
define( 'DB_NAME', 'wordpress_demo' );

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
define( 'AUTH_KEY',         'W/zfWwbM#nUx(_8ZRNZIGI(:H]J:Tii60bf`(pBfl!bG!_m{))q#v>+#r&2ef+Dg' );
define( 'SECURE_AUTH_KEY',  '|aBR2^Z{HviWU#lV#m+01J#@C^m12w$&@1hW>wpQIf?K0(~l`~P:Na>X)OzeYI5@' );
define( 'LOGGED_IN_KEY',    '8&,$B=,ygPwkXKS8/|BdN+*{[F_0kv,0piX*Z}7C5eVM1> :sHX^FtpdmPX_5oZx' );
define( 'NONCE_KEY',        'SY5hf?dZV(_vhJGd%H?f.:w4n%l0;1Tp6DC(+(F_f3iPl7B|=>DbhWKY!0k=)E{`' );
define( 'AUTH_SALT',        'nTgc^QvF?`Y#v{b~N/EyRUL_-w0D5n+r1:E;@Pg=Z5k3#s >qt0iy:liWki=idW0' );
define( 'SECURE_AUTH_SALT', 'f;!Vz6]0TJ!0fc,*dw5a2;[GEkU0q:bi2nIX%k/ ):*X2Taq[acSk!]}E;_j/[?G' );
define( 'LOGGED_IN_SALT',   'lET^y(&DNKMs(2o{pYaKg9YCuK8!`w25;Ian<BzEehizas0jAQf,IG`Un#U*;g#J' );
define( 'NONCE_SALT',       'HF-$z~XNQSlHTWuM)/s@mm iN6o#R=>+g-gld]b{WB)oX*Cd?Gy(@_Z:TU;?~^m7' );

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
