<?php namespace spec\DeSmart\Uniqush\Request;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MessageSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith('Any message');
    }

    public function it_it_initializable()
    {
        $this->shouldHaveType('DeSmart\Uniqush\Request\Message');
    }
}
