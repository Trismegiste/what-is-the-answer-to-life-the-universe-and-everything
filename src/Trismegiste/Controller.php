<?php

/*
 * Photobook
 */

namespace Trismegiste;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Finder\Finder;

class Controller
{

    public function home(Request $request, Application $app)
    {
        $fnd = new Finder();
        $iter = $fnd->files()
                ->in(dirname($app['webdir']) . '/views')
                ->path('answer')
                ->name('*.html.twig');

        $choice = iterator_to_array($iter);
        shuffle($choice);

        return $app->render($choice[0]->getRelativePathname());
    }

}