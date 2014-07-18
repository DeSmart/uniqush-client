<?php namespace DeSmart\Uniqush;

use Guzzle\Http\Client as HttpClient;

class Client
{

    protected $http;

    public function __construct($url, HttpClient $http = null)
    {
        $this->http = $http ?: new HttpClient;
        $this->http->setBaseUrl($url);
    }

    /**
     * Push message to subscribers
     *
     * @param string $serviceName
     * @param string $message
     * @param string|array $subscriber
     * @return boolean
     */
    public function push($serviceName, $message, $subscriber)
    {

        if (true === is_array($subscriber)) {
            $subscriber = join(',', $subscriber);
        }

        $request = $this->http->get('/push', array(), array(
            'query' => array(
                'service' => $serviceName,
                'subscriber' => $subscriber,
                'msg' => $message,
            ),
        ));

        $this->http->send($request);

        return true;
    }
}
