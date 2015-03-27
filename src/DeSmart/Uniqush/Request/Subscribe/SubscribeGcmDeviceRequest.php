<?php namespace DeSmart\Uniqush\Request\Subscribe;

use DeSmart\Uniqush\Request\RequestInterface;

class SubscribeGcmDeviceRequest implements RequestInterface
{

    protected $serviceName;

    protected $subscriber;

    protected $regId;

    public function __construct($serviceName, $subscriber, $regId)
    {
        $this->serviceName = $serviceName;
        $this->subscriber = $subscriber;
        $this->regId = $regId;
    }

    public function getUrl()
    {
        return '/subscribe';
    }

    public function getQuery()
    {
        return array(
            'service' => 'test',
            'subscriber' => 'john',
            'pushservicetype' => 'gcm',
            'regid' => '123',
        );
    }
}
