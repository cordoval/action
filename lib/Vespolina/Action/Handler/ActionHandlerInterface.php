<?php

/**
 * (c) 2011 - ∞ Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vespolina\Action\Handler;

use Vespolina\Entity\Action\ActionInterface;
use Vespolina\Entity\Action\ActionDefinitionInterface;

/**
 * An interface to handle the lifetime of an action
 *
 * @author Daniel Kucharski <daniel@xerias.be>
 */
interface ActionHandlerInterface
{
    /**
     * Create a new action out of an action definition
     */
    function createAction(ActionDefinitionInterface $definition);
    
    /**
     * Verify if we are allowed to reprocess the given action
     */
    function isReprocessable(ActionInterface $action, ActionDefinitionInterface $definition);
}