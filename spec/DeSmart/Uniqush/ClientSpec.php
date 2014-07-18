<?php

namespace spec\DeSmart\Uniqush;

use Prophecy\Argument;
use PhpSpec\ObjectBehavior;
use Guzzle\Http\Client as HttpClient;
use Guzzle\Http\Message\RequestInterface;

class ClientSpec extends ObjectBehavior
{

    function let($url, HttpClient $http)
    {
        $this->beConstructedWith($url, $http);
        $http->setBaseUrl($url)->shouldBeCalled();
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('DeSmart\Uniqush\Client');
    }

    function it_sends_push_message(HttpClient $http, RequestInterface $request)
    {
        $service = 'test';
        $subscriber = 'foo';
        $msg = 'simple message';

        $http->get('/push', array(), array(
                'query' => compact('service', 'subscriber', 'msg'),
            ))
            ->shouldBeCalled()
            ->willReturn($request);

        $http->send($request)->shouldBeCalled();

        $this->push($service, $msg, $subscriber)
            ->shouldReturn(true);
    }

    function it_sends_push_message_to_many(HttpClient $http, RequestInterface $request)
    {
        $service = 'test';
        $subscriber = array('foo', 'bar');
        $msg = 'simple message';

        $http->get('/push', array(), array(
                'query' => array(
                    'service' => $service,
                    'msg' => $msg,
                    'subscriber' => 'foo,bar',
                )
            ))
            ->shouldBeCalled()
            ->willReturn($request);

        $http->send($request)->shouldBeCalled();

        $this->push($service, $msg, $subscriber)
            ->shouldReturn(true);
    }
}
