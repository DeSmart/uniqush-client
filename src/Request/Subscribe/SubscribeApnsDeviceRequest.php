<?php namespace DeSmart\Uniqush\Request\Subscribe;

class SubscribeApnsDeviceRequest extends AbstractSubscribeDeviceRequest
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
    protected $devToken;

    public function __construct($serviceName, $subscriber, $devToken)
    {
        $this->serviceName = $serviceName;
        $this->subscriber = $subscriber;
        $this->devToken = $devToken;
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
            'pushservicetype' => 'apns',
            'devtoken' => $this->devToken,
        );
    }
}
