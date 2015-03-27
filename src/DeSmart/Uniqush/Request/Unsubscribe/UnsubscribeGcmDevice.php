<?php namespace DeSmart\Uniqush\Request\Unsubscribe;

use DeSmart\Uniqush\Request\RequestInterface;

class UnsubscribeGcmDevice implements RequestInterface
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
        return '/unsubscribe';
    }

    public function getQuery()
    {
        return array(
            'service' => $this->service,
            'subscriber' => $this->subscriber,
            'pushservicetype' => 'gcm',
            'regid' => $this->regId,
        );
    }
}
