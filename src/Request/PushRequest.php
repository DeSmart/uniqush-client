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

    /**
     * @var string
     */
    protected $sound;

    /**
     * @var string
     */
    protected $userDefinedParam;

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
        $query = array(
            'service' => $this->serviceName,
            'subscriber' => is_array($this->subscriber) ? join(',', $this->subscriber) : $this->subscriber,
            'msg' => $this->message,
        );

        if (null !== $this->sound) {
            $query['sound'] = $this->sound;
        }

        if (null !== $this->userDefinedParam) {
            $query['userdefinedparam'] = $this->userDefinedParam;
        }

        return $query;
    }

    /**
     * @param string $message
     * @return void
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @param string $sound
     * @return void
     */
    public function setSound($sound)
    {
        $this->sound = $sound;
    }

    /**
     * @param string $userDefinedParam
     * @return void
     */
    public function setUserDefinedParam($userDefinedParam)
    {
        $this->userDefinedParam = $userDefinedParam;
    }
}
