<?php

namespace Crownsdevelopment\Coinbase\Model;

/**
 * Class Buy.
 * 
 * @package Crownsdevelopment\Coinbase\Model
 * @author Jeffrey Kroonen <jeffreykroonen@gmail.com>
 */
class Buy extends Base
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $status;

    /**
     * @var array
     */
    private $payment_method;

    /**
     * @var array
     */
    private $transaction;

    /**
     * @var array
     */
    private $amount;

    /**
     * @var array
     */
    private $total;

    /**
     * @var array
     */
    private $subtotal;

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
     * @var bool
     */
    private $committed;

    /**
     * @var bool
     */
    private $instant;

    /**
     * @var array
     */
    private $fee;

    /**
     * @var string
     */
    private $payedout_at;

    /**
     * Get the value of id
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param  int  $id
     *
     * @return  self
     */ 
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of status
     *
     * @return  string
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @param  string  $status
     *
     * @return  self
     */ 
    public function setStatus(string $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of payment_method
     *
     * @return  array
     */ 
    public function getPayment_method()
    {
        return $this->payment_method;
    }

    /**
     * Set the value of payment_method
     *
     * @param  array  $payment_method
     *
     * @return  self
     */ 
    public function setPayment_method(array $payment_method)
    {
        $this->payment_method = $payment_method;

        return $this;
    }

    /**
     * Get the value of transaction
     *
     * @return  array
     */ 
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * Set the value of transaction
     *
     * @param  array  $transaction
     *
     * @return  self
     */ 
    public function setTransaction(array $transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * Get the value of amount
     *
     * @return  array
     */ 
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set the value of amount
     *
     * @param  array  $amount
     *
     * @return  self
     */ 
    public function setAmount(array $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get the value of total
     *
     * @return  array
     */ 
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set the value of total
     *
     * @param  array  $total
     *
     * @return  self
     */ 
    public function setTotal(array $total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get the value of subtotal
     *
     * @return  array
     */ 
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * Set the value of subtotal
     *
     * @param  array  $subtotal
     *
     * @return  self
     */ 
    public function setSubtotal(array $subtotal)
    {
        $this->subtotal = $subtotal;

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
     * Get the value of committed
     *
     * @return  bool
     */ 
    public function getCommitted()
    {
        return $this->committed;
    }

    /**
     * Set the value of committed
     *
     * @param  bool  $committed
     *
     * @return  self
     */ 
    public function setCommitted(bool $committed)
    {
        $this->committed = $committed;

        return $this;
    }

    /**
     * Get the value of instant
     *
     * @return  bool
     */ 
    public function getInstant()
    {
        return $this->instant;
    }

    /**
     * Set the value of instant
     *
     * @param  bool  $instant
     *
     * @return  self
     */ 
    public function setInstant(bool $instant)
    {
        $this->instant = $instant;

        return $this;
    }

    /**
     * Get the value of fee
     *
     * @return  array
     */ 
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Set the value of fee
     *
     * @param  array  $fee
     *
     * @return  self
     */ 
    public function setFee(array $fee)
    {
        $this->fee = $fee;

        return $this;
    }

    /**
     * Get the value of payedout_at
     *
     * @return  string
     */ 
    public function getPayedout_at()
    {
        return $this->payedout_at;
    }

    /**
     * Set the value of payedout_at
     *
     * @param  string  $payedout_at
     *
     * @return  self
     */ 
    public function setPayedout_at(string $payedout_at)
    {
        $this->payedout_at = $payedout_at;

        return $this;
    }
}