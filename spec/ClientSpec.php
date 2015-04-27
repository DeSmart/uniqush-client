<?php

namespace spec\DeSmart\Uniqush;

use Prophecy\Argument;
use PhpSpec\ObjectBehavior;
use Guzzle\Http\EntityBodyInterface;
use Guzzle\Http\Client as HttpClient;
use Guzzle\Http\Message\RequestInterface;
use DeSmart\Uniqush\Request\RequestInterface as UniqushRequest;

class ClientSpec extends ObjectBehavior
{

    function let($url, HttpClient $http)
    {
        $this->beConstructedWith($url, $http);
        $http->setBaseUrl($url)->shouldBeCalled();
    }

    function it_sends_requests(HttpClient $http, UniqushRequest $uniqushRequest, RequestInterface $request, EntityBodyInterface $responseBody)
    {
        $uniqushRequest->getUrl()->willReturn('/push');
        $uniqushRequest->getQuery()->willReturn($query = array(
            'service' => 'test',
            'subscriber' => 'foo',
            'msg' => 'bar',
        ));

        $http->post('/push', array(), $query)->shouldBeCalled()
            ->willReturn($request);

        $http->send($request)->shouldBeCalled()
            ->willReturn($responseBody);

        $responseBody->__toString()->willReturn('OK');

        $this->send($uniqushRequest)->shouldReturn('OK');
    }
}
