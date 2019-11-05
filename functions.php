<?php

include_once get_stylesheet_directory() . '/vendor/autoload.php';

use Timber\Timber;

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

function remediation_register_elementor_locations( $elementor_theme_manager ) {
     $elementor_theme_manager->register_location( 'archive' );
}
add_action( 'elementor/theme/register_locations', 'remediation_register_elementor_locations' );
