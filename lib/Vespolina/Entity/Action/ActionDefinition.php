<?php

/**
 * (c) 2011 - ∞ Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Vespolina\Entity\Action;

class ActionDefinition implements ActionDefinitionInterface
{
 
    protected $actionHandlerClass;
    protected $name;
    protected $parameters;
    protected $schedulingType;
    protected $topic;
    
    public function __construct($name, $topic = 'default')
    {
        $this->actionHandlerClass = 'Vespolina\Action\Handler\DefaultActionHandler';
        $this->name = $name;
        $this->topic = $topic;
    }    
    
    public function getActionHandlerClass()
    {
        return $this->actionHandlerClass;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function getParameters()
    {
        return $this->parameters;
    }

    public function getSchedulingType()
    {
        return $this->schedulingType;
    }
    
    public function getTopic()
    {
        return $this->topic;
    }
    
    public function isReprocessingAllowed()
    {
        return true;
    }
}
