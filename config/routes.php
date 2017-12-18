<?php
/**
 * BEdita, API-first content management framework
 * Copyright 2017 ChannelWeb Srl, Chialab Srl
 *
 * This file is part of BEdita: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published
 * by the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * See LICENSE.LGPL or <http://gnu.org/licenses/lgpl-3.0.html> for more details.
 */

use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

// To activate it use "'routes' => true" option in `Plugin' configuration

Router::plugin(
    'BEdita/Web',
    [
        'path' => '/',
    ],
    function (RouteBuilder $routes) {
        $routes->connect(
            '/web',
            ['controller' => 'Dashboard', 'action' => 'display', 'method' => 'GET']
        );

        // GET => list items
        // POST => create new item
        $routes->connect(
            '/web/:object_type',
            ['controller' => 'Modules', 'action' => 'index']
        );

        // GET => view item
        // PATCH => edit item
        // DELETE => remove item
        $routes->connect(
            '/web/:object_type/:id',
            ['controller' => 'Modules', 'action' => 'resource'],
            ['pass' => ['id']]
        );

        $routes->fallbacks(DashedRoute::class);
    }
);
