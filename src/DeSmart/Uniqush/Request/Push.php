<?php namespace DeSmart\Uniqush\Request;

class Push implements RequestInterface
{

    protected $serviceName;

    protected $subscriber;

    protected $message;

    public function __construct($serviceName, $subscriber)
    {
        $this->serviceName = $serviceName;
        $this->subscriber = $subscriber;
    }

    public function getUrl()
    {
        return '/push';
    }

    public function getQuery()
    {
        return array(
            'service' => $this->serviceName,
            'subscriber' => is_array($this->subscriber) ? join(',', $this->subscriber) : $this->subscriber,
            'msg' => $this->message,
        );
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }
}
