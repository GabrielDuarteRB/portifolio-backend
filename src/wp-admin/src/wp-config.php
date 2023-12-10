<?php
define('DB_NAME', 'wpdb');
define('DB_USER', 'wpuser');
define('DB_PASSWORD', 'wppass');
define('DB_HOST', 'db'); // Pode variar dependendo do ambiente

define('WP_DEBUG', false);
define('WP_SITEURL', 'localhost');
define('WP_HOME', 'localhost');
define('WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content');
define('WP_CONTENT_URL', 'http://localhost/admin/wp-content');

define('AUTH_KEY',         'coloque_aqui_uma_chave_aleatoria');
define('SECURE_AUTH_KEY',  'coloque_aqui_uma_chave_aleatoria');
define('LOGGED_IN_KEY',    'coloque_aqui_uma_chave_aleatoria');
define('NONCE_KEY',        'coloque_aqui_uma_chave_aleatoria');
define('AUTH_SALT',        'coloque_aqui_uma_chave_aleatoria');
define('SECURE_AUTH_SALT', 'coloque_aqui_uma_chave_aleatoria');
define('LOGGED_IN_SALT',   'coloque_aqui_uma_chave_aleatoria');
define('NONCE_SALT',       'coloque_aqui_uma_chave_aleatoria');

$table_prefix  = 'wp_'; // Prefixo para tabelas do banco de dados. Altere se necessário.

if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');