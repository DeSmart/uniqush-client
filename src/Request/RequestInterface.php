<?php namespace DeSmart\Uniqush\Request;

interface RequestInterface
{
    /**
     * Return an url where request will be send.
     *
     * @return string
     */
    public function getUrl();

    /**
     * Return an array with request param.
     *
     * @return array
     */
    public function getQuery();
}
