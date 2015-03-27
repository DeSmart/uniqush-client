<?php namespace DeSmart\Uniqush\Request\Subscribe;

use DeSmart\Uniqush\Request\RequestInterface;

class SubscribeGcmDevice implements RequestInterface
{

    protected $service;

    protected $subscriber;

    protected $regId;

    public function __construct($service, $subscriber, $regId)
    {
        $this->service = $service;
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
