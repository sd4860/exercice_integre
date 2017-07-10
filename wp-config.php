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
define('DB_NAME', 'zoopark');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'h{KA(/oO6oKDCjh=g.W~{*+9l1O@?spM-]*s6Zf:6?={dSbq@Z<Jvh~0}{rpmJ`A');
define('SECURE_AUTH_KEY',  'W,%hLQ(4j=`u[Sz|,1u|JCE%di}32A{g|!*I?c4]Y-@{9:mM8fjTvePr:VR.E}id');
define('LOGGED_IN_KEY',    '%|Ex|I`1?S~,)8:qN%2o7lco7KF_:`D={@)}#LM/=aj=<5b&Pu=S/+65k,^~&^~B');
define('NONCE_KEY',        'c`jD;pbsT4`P4o`EgSdAn6v<W1?B7A5)V+6f[)W|TS9Z:m`Zd?;vMWh?X*xQfg::');
define('AUTH_SALT',        'ZV#%[f71f7a_xa3tyO18XrTj817]4d<0wqwO/KZ8NPSip2Q];G)9B((jKtb+Bu:h');
define('SECURE_AUTH_SALT', 'm0no2).NwuXS3rXQq?aWg1.ja&AU~~];uLbeaf^zm)!!J`_6Pc%w]w9pVDia/zDQ');
define('LOGGED_IN_SALT',   '|BRSEo )/?A+onet(Og61O~v`,;rp(#SbsDFk0jj.]liuXH*f?[9l;rP+Gv8Rbz-');
define('NONCE_SALT',       '_?H{W1n)r7s0T%R{a]3{>-^**8)l:IecJO1sL!g*zmK42-K-j.3.!LKQj~pm$8hy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'zoo_';

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
