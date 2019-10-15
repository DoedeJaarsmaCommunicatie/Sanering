<?php
namespace App;

use App\Providers\ElementorLocationServiceProvider;
use App\Providers\MenuServiceProvider;

return [
	'providers'     => [
	    MenuServiceProvider::class,
        ElementorLocationServiceProvider::class
    ]
];
