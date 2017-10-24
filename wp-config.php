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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db_mochy');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Z!mS-dmArK9d9;uZf6+ya#c$Zqq4o_z~+Gta,!r@b_AcL>dp{@g[b2OxMq5X}x7:');
define('SECURE_AUTH_KEY',  '12#U0!/BHL~dn[l+]F*<82SOQofo/@@G2KT$5uw2==>/N}[tax-df}A=tUl#*=1u');
define('LOGGED_IN_KEY',    '` :[zi|C,^+zkiEN-P8l;9U_; nz3Y@tc:ifdaK|dnaR!0fSr<vrF6*wb!#~zXj#');
define('NONCE_KEY',        'qV00CVT%$76oj|FN(C]H1d0TIS7qzyT4L?vp=/^)[yho=-s?(AHo(Jb*I2K|<bMU');
define('AUTH_SALT',        'sn82Z*3.4{ v[kM+A<J>B|ECUZOLk`%kPpcK&=$WC}+_IB!Ji/nqFX9kNT+|Z9Wm');
define('SECURE_AUTH_SALT', '3F=,KBbx_Gs7_MAc-^`-^5:u-QRTxf[%HbZHnAKkHkSf^A4vUBXH.^8?+H=J2EIt');
define('LOGGED_IN_SALT',   'eG%YyaD<&-cz;gaUg%Dh3>IV7[3`p>zS W$L?o!ZjA|UMt2 -8Ew=kBy k+#]yPk');
define('NONCE_SALT',       'AmxL`Dehl8k(U[FD&J `[H!;%*-,XS`8i/+j-xXO.BR9w%1-n|Xx8s L2Hs7u a ');
define('WP_ALLOW_REPAIR', true);
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
