<?php namespace DeSmart\Uniqush\Request\AddPsp;

use DeSmart\Uniqush\Request\RequestInterface;

class AddGcmPsp implements RequestInterface
{

    protected $serviceName;

    protected $projectId;

    protected $apiKey;

    public function __construct($serviceName, $projectId, $apiKey)
    {
        $this->serviceName = $serviceName;
        $this->projectId = $projectId;
        $this->apiKey = $apiKey;
    }

    public function getUrl()
    {
        return '/addpsp';
    }

    public function getQuery()
    {
        return array(
            'service' => $this->serviceName,
            'pushservicetype' => 'gcm',
            'projectid' => $this->projectId,
            'apikey' => $this->apiKey,
        );
    }
}
