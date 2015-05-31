<?php

namespace spec\DeSmart\Uniqush\Request\AddPsp;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AddApnsPspRequestSpec extends ObjectBehavior
{

    function let()
    {
        $this->beConstructedWith('test', 'pathToCert', 'qwe');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('DeSmart\Uniqush\Request\AddPsp\AddApnsPspRequest');
        $this->shouldImplement('DeSmart\Uniqush\Request\RequestInterface');
    }

    function it_returns_valid_url()
    {
        $this->getUrl()->shouldReturn('/addpsp');
    }

    function it_returns_query()
    {
        $this->getQuery()->shouldReturn([
            'service' => 'test',
            'pushservicetype' => 'apns',
            'cert' => 'pathToCert',
            'key' => 'qwe',
            'sandbox' => 'false',
        ]);
    }

    function it_returns_query_for_sandbox()
    {
        $this->beConstructedWith('test', 'pathToCert', 'qwe', true);

        $this->getQuery()->shouldReturn([
            'service' => 'test',
            'pushservicetype' => 'apns',
            'cert' => 'pathToCert',
            'key' => 'qwe',
            'sandbox' => 'true',
        ]);
    }
}
