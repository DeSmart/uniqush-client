<?php namespace DeSmart\Uniqush\Request\Subscribe;

use DeSmart\Uniqush\Request\RequestInterface;

class SubscribeGcmDeviceRequest implements RequestInterface
{
    /**
     * @var string
     */
    protected $serviceName;

    /**
     * @var string
     */
    protected $subscriber;

    /**
     * @var string
     */
    protected $regId;

    public function __construct($serviceName, $subscriber, $regId)
    {
        $this->serviceName = $serviceName;
        $this->subscriber = $subscriber;
        $this->regId = $regId;
    }

    /**
     * Return an url where request will be send.
     *
     * @return string
     */
    public function getUrl()
    {
        return '/subscribe';
    }

    /**
     * Return an array with request param.
     *
     * @return array
     */
    public function getQuery()
    {
        return array(
            'service' => $this->serviceName,
            'subscriber' => $this->subscriber,
            'pushservicetype' => 'gcm',
            'regid' => $this->regId,
        );
    }
}
