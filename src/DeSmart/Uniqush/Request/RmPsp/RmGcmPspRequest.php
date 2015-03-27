<?php namespace DeSmart\Uniqush\Request\RmPsp;

use DeSmart\Uniqush\Request\RequestInterface;

class RmGcmPspRequest implements RequestInterface
{

    protected $serviceName;

    protected $projectId;

    public function __construct($serviceName, $projectId)
    {
        $this->serviceName = $serviceName;
        $this->projectId = $projectId;
    }

    public function getUrl()
    {
        return '/rmpsp';
    }

    public function getQuery()
    {
        return array(
            'service' => $this->serviceName,
            'pushservicetype' => 'gcm',
            'projectid' => $this->projectId,
        );
    }
}
