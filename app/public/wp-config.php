<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'vheBVZN+tOg+zquFLurhtX2yAWVbhJKLtoyNG6sdW8Cs4RkvG8C3EZ4JMch8gLdz/SNU1CBq9jOHeEI1RPEhbg==');
define('SECURE_AUTH_KEY',  'BlQd75+UPYaSiSDEHgA2qZe+EVRx1tY8uYgfL5UKilKiCwMYFVPGak7gJ0MACViggmGmDD2mMB9n4uRZn6Q0BQ==');
define('LOGGED_IN_KEY',    '+mvqjw9VSogst5FS0cz/9rahdBvbOaqcS1HL+0AX/X3zTsM7ifIK5Esdn1vCs6d2449CJvy3CdyQEPmwBVEsvg==');
define('NONCE_KEY',        'fvoFfe4NNa3O9XuHeCMEmj4yHauoQiFyqEJfnJ77stbdwT46uWhKVBvh8vf9Lj9YCNYs8DtxT7W3BHFn76xp2w==');
define('AUTH_SALT',        '3BnmyuZ42ywvw2dhTO2skw4ekqCVVNpfSCMhcNZgmGdd4FrciJ8Esaq0lNuO+9Arvb/4QSpXi4TecVvaHcyiIA==');
define('SECURE_AUTH_SALT', 'pGObZWwIhfK57KxzwhCvkg++DmZ8PEZC0/O+7Es+5EsL5d+xKt7Ks7/fTAOohh2VOkFipxXVZ60wmgGehEaV0w==');
define('LOGGED_IN_SALT',   'IxnwEM5vq3fQ9P2JMqc5j+a5d1dxXlri2Zhb/w9X4iXEc5DDt1nrjJGcdh9pe6p1MHpnJbfpUWYQxUFM3HGJHg==');
define('NONCE_SALT',       'gilhW0eDeHg9OHhE1Dnx/afsBSHdsUOkdNQKmPYvPJUrQtZ3l4QhziossmbbKieSH812GKUgARJYHrExs1kymQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
