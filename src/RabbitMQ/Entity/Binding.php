<?php

namespace RabbitMQ\Entity;

class Binding extends AbstractEntity
{
    public $source;
    public $vhost;
    public $destination;
    public $destination_type;
    public $routing_key;
    public $arguments;
    public $properties_key;
    
    protected function getJsonParameters()
    {
        return array('routing_key', 'arguments');
    }
}
