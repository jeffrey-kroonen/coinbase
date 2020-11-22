<?php

namespace Crownsdevelopment\Coinbase\Utility;

/**
 * Class Collection.
 * 
 * Used to create collection of objects.
 * 
 * @package Crownsdevelopment\Coinbase\Utility
 * @author Jeffrey Kroonen <jeffreykroonen@gmail.com>
 */
class Collection
{
    /**
     * @var array
     */
    private $items = [];

    /**
     * Add object to collection.
     * 
     * @throws KeyHasUseException
     * @param object @obj The target object to add to the collection.
     * @param int $key The index in the collection.
     * @return void
     */
    public function addItem($obj, $key = null)
    {
        if (is_null($key)) {
            $this->items[] = $obj;
        } else {
            if (isset($this->items[$key])) {
                throw new KeyHasUseException(sprintf('Key %s already in use.', $key));
            } else {
                $this->items[$key] = $obj;
            }
        }
    }

    /**
     * Delete object in collection.
     * 
     * @throws KeyInvalidException
     * @param int $key The index in the collection.
     * @return void
     */
    public function deleteItem($key)
    {
        if (isset($this->items[$key])) {
            unset($this->items[$key]);
        } else {
            throw new KeyInvalidException(sprintf('Invalid key %s.', $key));
        }
    }

    /**
     * Get item from collection by given key.
     * 
     * @throws KeyInvalidException
     * @param int $key The index in the collection.
     * @return object Ttem from collection by given key.
     */
    public function getItem($key)
    {
        if (isset($this->items[$key])) {
            return $this->items[$key];
        }
        else {
            throw new KeyInvalidException("Invalid key $key.");
        }
    }

    /**
     * Get length of the collcetion.
     * 
     * @return int
     */
    public function length()
    {
        return count($this->items);
    }
    
}