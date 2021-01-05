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
define( 'DB_NAME', 'batch11' );

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
define( 'AUTH_KEY',         '>s{GpK L|7DypN5;YEt#x,P9R`N~Z<M3-b]@U5|xd$r5`,o@Bc5!z%H9q;l;s=M_' );
define( 'SECURE_AUTH_KEY',  '$@]z;eP6UPD%Ae?]Y@dmSLli7W=p6L?IUco@tLG3(R?JKCv89d_0!VGMtu&O-F}5' );
define( 'LOGGED_IN_KEY',    'Pb3_gjC&?2 mY/<R{QI~grz>sb!+m&W2Jn3/^}EH/z`.!<gJD9=[<]Y)E9Y(u27D' );
define( 'NONCE_KEY',        'iof/4|h*$pCq$;dz_ny1e6Q<dy$R?;QYJu+l6`Dw|sekAE@IIH9@,Efqb]X]U>O%' );
define( 'AUTH_SALT',        '_Hb{OPxJ4T<1Do~cZhdmQ&uj*tm08Q**&[5(dA>RwPHeg[kf0n=_^b64|b9wT}NR' );
define( 'SECURE_AUTH_SALT', 'MCj=u[:e7#~e)0@Qp!9bWWY 5DXhP!EW% `DMx}3A$q:m/(A&;Y(2*;@2zqx*uq8' );
define( 'LOGGED_IN_SALT',   '/N#9-M5Jqb[4D{4s]3g:GNB>(g[CT03*xNj)36+RjO8!K%vN>=jXN*~x^9J3r[2n' );
define( 'NONCE_SALT',       'v (oO$oM^<fBL#ARubLSZA-2y;hZS8o+7;coKbnx;{2EEs601i6}`{iN2TxyZ16+' );

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
