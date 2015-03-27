<?php

namespace spec\DeSmart\Uniqush\Request\Subscribe;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SubscribeGcmDeviceRequestSpec extends ObjectBehavior
{

    function let()
    {
        $this->beConstructedWith('test', 'john', '123');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('DeSmart\Uniqush\Request\Subscribe\SubscribeGcmDeviceRequest');
        $this->shouldImplement('DeSmart\Uniqush\Request\RequestInterface');
    }

    function it_returns_valid_url()
    {
        $this->getUrl()->shouldReturn('/subscribe');
    }

    function it_returns_query()
    {
        $this->getQuery()->shouldReturn(array(
            'service' => 'test',
            'subscriber' => 'john',
            'pushservicetype' => 'gcm',
            'regid' => '123',
        ));
    }
}
