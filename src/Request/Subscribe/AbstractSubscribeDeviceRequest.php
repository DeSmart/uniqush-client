<?php namespace DeSmart\Uniqush\Request\Subscribe;

use DeSmart\Uniqush\Request\RequestInterface;

abstract class AbstractSubscribeDeviceRequest implements RequestInterface
{
    /**
     * Return an url where request will be send.
     *
     * @return string
     */
    final public function getUrl()
    {
        return '/subscribe';
    }
}
