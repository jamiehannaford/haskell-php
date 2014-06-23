<?php

namespace spec\Haskell\Type;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ListTypeSpec extends ObjectBehavior
{
    const VALUE = 'foo';

    function let()
    {
        $this->beConstructedWith([self::VALUE]);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Haskell\Type\ListType');
    }

    function it_should_contain_internal_value()
    {
        $this->getInternalType()->shouldReturn([self::VALUE]);
    }

    function it_should_throw_exception_for_non_traversable_internal_types()
    {
        $wrongVals = ['foo', (object)[], 100, 3.2, true];
        foreach ($wrongVals as $wrongVal) {
            $this->shouldThrow('InvalidArgumentException')->during__construct($wrongVal);
        }
    }
}
