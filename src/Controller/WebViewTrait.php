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

namespace BEdita\Web\Controller;

use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Routing\Router;

/**
 * Web controllers common trait
 */
trait WebViewTrait
{

    /**
     * Initialize Web View
     *
     * @return void
     */
    public function initWebView()
    {
        if ($this->components()->has('JsonApi')) {
            $this->components()->unload('JsonApi');
        }
        $this->viewBuilder()
            ->setPlugin('BEdita/Web')
            ->setClassName('BEdita\Web\View\AppView');

        $this->set('baseUrl', Router::url('/web'));
        $this->loadModules();
    }

    /**
     * Load available modules
     *
     * @return void
     */
    protected function loadModules()
    {
        $this->set('modules', TableRegistry::get('ObjectTypes')->find('all')->toArray());
    }
}
