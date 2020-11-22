<?php

namespace Crownsdevelopment\Coinbase\Model;

/**
 * Class PaymentMethod.
 * 
 * @package Crownsdevelopment\Coinbase\Model
 * @author Jeffrey Kroonen <jeffreykroonen@gmail.com>
 */
class PaymentMethod extends Base
{
    
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $type;

    /**
     * @var bool
     */
    private $verified;

    /**
     * @var string
     */
    private $verification_method;

    /**
     * @var string
     */
    private $cdv_status;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $currency;
    
    /**
     * @var bool
     */
    private $primary_buy;

    /**
     * @var bool
     */
    private $primary_sell;

    /**
     * @var bool
     */
    private $allow_buy;

    /**
     * @var bool
     */
    private $allow_sell;

    /**
     * @var bool
     */
    private $allow_deposit;

    /**
     * @var bool
     */
    private $allow_withdraw;

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
     * @var array
     */
    private $limits;

    /**
     * @var array
     */
    private $fiat_account;


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
     * Get the value of verified
     *
     * @return  bool
     */ 
    public function getVerified()
    {
        return $this->verified;
    }

    /**
     * Set the value of verified
     *
     * @param  bool  $verified
     *
     * @return  self
     */ 
    public function setVerified(bool $verified)
    {
        $this->verified = $verified;

        return $this;
    }

    /**
     * Get the value of verification_method
     *
     * @return  string
     */ 
    public function getVerification_method()
    {
        return $this->verification_method;
    }

    /**
     * Set the value of verification_method
     *
     * @param  string  $verification_method
     *
     * @return  self
     */ 
    public function setVerification_method(string $verification_method)
    {
        $this->verification_method = $verification_method;

        return $this;
    }

    /**
     * Get the value of cdv_status
     *
     * @return  string
     */ 
    public function getCdv_status()
    {
        return $this->cdv_status;
    }

    /**
     * Set the value of cdv_status
     *
     * @param  string  $cdv_status
     *
     * @return  self
     */ 
    public function setCdv_status(string $cdv_status)
    {
        $this->cdv_status = $cdv_status;

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
     * Get the value of primary_buy
     *
     * @return  bool
     */ 
    public function getPrimary_buy()
    {
        return $this->primary_buy;
    }

    /**
     * Set the value of primary_buy
     *
     * @param  bool  $primary_buy
     *
     * @return  self
     */ 
    public function setPrimary_buy(bool $primary_buy)
    {
        $this->primary_buy = $primary_buy;

        return $this;
    }

    /**
     * Get the value of primary_sell
     *
     * @return  bool
     */ 
    public function getPrimary_sell()
    {
        return $this->primary_sell;
    }

    /**
     * Set the value of primary_sell
     *
     * @param  bool  $primary_sell
     *
     * @return  self
     */ 
    public function setPrimary_sell(bool $primary_sell)
    {
        $this->primary_sell = $primary_sell;

        return $this;
    }

    /**
     * Get the value of allow_buy
     *
     * @return  bool
     */ 
    public function getAllow_buy()
    {
        return $this->allow_buy;
    }

    /**
     * Set the value of allow_buy
     *
     * @param  bool  $allow_buy
     *
     * @return  self
     */ 
    public function setAllow_buy(bool $allow_buy)
    {
        $this->allow_buy = $allow_buy;

        return $this;
    }

    /**
     * Get the value of allow_sell
     *
     * @return  bool
     */ 
    public function getAllow_sell()
    {
        return $this->allow_sell;
    }

    /**
     * Set the value of allow_sell
     *
     * @param  bool  $allow_sell
     *
     * @return  self
     */ 
    public function setAllow_sell(bool $allow_sell)
    {
        $this->allow_sell = $allow_sell;

        return $this;
    }

    /**
     * Get the value of allow_deposit
     *
     * @return  bool
     */ 
    public function getAllow_deposit()
    {
        return $this->allow_deposit;
    }

    /**
     * Set the value of allow_deposit
     *
     * @param  bool  $allow_deposit
     *
     * @return  self
     */ 
    public function setAllow_deposit(bool $allow_deposit)
    {
        $this->allow_deposit = $allow_deposit;

        return $this;
    }

    /**
     * Get the value of allow_withdraw
     *
     * @return  bool
     */ 
    public function getAllow_withdraw()
    {
        return $this->allow_withdraw;
    }

    /**
     * Set the value of allow_withdraw
     *
     * @param  bool  $allow_withdraw
     *
     * @return  self
     */ 
    public function setAllow_withdraw(bool $allow_withdraw)
    {
        $this->allow_withdraw = $allow_withdraw;

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

    /**
     * Get the value of limits
     *
     * @return  array
     */ 
    public function getLimits()
    {
        return $this->limits;
    }

    /**
     * Set the value of limits
     *
     * @param  array  $limits
     *
     * @return  self
     */ 
    public function setLimits(array $limits)
    {
        $this->limits = $limits;

        return $this;
    }

    /**
     * Get the value of fiat_account
     *
     * @return  array
     */ 
    public function getFiat_account()
    {
        return $this->fiat_account;
    }

    /**
     * Set the value of fiat_account
     *
     * @param  array  $fiat_account
     *
     * @return  self
     */ 
    public function setFiat_account(array $fiat_account)
    {
        $this->fiat_account = $fiat_account;

        return $this;
    }
   
}