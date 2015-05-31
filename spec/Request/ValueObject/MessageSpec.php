<?php namespace spec\DeSmart\Uniqush\ValueObject;

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
        $this->shouldHaveType('DeSmart\Uniqush\ValueObject\Message');
    }
}
