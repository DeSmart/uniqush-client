<?php namespace DeSmart\Uniqush\Request\RmPsp;

use DeSmart\Uniqush\Request\RequestInterface;

class RmGcmPspRequest implements RequestInterface
{
    /**
     * @var string
     */
    protected $serviceName;

    /**
     * @var string
     */
    protected $projectId;

    public function __construct($serviceName, $projectId)
    {
        $this->serviceName = $serviceName;
        $this->projectId = $projectId;
    }

    /**
     * Return an url where request will be send.
     *
     * @return string
     */
    public function getUrl()
    {
        return '/rmpsp';
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
            'pushservicetype' => 'gcm',
            'projectid' => $this->projectId,
        );
    }
}
