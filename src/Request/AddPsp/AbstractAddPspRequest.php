<?php namespace DeSmart\Uniqush\Request\AddPsp;

use DeSmart\Uniqush\Request\RequestInterface;

abstract class AbstractAddPspRequest implements RequestInterface
{
    /**
     * Return an url where request will be send.
     *
     * @return string
     */
    final public function getUrl()
    {
        return '/addpsp';
    }
}