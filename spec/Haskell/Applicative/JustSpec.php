<?php

namespace spec\Haskell\Applicative;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use Haskell\Applicative\Just;

class JustSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('foo');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Haskell\Applicative\ApplicativeInterface');
    }

    function it_should_wrap_a_value()
    {
        $this->pure('A')->shouldReturnAnInstanceOf('Haskell\Applicative\Just');
    }

    function it_should_apply_function_inside_applicative_to_another_applicative()
    {
        $this->beConstructedWith(function(Just $x) {
            return $x->getInternalValue() + 100;
        });

        $this->apply(new Just(100))->getInternalValue()->shouldReturn(200);
    }
}
