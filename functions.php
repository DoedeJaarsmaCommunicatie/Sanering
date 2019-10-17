<?php
use Timber\Timber;

include_once get_stylesheet_directory() . '/vendor/autoload.php';

add_theme_support('custom-logo');

$updates = \Puc_v4_Factory::buildUpdateChecker(
'https://github.com/DoedeJaarsmaCommunicatie/Sanering',
__FILE__,
'sanering',
'2'
);

Timber::$locations = [
    get_stylesheet_directory() . '/templates/',
];
