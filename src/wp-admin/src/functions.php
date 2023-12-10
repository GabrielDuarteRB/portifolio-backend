<?php

$default_theme = wp_get_theme();

define('THE_MINIMAL_THEME_VERSION', $default_theme->get('Version'));

define('THE_MINIMAL_THEME_NAME', $default_theme->get('Name'));

add_theme_support('post-thumbnails');

define('PORTIFOLIO_TEMPLATE_DIR_URI', get_template_directory_uri());
define('PORTIFOLIO_TEMPLATE_DIR', get_template_directory());
define('PORTIFOLIO_THEME_FUNCTION_PATH', PORTIFOLIO_TEMPLATE_DIR . '/functions');

require(PORTIFOLIO_TEMPLATE_DIR . '/custom-posts-types/about_me_post_type.php');
require(PORTIFOLIO_TEMPLATE_DIR . '/custom-posts-types/my_works_post_type.php');
require(PORTIFOLIO_TEMPLATE_DIR . '/custom-posts-types/skills_post_type.php');
require(PORTIFOLIO_TEMPLATE_DIR . '/custom-posts-types/experience_post_type.php');
require(PORTIFOLIO_TEMPLATE_DIR . '/custom-posts-types/contact_post_type.php');
require(PORTIFOLIO_TEMPLATE_DIR . '/custom-posts-types/my_services_post_type.php');
require(PORTIFOLIO_TEMPLATE_DIR . '/custom-posts-types/resume_post_type.php');