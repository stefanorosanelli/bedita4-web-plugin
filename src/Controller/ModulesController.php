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

use BEdita\API\Controller\ObjectsController;
use Cake\Event\Event;

/**
 * Modules controller: list, add, edit, remove items (default objects)
 */
class ModulesController extends ObjectsController
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
     * @codeCoverageIgnore
     */
    public function beforeFilter(Event $event)
    {
        $this->set('currentModule', $this->objectType);
    }

    /**
     * Display items index
     *
     * @return void
     */
    public function index()
    {
        parent::index();
    }

    /**
     * View, edit or delete item
     *
     * @param mixed $id Item ID.
     * @return void
     */
    public function resource($id)
    {
        if ($id === 'new' && $this->request->is('get')) {
            $this->set('object', $this->Table->newEntity());

            return;
        }
        parent::resource($id);
        $this->set('object', $this->viewVars['entity']);
    }
}
