<?php

require_once __DIR__ . '/vendor/autoload.php';

// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// $dotenv->load();

if (file_exists(__DIR__ . '/.env')) {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
}

error_log('DB_NAME=' . ($_ENV['DB_NAME'] ?? 'NOT_SET'));
error_log('DB_HOST=' . ($_ENV['DB_HOST'] ?? 'NOT_SET'));

// define( 'WP_HOME', 'http://localhost/tinfox_wordpress/tinfox_wordpress_clone' );
// define( 'WP_SITEURL', 'http://localhost/tinfox_wordpress/tinfox_wordpress_clone' );

define( 'WP_HOME', 'https://dev.tinfoxconsulting.com' );
define( 'WP_SITEURL', 'https://dev.tinfoxconsulting.com' );


/** Database */
define( 'DB_NAME', $_ENV['DB_NAME'] );
define( 'DB_USER', $_ENV['DB_USER'] );
define( 'DB_PASSWORD', $_ENV['DB_PASSWORD'] );
define( 'DB_HOST', $_ENV['DB_HOST'] );

define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

/** Authentication keys and salts */
define( 'AUTH_KEY',         $_ENV['AUTH_KEY'] );
define( 'SECURE_AUTH_KEY',  $_ENV['SECURE_AUTH_KEY'] );
define( 'LOGGED_IN_KEY',    $_ENV['LOGGED_IN_KEY'] );
define( 'NONCE_KEY',        $_ENV['NONCE_KEY'] );

define( 'AUTH_SALT',        $_ENV['AUTH_SALT'] );
define( 'SECURE_AUTH_SALT', $_ENV['SECURE_AUTH_SALT'] );
define( 'LOGGED_IN_SALT',   $_ENV['LOGGED_IN_SALT'] );
define( 'NONCE_SALT',       $_ENV['NONCE_SALT'] );

$table_prefix = 'wp_';

define( 'WP_DEBUG', false );

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', false );

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';