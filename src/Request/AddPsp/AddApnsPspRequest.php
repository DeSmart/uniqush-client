<?php namespace DeSmart\Uniqush\Request\AddPsp;

class AddApnsPspRequest extends AbstractAddPspRequest
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

    /**
     * @var bool
     */
    protected $sandbox;

    public function __construct($serviceName, $cert, $key, $sandbox = false)
    {
        $this->serviceName = $serviceName;
        $this->cert = $cert;
        $this->key = $key;
        $this->sandbox = $sandbox;
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
            'sandbox' => $this->sandbox ? 'true' : 'false',
        );
    }
}
