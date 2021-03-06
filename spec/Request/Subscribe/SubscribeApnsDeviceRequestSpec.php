<?php

namespace spec\DeSmart\Uniqush\Request\Subscribe;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SubscribeApnsDeviceRequestSpec extends ObjectBehavior
{

    function let()
    {
        $this->beConstructedWith('test', 'john', '123');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('DeSmart\Uniqush\Request\Subscribe\SubscribeApnsDeviceRequest');
        $this->shouldImplement('DeSmart\Uniqush\Request\RequestInterface');
    }

    function it_returns_valid_url()
    {
        $this->getUrl()->shouldReturn('/subscribe');
    }

    function it_returns_query()
    {
        $this->getQuery()->shouldReturn([
            'service' => 'test',
            'subscriber' => 'john',
            'pushservicetype' => 'apns',
            'devtoken' => '123',
        ]);
    }
}
