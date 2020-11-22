<?php

namespace Crownsdevelopment\Coinbase;

use Crownsdevelopment\Coinbase\Model\PaymentMethod;
use Crownsdevelopment\Coinbase\Utility\Collection;
use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * class Client.
 * 
 * The Client will be used for all connectivity with Coinbase.
 * 
 * @package Crownsdevelopment\Coinbase
 * @author Jeffrey Kroonen <jeffreykroonen@gmaill.com>
 */
class Client
{
    private $httpClient;

    private $apiKey;

    private $apiSecret;

    private $apiSign;

    private const BASE_URL = 'https://api.coinbase.com/v2';

    /**
     * Initialize client by setting the required properties.
     * 
     */
    public function __construct(HttpClientInterface $httpClientInterface)
    {
        $this->httpClient = $httpClientInterface;
        $this->apiKey = $_ENV['COINBASE_API_KEY'];
        $this->apiSecret = $_ENV['COINBASE_API_SECRET'];
    }

    /**
     * Get the value of apiKey
     */ 
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * Get the value of apiSecret
     */ 
    public function getApiSecret()
    {
        return $this->apiSecret;
    }


    /**
     * Get the value of apiSign
     */ 
    public function getApiSign()
    {
        return $this->apiSign;
    }

    /**
     * Set the value of apiSign
     *
     * @return  self
     */ 
    public function setApiSign($apiSign)
    {
        $this->apiSign = $apiSign;

        return $this;
    }

    /**
     * Create SHA256 HMAC key to use in the CB-ACCESS-SIGN header.
     * 
     * @param string $requestPath
     * @param string|array $body
     * @param false|string $timestamp MUST be number of seconds since Unix Epoch in UTC. Decimal values are allowed.
     * @param string $method
     * @return string Returns a signature.
     * @access private
     */
    private function createSignature($requestPath = '', $body = '', $timestamp = false, $method = 'GET')
    {
        $body = is_array($body) ? json_encode($body) : $body;
        $timestamp = $timestamp ? $timestamp : time();

        $what = $timestamp.$method.$requestPath.$body;

        return base64_encode(hash_hmac("sha256", $what, base64_decode($this->apiSecret), true));
    }

    /**
     * Generate headers for each HTTP request.
     * 
     * @param string $requestPath The path is needed for authorization.
     * @access private
     */
    private function getHeaders($requestPath)
    {
        $timestamp = time();

        $signature = $this->createSignature($requestPath, '', $timestamp, 'GET');
        $this->setApiSign($signature);

        return [
            'Content-Type' => 'application/json',
            'CB-ACCESS-KEY' => $this->getApiKey(),
            'CB-ACCESS-SIGN' => $this->getApiSign(),
            'CB-ACCESS-TIMESTAMP' => $timestamp
        ];
    }

    /**
     * Get payment methods.
     * 
     * @throws Excpeption
     * @return Coinbase\Utility\Collection;
     */
    public function getPaymentMethods()
    {
        $requestPath = '/payment-methods';

        try {
            $response = $this->httpClient->request('GET', self::BASE_URL . $requestPath, [
                'headers' => $this->getHeaders($requestPath)
            ]);

            $collection = new Collection();
            dd($response->toArray());
            foreach ($response->toArray() as $potentialObject) {
                $collection->addItem(new PaymentMethod($potentialObject), $potentialObject['id']);
            }
    
            return $collection;

        } catch (\Exception $e) {
            throw $e;
        }
    }

}