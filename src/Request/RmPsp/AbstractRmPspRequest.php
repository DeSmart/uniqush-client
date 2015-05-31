<?php namespace DeSmart\Uniqush\Request\RmPsp;

use DeSmart\Uniqush\Request\RequestInterface;

abstract class AbstractRmPspRequest implements RequestInterface
{
    /**
     * Return an url where request will be send.
     *
     * @return string
     */
    final public function getUrl()
    {
        return '/rmpsp';
    }
}
