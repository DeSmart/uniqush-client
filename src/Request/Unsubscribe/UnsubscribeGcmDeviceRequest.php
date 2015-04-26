<?php namespace DeSmart\Uniqush\Request\Unsubscribe;

use DeSmart\Uniqush\Request\RequestInterface;

class UnsubscribeGcmDeviceRequest implements RequestInterface
{
    /**
     * @var string
     */
    protected $service;

    /**
     * @var string
     */
    protected $subscriber;

    /**
     * @var string
     */
    protected $regId;

    public function __construct($service, $subscriber, $regId)
    {
        $this->service = $service;
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
        return '/unsubscribe';
    }

    /**
     * Return an array with request param.
     *
     * @return array
     */
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
