<?php namespace DeSmart\Uniqush\Request;

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
     * @var string
     */
    protected $message;

    public function __construct($serviceName, $subscriber)
    {
        $this->serviceName = $serviceName;
        $this->subscriber = $subscriber;
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
        return array(
            'service' => $this->serviceName,
            'subscriber' => is_array($this->subscriber) ? join(',', $this->subscriber) : $this->subscriber,
            'msg' => $this->message,
        );
    }

    /**
     * @param string $message
     * @return void
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }
}
