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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'skilltutor_2025' );

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
define( 'AUTH_KEY',         '(w!1_J3Z?wF22PukFlUw]D;X/w=YkzdbdJf*Xea8vk(~uS)f7>H`tir]xrLB8Yx[' );
define( 'SECURE_AUTH_KEY',  '^H:lyb>tl! a7d2UO>?JV:8rK*&qag+S`Lm8.=S~ocGMRpsCL)Dap&a,i8==~G=F' );
define( 'LOGGED_IN_KEY',    'eGH%QD&ZHp`x/0kvLNo6(3t{)+1|N-<,J~9BUJR7l~ZK(]@zm7Ex%sbTTJz4XBEh' );
define( 'NONCE_KEY',        '(Dz%BJT~[62} {h,D3arY7Dna@[+4_L;SrLCV@qCm<dg|.y`&#o%U1Ny!/4@;*HP' );
define( 'AUTH_SALT',        '.Hkx%~&*(QWAD$ii>F7O{%q2W95zM5#=eMf4}0s#=t[Q^/R!(IDvX_ ;>^U 46+s' );
define( 'SECURE_AUTH_SALT', 's7K*]K0=qvZt2He-GB}kY3:4(jU.+:>OyrNpxGUORzTR8!+dOtj*$ f|L3#wADBh' );
define( 'LOGGED_IN_SALT',   'G-:Ep_b-2jH2qOyLXQA2Iz;:JN,~,Uw]4!vM8{t(3&$?cdmP<KdY:E~]_8_0=T|z' );
define( 'NONCE_SALT',       'jnm}jd_yQz/<[KZ~=i46x~8>bbec{KZ(Kwpf@3O!0]iAS%`zJ>QfMS1Q;Z]G>CIi' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
