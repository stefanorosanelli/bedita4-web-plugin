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

use BEdita\API\Controller\AppController as BaseController;
use Cake\Event\Event;

/**
 * Main  'BEdita/Web' controller
 */
class AppController extends BaseController
{

    use WebViewTrait;

    /**
     * {@inheritDoc}
     *
     * @codeCoverageIgnore
     */
    public function initialize()
    {
        parent::initialize();
        $this->initWebView();
    }

    /**
     * {@inheritDoc}
     *
     * Always allow display - also on bad/missing accept header
     *
     * @codeCoverageIgnore
     */
    public function beforeFilter(Event $event)
    {
    }
}
