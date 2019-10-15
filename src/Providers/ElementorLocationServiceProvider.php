<?php
namespace App\Providers;

use ElementorPro\Modules\ThemeBuilder\Classes\Locations_Manager;

class ElementorLocationServiceProvider
{
    public function __construct()
    {
        $this->boot();
    }
    
    public function boot(): void
    {
        \add_action('elementor/theme/register_locations', [__CLASS__, 'registerFooter']);
    }
    
    public static function registerFooter(Locations_Manager $locationsManager)
    {
        $locationsManager->register_location(
            'footer',
            [
                'label'             => \__('Footer'),
                'multiple'          => false,
                'edit_in_content'   => false
            ]
        );
    }
}
