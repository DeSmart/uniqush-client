<?php namespace DeSmart\Uniqush\Request;

use DeSmart\Uniqush\ValueObject\Message;

class PushRequest implements RequestInterface
{
    /**
     * @var string
     */
    protected $serviceName;

    /**
     * @var string|array
     */
    protected $subscriber;

    /**
     * @var \DeSmart\Uniqush\ValueObject\Message
     */
    protected $message;

    public function __construct($serviceName, $subscriber, Message $message)
    {
        $this->serviceName = $serviceName;
        $this->subscriber = $subscriber;
        $this->message = $message;
    }

    /**
     * Return an url where request will be send.
     *
     * @return string
     */
    public function getUrl()
    {
        return '/push';
    }

    /**
     * Return an array with request param.
     *
     * @return array
     */
    public function getQuery()
    {
        return array_filter([
            'service' => $this->serviceName,
            'subscriber' => is_array($this->subscriber) ? join(',', $this->subscriber) : $this->subscriber,
            'msg' => $this->message->getContent(),
            'sound' => $this->message->getSound(),
            'badge' => $this->message->getBadge(),
            'ttl' => $this->message->getTtl(),
            'img' => $this->message->getImg(),
        ]);
    }
}
