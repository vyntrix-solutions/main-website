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
define( 'DB_NAME', 'new_vyntrix' );

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
define( 'AUTH_KEY',         'm17`Ix]/?{`8HsQ1{@r.Xn}uoo.4qcqE$PiZMS8IUmI6Zb;_]^)<mERz88PI?lJx' );
define( 'SECURE_AUTH_KEY',  '~-TCO|p.fbw)2^0Yv@n:x,ALfN*FA 7fbZ;W|&q,LNp+6`Qi6}7_T#j[ 9A2!n+n' );
define( 'LOGGED_IN_KEY',    '6SKsl1=#<q:F fQsX_?oYrHe pEyNVcLfmS{4}XI*64TrF CkM9]#y?Z,!|#grYG' );
define( 'NONCE_KEY',        '2Zn4vwu+C1q,4VR.yL=(Py%0tq#Z)qjMl&j8i&)eZ[OgmpCt/PV*sWf3.4mA.+L+' );
define( 'AUTH_SALT',        '5p^O >/*o7>#0[^HkrTI5>WDcZY]E}8K^EMf#sw`No3~j7sl#M/?^oSW[hymaq**' );
define( 'SECURE_AUTH_SALT', '0!>*-v_cn=TL}IlTv@])tqym2WP/>.&qmx$yW(b^L96[)-#k3KZ<]<}^EB7RUlUj' );
define( 'LOGGED_IN_SALT',   '6r;xp~![rzam|$Bi(&{1)<GkqrjY+b]=Az6L$2=M#Q-WJ;K#bOVZK`8G~7}o$3uw' );
define( 'NONCE_SALT',       'Is?6h-}.@vc?P@ E@U??QCV!9f^~{)wg,r***`<!QbxAI95GYi]:22^Y t5,t]~R' );

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
