<?php

/**
 * Qualiproof Gateway for PHP
 *
 * @package  Qualiproof
 * @author   Enver Morina <emorinaj@agroviva.de>
 */

namespace Qualiproof;

class RpcPropertyItem
{
    public $key;
    public $value;

    public function __construct(string $key = '', string $value = '')
    {
        $this->key = $key;
        $this->value = $value;
    }

    public function getKey()
    {
        return $this->key;
    }

    public function setKey(string $key)
    {
        $this->key = $key;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue(string $value)
    {
        $this->value = $value;
    }
}
