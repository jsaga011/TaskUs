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
define( 'DB_NAME', 'taskus_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '6[t@cVOIsO[osZM~cD/*<wOAsg1:f:H^gs`Ih%Lfk-B@<~>!(w&JV,d(4(#Lew/d' );
define( 'SECURE_AUTH_KEY',  'RhTN5N*9&fW7dJqy;<E!Hgyy| #v.=K@Jgdb9BCMV8PaFYyq:v<<7;&AItxH}Gn/' );
define( 'LOGGED_IN_KEY',    'E}0@A)RMU*:#Et0k2ej;o?.qwy?_]L}i_6J9}:&kb{TMlIpmU{,oBb_9 Q?x 8;8' );
define( 'NONCE_KEY',        'pAAcH;_YYs1,8?sziMux1~$(;T2jG}Ggi$>GRB5^D Jn0-5IP@hHf*<9wLc` ciX' );
define( 'AUTH_SALT',        'vvV~rq+`JrgzclcI&{&G,T/,Re|b!xkF{)-(]bOS-rgVDvdcCH;._%L=(iH*8{%l' );
define( 'SECURE_AUTH_SALT', 'aTcX9>qxS]Vg_uD#~<dneCYb?70_=*([G7_f{:{i>K|].3bLCbpFndT?d~MzEr.S' );
define( 'LOGGED_IN_SALT',   ')l~Yn-+ZehHi-U[cy$AXrHa=FBcr]~+a]S]MWyWI(9OM76+{v8I3JIYQ4O$%llWb' );
define( 'NONCE_SALT',       ',T!r`E9FnIA2-y54Nl.w@$R,2_3[}+<i9by,1P^Ep!k27rmMtHtY/|v;7n)npvpL' );

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
