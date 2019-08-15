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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'mzfG3l5p8Eg6FJgdRSiNg59U40KtLtUEJn1YLTWmJrNwSUSfR1m7G7fRXyaOFNpir1ooq7nRFSJfFV/43k94Ag==');
define('SECURE_AUTH_KEY',  'J+FmLRw3LJQNJs+O05aYaSe8qIJzH3rAxkWnCygobxtzLeeXy3zPDsFwttaB/N26lNQsi3pkFyhHw1zkt8PLvQ==');
define('LOGGED_IN_KEY',    'aAtqX+h88woFaeZSWb4i8RIZUp4zEIQ9lsWOVlP2zFdVHCIFAC516OP53GaDOWeLEJrYJn8czNfu68CzWXiXNQ==');
define('NONCE_KEY',        'aE1ozetJki/D/sxw26sp8rfVE++5f0KFh7osRqA0DUUukqlx2wThftAnBsm9GvES4Mc/3qoI01hA+GumHxLJiQ==');
define('AUTH_SALT',        'UWM6CB7c4X9IXHkOVC/XmIyexp379NcX7RWEJ5xj0kx0hm5MOggscePJMXQZ/GtvD8kO9jtaCaECmLBVophgtQ==');
define('SECURE_AUTH_SALT', 'Lhv3Fc88jDCP+y3MvYYhRlhg8OxFFTcnEsR+YtYoYcoq83vOqt2xrcif3ZlNBlJdjwQh4kQEf+kkIKRnujqfzA==');
define('LOGGED_IN_SALT',   'D2DJrYXecw8wc4L9ZRQJkpnyrgh6fLDDW0Nq2O9QFuxRmn0sH46DY9kLk/p3srl7Eiz33AizkPM1LeLps7WUkQ==');
define('NONCE_SALT',       'Iz7Iyoj6+cPGfiAF8753ZKerEK+/wqOrPYUCYK4Jra04CSmtVBf4iuLnKavJqgeT1ukEX9KxmjeAXs2MQwe2Qw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
