<?php

namespace App\Service\Coinbase\Model;

use App\Service\Coinbase\Utility\Collection;

/**
 * Abstract class Base.
 * 
 * @package App\Service\Coinbase\Model
 * @author Jeffrey Kroonen <jeffreykroonen@gmail.com>
 */
abstract class Base
{

    /**
     * If parameter is of type array the currently exteding class
     * will check if method is exists. When it does exists, the propery will be set dynamicly.
     * 
     * @param null|array $potentialObject
     */
    public function __construct($potentialObject = null)
    {
        if (is_array($potentialObject)) {
            foreach ($potentialObject as $column => $value) {
                
                $method = 'set' . ucfirst($column);
                if (method_exists($this, $method)) {
                    $this->$method($value);
                }
                
            }
        }
    }

}