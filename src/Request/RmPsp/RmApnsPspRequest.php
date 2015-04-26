<?php namespace DeSmart\Uniqush\Request\RmPsp;

class RmApnsPspRequest extends AbstractRmPspRequest
{
    /**
     * @var string
     */
    protected $serviceName;

    /**
     * @var string
     */
    protected $cert;

    /**
     * @var string
     */
    protected $key;

    public function __construct($serviceName, $cert, $key)
    {
        $this->serviceName = $serviceName;
        $this->cert = $cert;
        $this->key = $key;
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
            'pushservicetype' => 'apns',
            'cert' => $this->cert,
            'key' => $this->key,
        );
    }
}
