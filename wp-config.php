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
define('DB_NAME', 'bitcon');

/** MySQL database username */
define('DB_USER', 'bitcon');

/** MySQL database password */
define('DB_PASSWORD', 'mkPm7i23sl9');

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
define('AUTH_KEY',         ' P&ITM~B+,:L=T`TrkWk8#~?H xQpU+X3oSDA)b{xq`mae9-`G0C,,:4i7$T,*4<');
define('SECURE_AUTH_KEY',  'fbcbYdsDErSP$) 6G$B)a} ?N2SnQ}Zh2)Z!(Cf=2bb.j?sFw,nk`|Umt9p&HL|[');
define('LOGGED_IN_KEY',    '#tm%ld~/S/.#/`7sn6UyDF^1-ypNL5w$Jf 9^KM=fn*NfEGA>CWB7SseA)uNx)/_');
define('NONCE_KEY',        'LGh_*kL|Ly:B9r?IN^bF8|07KkJeAm<HU_(Y5#N~Bbtr7F_Sng8;! )zBHhV: [U');
define('AUTH_SALT',        'oRBY#.]vGCHKIbYk#,hOVEL0~Q/})3!xMSQM~=$|qW2yD;A_;-#SHEpN24]Rt~G/');
define('SECURE_AUTH_SALT', 'meH,dvLfg-,4Qvm6C}n(w^sOT3Cio*Ap0gKf{G]ke9Z05xROq|~_^sHB 7HaPr>P');
define('LOGGED_IN_SALT',   'y4;$dgD+#klS[z4wmf_]GZ6E6T#F1?d7eh90sqyHSxLnICipqjh_c,H?O4UF[o(V');
define('NONCE_SALT',       '+W*2(bJ.}`z|W !#t_ho90O0L<haoKlghV4x`a)S>)d.x:O!KE<p|3RYoykYhfJ/');

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
