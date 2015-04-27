<?php namespace DeSmart\Uniqush;

use Guzzle\Http\Client as HttpClient;
use DeSmart\Uniqush\Request\RequestInterface;

class Client
{
    /**
     * @var \Guzzle\Http\Client
     */
    protected $http;

    public function __construct($url, HttpClient $http = null)
    {
        $this->http = $http ?: new HttpClient;
        $this->http->setBaseUrl($url);
    }

    /**
     * Send request to Uniqush server
     *
     * @param \DeSmart\Uniqush\Request\RequestInterface $request
     * @return string
     */
    public function send(RequestInterface $request)
    {
        $guzzle_request = $this->http->post($request->getUrl(), array(), $request->getQuery());
        $response = $this->http->send($guzzle_request);

        return $response->__toString();
    }
}
