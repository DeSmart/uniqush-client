<?php

namespace spec\DeSmart\Uniqush\Request;

use DeSmart\Uniqush\ValueObject\Message;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PushRequestSpec extends ObjectBehavior
{

    function let(Message $message)
    {
        $message->getContent()->willReturn('foo');
        $message->getSound()->willReturn('default');
        $message->getTtl()->willReturn(null);
        $message->getImg()->willReturn(null);
        $message->getBadge()->willReturn(null);

        $this->beConstructedWith('test', 'john', $message);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('DeSmart\Uniqush\Request\PushRequest');
        $this->shouldImplement('DeSmart\Uniqush\Request\RequestInterface');
    }

    function it_returns_valid_url()
    {
        $this->getUrl()->shouldReturn('/push');
    }

    function it_sends_message_to_one_subscriber()
    {
        $this->getQuery()->shouldReturn(array(
            'service' => 'test',
            'subscriber' => 'john',
            'msg' => 'foo',
            'sound' => 'default',
        ));
    }

    function it_sends_to_many_subscribers(Message $message)
    {
        $this->beConstructedWith('test', array('john', 'tom'), $message);

        $this->getQuery()->shouldReturn(array(
            'service' => 'test',
            'subscriber' => 'john,tom',
            'msg' => 'foo',
            'sound' => 'default',
        ));
    }

    function it_return_complete_list_of_parameters(Message $message)
    {
        $message->getContent()->willReturn('foo');
        $message->getSound()->willReturn('alarm');
        $message->getTtl()->willReturn(120);
        $message->getImg()->willReturn('foo.png');
        $message->getBadge()->willReturn(9);

        $this->beConstructedWith('test', 'john', $message);

        $this->getQuery()->shouldReturn(array(
            'service' => 'test',
            'subscriber' => 'john',
            'msg' => 'foo',
            'sound' => 'alarm',
            'badge' => 9,
            'ttl' => 120,
            'img' => 'foo.png',
        ));
    }
}
