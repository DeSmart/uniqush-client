<?php

namespace spec\DeSmart\Uniqush\Request;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PushSpec extends ObjectBehavior
{

    function let()
    {
        $this->beConstructedWith('test', 'john');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('DeSmart\Uniqush\Request\Push');
        $this->shouldImplement('DeSmart\Uniqush\Request\RequestInterface');
    }

    function it_returns_valid_url()
    {
        $this->getUrl()->shouldReturn('/push');
    }

    function it_sends_message_to_one_subscriber()
    {
        $this->setMessage('foo');

        $this->getQuery()->shouldReturn(array(
            'service' => 'test',
            'subscriber' => 'john',
            'msg' => 'foo',
        ));
    }

    function it_sends_to_many_subscribers()
    {
        $this->beConstructedWith('test', array('john', 'tom'));
        $this->setMessage('foo');

        $this->getQuery()->shouldReturn(array(
            'service' => 'test',
            'subscriber' => 'john,tom',
            'msg' => 'foo',
        ));
    }
}
