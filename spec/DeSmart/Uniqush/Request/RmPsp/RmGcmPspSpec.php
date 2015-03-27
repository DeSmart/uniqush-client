<?php

namespace spec\DeSmart\Uniqush\Request\RmPsp;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RmGcmPspSpec extends ObjectBehavior
{

    function let()
    {
        $this->beConstructedWith('test', '123');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('DeSmart\Uniqush\Request\RmPsp\RmGcmPsp');
        $this->shouldImplement('DeSmart\Uniqush\Request\RequestInterface');
    }

    function it_returns_valid_url()
    {
        $this->getUrl()->shouldReturn('/rmpsp');
    }

    function it_returns_query()
    {
        $this->getQuery()->shouldReturn(array(
            'service' => 'test',
            'pushservicetype' => 'gcm',
            'projectid' => '123',
        ));
    }
}
