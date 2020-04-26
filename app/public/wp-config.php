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
define('AUTH_KEY',         'iTk6cze1syHK5xmDyTPxiQjaROQ0Suyr/Idn9Jy92quaTAlUYAmmDCmheQTZrjGu7HA3qdQw8NnLOHu9aQopdw==');
define('SECURE_AUTH_KEY',  'Txfe4W4Mhr8TQxI7lbJnJvCkXJADa9t06zRkJOHtomBf4xbNTfYZ0PQdsP0wAFg21JwMtlVtcos8UJ0RiTKyeg==');
define('LOGGED_IN_KEY',    'rJeKkNNK3BgU3wpYI/0DBd9EhdJiDJlJ/wmVPAy60AyzHbuM4X3L6Cdj4HPMQWjNpqA1KbqlnLWl4dHZtbUF9A==');
define('NONCE_KEY',        'yAnnCR5OsDG5Cq3v3Ea6V8EXnhk8bnu6VFORXANZX9cD9scqXXUwayQAMiOORhiCKREO5fCza/+KLebPvp1LAA==');
define('AUTH_SALT',        'xqQLMeUKkbWrVmKluOANl/ypdt8HqnIw+/rKhiplCPxy4hYcS06f2uzzBUkv0vonNbvKOGEkloSlxGBXE905Ww==');
define('SECURE_AUTH_SALT', 'r8Ch///fYSwBkjoP0B/tJSYr3bUBCwdP9eJk+/d8/PBA+dcguZ8KFGZpW5UatdyJMrVws4yFQorZaM3EFDTK4A==');
define('LOGGED_IN_SALT',   'hbxKg1I2rG/e0rFNUwlCufPuIBZfco8ioCVkmMZNGLe+dQJ+IQJo8zH3fJBjAw1XdQvKm9mqcthyf0Rgp3nTJA==');
define('NONCE_SALT',       'iCYxFyZHcJ6tFGgzg9eVIFFXC2oOF6T7SEUg/QPuN6+UlHvwb9rZPZzWv7Q+uCpz+/YsD2XdtobkzGR9dLWgYA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
