<?php

namespace spec\DeSmart\Uniqush\Request\RmPsp;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RmApnsPspRequestSpec extends ObjectBehavior
{

    function let()
    {
        $this->beConstructedWith('test', 'pathToCert', 'qwe');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('DeSmart\Uniqush\Request\RmPsp\RmApnsPspRequest');
        $this->shouldImplement('DeSmart\Uniqush\Request\RequestInterface');
    }

    function it_returns_valid_url()
    {
        $this->getUrl()->shouldReturn('/rmpsp');
    }

    function it_returns_query()
    {
        $this->getQuery()->shouldReturn([
            'service' => 'test',
            'pushservicetype' => 'apns',
            'cert' => 'pathToCert',
            'key' => 'qwe',
        ]);
    }
}
