<?php

use Timber\Post;

$context = \Timber\Timber::get_context();

$context['post'] = new Post();

return \Timber\Timber::render(
    [
        \App\Helpers\Template::viewHtmlTwigFile('page.html.twig'),
    ],
    $context
);
