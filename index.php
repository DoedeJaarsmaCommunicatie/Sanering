<?php

$context = \Timber\Timber::get_context();

return \Timber\Timber::render(
    [
        \App\Helpers\Template::viewHtmlTwigFile('page.html.twig'),
    ],
    $context
);
