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
define( 'DB_NAME', 'wordpress-final-assignment' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '&v>Mp*mI1xHn.{1~U+oSf [AKx_R+FqU^ip<?QE @,*Ql;0>=rAWIhX`}N:LV&!&' );
define( 'SECURE_AUTH_KEY',  's^@TDv9#~`NRFcJ.hZJEAFyb![>Ey=]H7Ej5(|bWeD!CU(e2F4/dt-Dx:?l;QUP9' );
define( 'LOGGED_IN_KEY',    '67xB)l0EN.0_6YQ`!4pxy)~*A#1<qNZo`zu&92WKZ@4!C:un>_A4XS+2Z]z13^W&' );
define( 'NONCE_KEY',        'D|A=Ge4].ccJ4[}^x/Vb- Yu;!f>vJX^6W[E wbj*GH0XN?NV/@D&+5+a+~T+EQ7' );
define( 'AUTH_SALT',        '8d|H1lh&edIZNH>@sEe2gxp:pF|C`eCAx/H2h0i,v$H=!#G4^1U&}8V{c|o%E1o+' );
define( 'SECURE_AUTH_SALT', 's$!!uNQsO 9Oa/}W0vZ5|pJ| L#2@i-uaBGwAk3OM.:9jgtW@vm{viq3[T+M^p(;' );
define( 'LOGGED_IN_SALT',   '1M.BC+Q1w}z^ =r?F^mceS%6lr&5Y++~|^[wK^|eR[yDG <[#GtP3%}$ikAk6^dZ' );
define( 'NONCE_SALT',       'ub&+:sYt&?`M:)AowTo{)Q<:ANiZ5j#AovI)X|%g{Os1+7O-yi,oeY@-%h%RwW(0' );

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
