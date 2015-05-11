<?php

namespace spec\DeSmart\Uniqush\Request;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PushRequestSpec extends ObjectBehavior
{

    function let()
    {
        $this->beConstructedWith('test', 'john');
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

    function it_sends_message_to_one_subsciber_with_sound()
    {
        $this->setMessage('foo');
        $this->setSound('default');

        $this->getQuery()->shouldReturn(array(
            'service' => 'test',
            'subscriber' => 'john',
            'msg' => 'foo',
            'sound' => 'default',
        ));
    }

    function it_sends_message_to_one_subsciber_with_user_defined_param()
    {
        $this->setMessage('foo');
        $this->setUserDefinedParam('test_param');

        $this->getQuery()->shouldReturn(array(
            'service' => 'test',
            'subscriber' => 'john',
            'msg' => 'foo',
            'userdefinedparam' => 'test_param',
        ));
    }

    function it_sends_message_to_one_subsciber_with_sound_and_user_defined_param()
    {
        $this->setMessage('foo');
        $this->setSound('default');
        $this->setUserDefinedParam('test_param');

        $this->getQuery()->shouldReturn(array(
            'service' => 'test',
            'subscriber' => 'john',
            'msg' => 'foo',
            'sound' => 'default',
            'userdefinedparam' => 'test_param',
        ));
    }
}
