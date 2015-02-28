<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'meetciro_main');

/** MySQL database username */
define('DB_USER', 'meetciro_dbuser');

/** MySQL database password */
define('DB_PASSWORD', 'v!8!#q1q!@8%6Q');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'vb3zjkv5avlxznsysesjgbbyjkuc2paaekvyd4xwarsf6bsfe7m9c2r3canqhztt');
define('SECURE_AUTH_KEY',  'vvsnlwdiyijtie5sdildtcufaxwxvtpmer8lly5fwwllvmcyuopfohcqahyoduxq');
define('LOGGED_IN_KEY',    'dbgskgzaoceiiz8arlavwxbzofpqvxs3y2zuao54uytlacbbbsiojoxfqpqwankb');
define('NONCE_KEY',        'yllijybox29cnqmtork43fdgybgkat2r8vedxrbduqpugmhblfaqrf6mphzi9bxi');
define('AUTH_SALT',        'x3uujxmhlhh6bginput7gia0pi3dedr4dw4fhvsfulkrpikbgor8zods5kdxydws');
define('SECURE_AUTH_SALT', 'zoynf1vvjvjxammcmtb9aow0x8uhzg8i6p3ok5azo5n9zw2o9enha8lqswf1wpih');
define('LOGGED_IN_SALT',   'wzoc6cy3nrnqalx0alclaskjkzete9dgqnwe4ivfn9mfxad3g0wz7ip4zrc7tfam');
define('NONCE_SALT',       'cvsnvpo6dzqduawbie5pu4whe7ij07x7qqduvbbarr4uoz6a5wwgr1gmheat0tjz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
