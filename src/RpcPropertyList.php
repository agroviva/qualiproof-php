<?php

namespace Qualiproof;

class RpcPropertyList
{
    public $name;
    public $properties;
    public $children;

    public function __construct($name, $properties)
    {
        $this->setName($name);
        $this->setProperties($properties);
    }

    public function getChildren()
    {
        return $this->children;
    }

    public function setChildren(self $children)
    {
        $this->children = $children;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getProperties()
    {
        return $this->properties;
    }

    public function setProperties(RpcPropertyItem $properties)
    {
        $this->properties[] = $properties;
    }

    public function toProperties(array $properties)
    {
        foreach ($properties as $key => $value) {
            if (is_array($value)) {
                $this->toProperties($value);
            } else {
                $this->setProperties(new RpcPropertyItem($key, $value));
            }
        }
    }
}
