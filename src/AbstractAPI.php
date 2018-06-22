<?php
/**
 * @author Bc. Marek Fajfr <mfajfr90(at)gmail.com>
 * Created at: 9:42 22.06.2018
 */

namespace MagentoAPI;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Subscriber\Oauth\Oauth1;
use Psr\Http\Message\ResponseInterface;

class AbstractAPI
{
    /**
     * @var Configuration
     */
    protected $config;

    /**
     * Configuration constructor.
     * @param Configuration $configuration
     */
    public function __construct(Configuration $configuration)
    {
        $this->config = $configuration;
    }

    protected function oauth()
    {
        return new Oauth1([
            'consumer_key'    => $this->config->getConsumerKey(),
            'consumer_secret' => $this->config->getConsumerSecret(),
            'token'           => $this->config->getToken(),
            'token_secret'    => $this->config->getTokenSecret()
        ]);
    }

    protected function client($force = false)
    {
        $stack = HandlerStack::create();
        $stack->push($this->oauth());

        return new Client([
            'base_uri' => $this->getBaseUri(),
            'handler'  => $stack,
            'auth'     => 'oauth'
        ]);
    }

    public function response(ResponseInterface $response, $onlyData = true)
    {
        if ($onlyData) {
            return json_decode($response->getBody()->getContents());
        } else {
            return $response;
        }
    }

    public function get($uri)
    {
        return $this->client()->get($uri);
    }

    public function getBaseUri()
    {
        return $this->config->getBaseUri();
    }
}