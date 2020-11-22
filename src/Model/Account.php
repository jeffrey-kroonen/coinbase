<?php

namespace Crownsdevelopment\Coinbase\Model;

/**
 * Class Account.
 * 
 * @package Crownsdevelopment\Coinbase\Model
 * @author Jeffrey Kroonen <jeffreykroonen@gmail.com>
 */
class Account extends Base
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $primary;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var array
     */
    private $balance;

    /**
     * @var string
     */
    private $created_at;

    /**
     * @var string
     */
    private $updated_at;

    /**
     * @var string
     */
    private $resource;

    /**
     * @var string
     */
    private $resource_path;

    /**
     * Get the value of id
     *
     * @return  string
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param  string  $id
     *
     * @return  self
     */ 
    public function setId(string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param  string  $name
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of primary
     *
     * @return  string
     */ 
    public function getPrimary()
    {
        return $this->primary;
    }

    /**
     * Set the value of primary
     *
     * @param  string  $primary
     *
     * @return  self
     */ 
    public function setPrimary(string $primary)
    {
        $this->primary = $primary;

        return $this;
    }

    /**
     * Get the value of type
     *
     * @return  string
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @param  string  $type
     *
     * @return  self
     */ 
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of currency
     *
     * @return  string
     */ 
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set the value of currency
     *
     * @param  string  $currency
     *
     * @return  self
     */ 
    public function setCurrency(string $currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get the value of balance
     *
     * @return  array
     */ 
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Set the value of balance
     *
     * @param  array  $balance
     *
     * @return  self
     */ 
    public function setBalance(array $balance)
    {
        $this->balance = $balance;

        return $this;
    }

    /**
     * Get the value of created_at
     *
     * @return  string
     */ 
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @param  string  $created_at
     *
     * @return  self
     */ 
    public function setCreated_at(string $created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of updated_at
     *
     * @return  string
     */ 
    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     *
     * @param  string  $updated_at
     *
     * @return  self
     */ 
    public function setUpdated_at(string $updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * Get the value of resource
     *
     * @return  string
     */ 
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Set the value of resource
     *
     * @param  string  $resource
     *
     * @return  self
     */ 
    public function setResource(string $resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * Get the value of resource_path
     *
     * @return  string
     */ 
    public function getResource_path()
    {
        return $this->resource_path;
    }

    /**
     * Set the value of resource_path
     *
     * @param  string  $resource_path
     *
     * @return  self
     */ 
    public function setResource_path(string $resource_path)
    {
        $this->resource_path = $resource_path;

        return $this;
    }
}