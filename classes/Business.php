<?php
namespace Valarep\classes;

use \Exception;
use \JsonSerializable;

abstract class Business implements JsonSerializable 
{

function __get($property)
    {
        echo "get" .$property  .PHP_EOL; // "\r\n"
        $this->check_property($property);
        $this->check_method("get_".$property);
        $class = get_class($this);
        if(!property_exists($this,$property))
        {
            throw new expection ("Undefined property $property in $class");
        }

        function check_property($property)
        {
            $class = get_class($this);
            if(!property_exists($this,$property))
            {
                throw new expection ("Undefined property $property in $class");
        }
    }

    function check_method($method)
    {
        $class = get_class($this);
        if(!method_exists($this,$method))
        {
            throw new expection ("Undefined method $method in $class");
        }
    }
}
}