<?php
/**
 * @author Bc. Marek Fajfr <mfajfr90(at)gmail.com>
 * Created at: 8:56 22.06.2018
 */

namespace MagentoAPI;

class Configuration
{
    /**
     * @var string
     */
    protected $base_uri;
    /**
     * @var string
     */
    protected $consumer_key;
    /**
     * @var string
     */
    protected $consumer_secret;
    /**
     * @var string
     */
    protected $token;
    /**
     * @var string
     */
    protected $token_secret;

    /**
     * Configuration constructor.
     * @param string $base_uri
     * @param string $consumer_key
     * @param string $consumer_secret
     * @param string $token
     * @param string $token_secret
     */
    public function __construct(string $base_uri, string $consumer_key, string $consumer_secret, string $token, string $token_secret)
    {
        $this->base_uri = $base_uri;
        $this->consumer_key = $consumer_key;
        $this->consumer_secret = $consumer_secret;
        $this->token = $token;
        $this->token_secret = $token_secret;
    }

    /**
     * @return string
     */
    public function getBaseUri(): string
    {
        return $this->base_uri;
    }

    /**
     * @return string
     */
    public function getConsumerKey(): string
    {
        return $this->consumer_key;
    }

    /**
     * @return string
     */
    public function getConsumerSecret(): string
    {
        return $this->consumer_secret;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @return string
     */
    public function getTokenSecret(): string
    {
        return $this->token_secret;
    }
}