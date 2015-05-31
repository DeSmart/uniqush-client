<?php namespace DeSmart\Uniqush\Request\Unsubscribe;

use DeSmart\Uniqush\Request\RequestInterface;

abstract class AbstractUnsubscribeDeviceRequest implements RequestInterface
{
    /**
     * Return an url where request will be send.
     *
     * @return string
     */
    final public function getUrl()
    {
        return '/unsubscribe';
    }
}
