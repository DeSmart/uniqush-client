<?php namespace DeSmart\Uniqush\Request\Subscribe;

class SubscribeGcmDeviceRequest extends AbstractSubscribeDeviceRequest
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
     * Return an array with request param.
     *
     * @return array
     */
    public function getQuery()
    {
        return [
            'service' => $this->serviceName,
            'subscriber' => $this->subscriber,
            'pushservicetype' => 'gcm',
            'regid' => $this->regId,
        ];
    }
}
